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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('editor', function ($user) {
            return $user->hasRole('editor');
        });
        Gate::define('publisher', function ($user) {
            return $user->hasRole('publisher');
        });

        Gate::define('destroyer', function ($user) {
            return $user->hasRole('destroyer');
        });
    }
}
