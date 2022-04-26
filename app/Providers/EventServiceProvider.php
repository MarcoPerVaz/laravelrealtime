<?php

namespace App\Providers;

use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use App\Listeners\BroadcastUserLoginNotification;
use App\Listeners\BroadcastUserLogoutNotification;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    /* 
        *No olvidar importar use Illuminate\Auth\Events\Login;
        *No olvidar importar use App\Listeners\BroadcastUserLoginNotification;
        *No olvidar importar use Illuminate\Auth\Events\Logout;
        *No olvidar importar use App\Listeners\BroadcastUserLogoutNotification;
    */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        Login::class => [
            BroadcastUserLoginNotification::class
        ],
        Logout::class => [
            BroadcastUserLogoutNotification::class
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
