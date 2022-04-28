<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

/* 
    * implements ShouldBroadcast Sirve para especificar que este evento va a ser transmitido

*/
class WinnerNumberGenerated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /* 
        public $number;
            El tiempo almacenado al momento de parar la ruleta
            
    */
    public $number;

    /**
     * Create a new event instance.
     *
     * @return void
     */

     /* 
        $this->number = $number;
            Se asigna el valor de la propiedad al parámetro
     */
    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    /* 
        'game'
            Es el nombre del canal para transmitir el evento (como si fuera la frecuencia de radio a la cual los usuarios
            se conectan para escuchar o pendiente de algún evento)
        Channel
            Canal público que independientemente hayan iniciado sesión o no puedan acceder al evento
        \Log::debug($this->number);
            Muestra el mensaje en storage\logs\laravel.log
    */
    public function broadcastOn()
    {
        // \Log::debug($this->number);
        return new Channel('game');
    }
}
