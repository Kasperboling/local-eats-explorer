<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

try {
    \Roots\bootloader();
} catch (Throwable $e) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://docks.roots.io/acorn/2.x/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}


/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters', 'admin', 'helpers'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

/*
|--------------------------------------------------------------------------
| Enable Sage Theme Support
|--------------------------------------------------------------------------
|
| Once our theme files are registered and available for use, we are almost
| ready to boot our application. But first, we need to signal to Acorn
| that we will need to initialize the necessary service providers built in
| for Sage when booting.
|
*/

add_theme_support('sage');

add_action('gform_after_submission_2', 'custom_action_after_apc', 10, 2);
// (The _2 in the gform_after_submission is the form id.)

function custom_action_after_apc($entry, $form)
{

    // If the Advanced Post Creation add-on is used, more than one post
    // may be created for a form submission.
    // The Post-IDs are stored as an array in the entry meta.
    $created_posts = gform_get_meta(
        $entry['id'],
        'gravityformsadvancedpostcreation_post_id'
    );

    foreach ($created_posts as $post) {
        $post_id = $post['post_id'];

        // Get the title and featured image URL from the form fields.
        $title = get_field('title', $post_id);
        // $title = 'nu ska vi testa';
        $featured_image_url = get_field('featured_image', $post_id);
        // $featured_image_url

        // Update the post-title.
        $post_data = array(
            'ID' => $post_id,
            'post_title' => $title,
        );

        wp_update_post($post_data);

        // No featured image to update.
        if (empty($featured_image_url)) {
            continue;
        }

        // Download the image and set it as the featured image.
        $image_id = custom_upload_featured_image(
            $featured_image_url,
            $post_id
        );

        // Set the featured image for the post.
        set_post_thumbnail($post_id, $image_id);
    }
}

// Function to upload and set a featured image from a URL.
function custom_upload_featured_image($image_url, $post_id)
{
    require_once(ABSPATH . 'wp-admin/includes/file.php');
    require_once(ABSPATH . 'wp-admin/includes/media.php');
    require_once(ABSPATH . 'wp-admin/includes/image.php');

    // Upload the image from the URL.
    $attachment_id = media_sideload_image($image_url, $post_id, null, 'id');

    if (! is_wp_error($attachment_id)) {
        return $attachment_id;
    }

    return 0;
}
