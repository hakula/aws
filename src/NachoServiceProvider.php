<?php

namespace hakula\nacho;

use Illuminate\Support\ServiceProvider;

class NachoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		echo "Hello World!";
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
