<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;
use Illuminate\Support\Facades\Schema;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        if ( Schema::hasTable('permissions') ){
            $perms = \App\Models\Permission::with('roles')->get();

            foreach($perms as $kperm => $permission){
                Gate::define($permission->name, function(User $user) use ($permission){
                    return $user->hasPermission($permission);
                });
            }

            Gate::before(function(User $user, $ability){
                if ( $user->isSuperAdmin() )
                    return true;
            });
        }
    }
}
