# ClearViewCache
Clears the cached view files, for laravel lumen 5.8

# Installation
    composer require joshuapack/clear-view-cache

# Register the Service Provider 
in bootstrap/app.php

    $app->register('JoshuaPack\ClearViewCache\ClearViewCacheServiceProvider');

# Clear all cached views:
    php artisan view:clear

# License

MIT 
 
