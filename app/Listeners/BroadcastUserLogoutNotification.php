<?php

namespace App\Listeners;

use App\Events\UserSessionChanged;
use Illuminate\Auth\Events\Logout;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class BroadcastUserLogoutNotification
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
        * No olvidar importar use Illuminate\Auth\Events\Logout; 
        * No olvidar importar use App\Events\UserSessionChanged;
        *Logout $event
            Evento de tipo Logout
        * broadcast()
            Transmitir usando función global de laravel
        * new UserSessionChanged()
            Es el evento app\Events\UserSessionChanged.php
        * {$event->user->name} is offline", 'danger')
            Los 2 parámetros definidos en el evento UserSessionChanged ($message, $type)
            $event->user->name
                Obtiene el nombre del usuario que acaba de iniciar sesión
            'success'
                El tipo ($type)

     */
    public function handle(Logout $event)
    {
        broadcast(new UserSessionChanged("{$event->user->name} is offline", 'danger'));
    }
}
