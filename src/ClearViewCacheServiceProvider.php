<?php

namespace JoshuaPack\ClearViewCache;

use Illuminate\Support\ServiceProvider;
use JoshuaPack\ClearViewCache\ClearViewCache;

class ClearViewCacheServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(ClearViewCache::class);
    }
}