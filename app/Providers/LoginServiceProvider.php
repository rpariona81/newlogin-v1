<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \App\Lib\MoodleHasher;
use Illuminate\Support\Facades\Hash;

class LoginServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        Hash::extend('moodle', function ($app) {
            return new MoodleHasher(
                config('hashing.moodle.rounds', 10000)
            );
        });
    }
}
