<?php

namespace App\Events;

use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

/* 
    * implements ShouldBroadcast Sirve para especificar que este evento va a ser transmitido

*/
class UserDeleted implements ShouldBroadcast
{
    /* 
        Se remueve SerielizesMododels para evitar que laravel intente encontrar el usuario eliminado porque ya no existe
    */
    // use Dispatchable, InteractsWithSockets, SerializesModels;
    use Dispatchable, InteractsWithSockets;

    /* 
        public $user;
           Devuelve la información del usuario
            
    */
    public $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    /* 
        Channel('users');
            Canal público de nombre users
        \Log::debug("User deleted {$this->user->name}");
            Muestra un mensaje en storage\logs\laravel.log
    */
    public function broadcastOn()
    {
        // \Log::debug("User deleted {$this->user->name}");
        return new Channel('users');
    }
}
