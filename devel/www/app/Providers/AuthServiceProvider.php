<?php

namespace Org\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'Org\Model' => 'Org\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        // the gate checks if the user is an admin or a superadmin
        Gate::define('AdminPanel', function($user) {
            return $user->hasAnyRole('admin');
        });
        Gate::define('AdminSupervisorPanel', function($user) {
            //return $user->hasAnyRole(['admin','super']);
            return $user->hasAnyRole(['admin','super']);
        });
        Gate::define('SupervisorPanel', function($user) {
            return $user->hasAnyRole('super');
        });
        // the gate checks if the user is a member
        Gate::define('UsuarioPanel', function($user) {
            //return $user->role('member');
            //return $user->authorizeRoles('user');
            return $user->hasAnyRole('user');
        });

    }
}
