<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('isAdmin', function($user){
            return $user->role_id == 1;
        });

        $gate->define('isDoctor', function($user){
            return $user->role_id == 2;
        });

        $gate->define('isStaff', function($user){
            return $user->role_id == 3;
        });

        $gate->define('isPatient', function($user){
            return $user->role_id == 4;
        });


    }
}
