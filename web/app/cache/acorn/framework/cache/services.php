<?php return array (
  'providers' => 
  array (
    0 => 'Illuminate\\Bus\\BusServiceProvider',
    1 => 'Illuminate\\Cache\\CacheServiceProvider',
    2 => 'Roots\\Acorn\\Assets\\AssetsServiceProvider',
    3 => 'Roots\\Acorn\\Filesystem\\FilesystemServiceProvider',
    4 => 'Roots\\Acorn\\Providers\\AcornServiceProvider',
    5 => 'Roots\\Acorn\\View\\ViewServiceProvider',
    6 => 'Genero\\Sage\\NativeBlock\\NativeBlockServiceProvider',
    7 => 'Log1x\\Navi\\Providers\\NaviServiceProvider',
    8 => 'Carbon\\Laravel\\ServiceProvider',
    9 => 'Spatie\\GoogleFonts\\GoogleFontsServiceProvider',
    10 => 'App\\Providers\\ThemeServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'Roots\\Acorn\\Assets\\AssetsServiceProvider',
    1 => 'Roots\\Acorn\\Filesystem\\FilesystemServiceProvider',
    2 => 'Roots\\Acorn\\Providers\\AcornServiceProvider',
    3 => 'Roots\\Acorn\\View\\ViewServiceProvider',
    4 => 'Genero\\Sage\\NativeBlock\\NativeBlockServiceProvider',
    5 => 'Log1x\\Navi\\Providers\\NaviServiceProvider',
    6 => 'Carbon\\Laravel\\ServiceProvider',
    7 => 'Spatie\\GoogleFonts\\GoogleFontsServiceProvider',
    8 => 'App\\Providers\\ThemeServiceProvider',
  ),
  'deferred' => 
  array (
    'Illuminate\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\Dispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\QueueingDispatcher' => 'Illuminate\\Bus\\BusServiceProvider',
    'Illuminate\\Bus\\BatchRepository' => 'Illuminate\\Bus\\BusServiceProvider',
    'cache' => 'Illuminate\\Cache\\CacheServiceProvider',
    'cache.store' => 'Illuminate\\Cache\\CacheServiceProvider',
    'cache.psr6' => 'Illuminate\\Cache\\CacheServiceProvider',
    'memcached.connector' => 'Illuminate\\Cache\\CacheServiceProvider',
    'Illuminate\\Cache\\RateLimiter' => 'Illuminate\\Cache\\CacheServiceProvider',
  ),
  'when' => 
  array (
    'Illuminate\\Bus\\BusServiceProvider' => 
    array (
    ),
    'Illuminate\\Cache\\CacheServiceProvider' => 
    array (
    ),
  ),
);