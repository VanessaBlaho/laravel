<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('admin', function($user) {
            //decide if the user is an administrator (return true)
            if (str_ends_with($user->email, 'vanessa@email.com')) {
                return true;
            }
            //or not(return false)
            else {
                return false;
            }
        });
    }
}