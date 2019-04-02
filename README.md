# ClearViewCache
Clears the cached view files, for laravel lumen 5.8

If you would like for me to submit to packigist let me know.

# Installation
in composer.json

    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/joshuapack/ClearViewCache5"
        }
    ],

and require

    "joshuapack/clear-view-cache": "^1.1"

now run

    composer update

# Register the Service Provider 
in bootstrap/app.php

    $app->register('JoshuaPack\ClearViewCache\ClearViewCacheServiceProvider');

# Clear all cached views:
    php artisan view:clear

# License

MIT 
 
