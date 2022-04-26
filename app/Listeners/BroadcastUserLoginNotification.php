<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use App\Events\UserSessionChanged;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class BroadcastUserLoginNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */

     /* 
        * No olvidar importar use Illuminate\Auth\Events\Login; 
        * No olvidar importar use App\Events\UserSessionChanged;
        *Login $event
            Evento de tipo Login
        * broadcast()
            Transmitir usando función global de laravel
        * new UserSessionChanged()
            Es el evento app\Events\UserSessionChanged.php
        * {$event->user->name} is online", 'success')
            Los 2 parámetros definidos en el evento UserSessionChanged ($message, $type)
            $event->user->name
                Obtiene el nombre del usuario que acaba de iniciar sesión
            'success'
                El tipo ($type)

     */
    public function handle(Login $event)
    {
        broadcast(new UserSessionChanged("{$event->user->name} is online", 'success'));
    }
}
