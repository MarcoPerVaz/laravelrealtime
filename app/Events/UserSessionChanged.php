<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

/* 
    * implements ShouldBroadcast Sirve para especificar que este evento va a ser transmitido

*/
class UserSessionChanged implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /* 
        public $message;
            El mensaje al conectarse al evento y será mandado a los usuarios
        public $type;
            Para saber si el mensaje es de éxito o error (inició o cierre de sesión)
            
    */
    public $message;
    public $type;

    /**
     * Create a new event instance.
     *
     * @return void
     */

     /* 
        * $message, $type
            Se pasan las propiedades como parámetro
        * $this->message = $message;
            Se asigna el valor de la propiedad al parámetro
     */
    public function __construct($message, $type)
    {
        $this->message = $message;
        $this->type = $type;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    /* 
        'notifications'
            Es el nombre del canal para transmitir el evento (como si fuera la frecuencia de radio a la cual los usuarios
            se conectan para escuchar o pendiente de añgún evento)
        Channel
            Canal público que independientemente hayan iniciado sesión o no puedan acceder al evento
        PrivateChannel
            Canal privado
    */
    public function broadcastOn()
    {
        /* 
            \Log::debug("{$this->message}");
                Muestra el mensaje en storage\logs\laravel.log
        */
        // \Log::debug("{$this->message}");
        // \Log::debug("{$this->type}");
        // return new Channel('notifications');
        return new PrivateChannel('notifications');
    }
}
