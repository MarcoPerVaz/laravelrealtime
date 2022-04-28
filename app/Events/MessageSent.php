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
class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /* 
        public $user;
           Devuelve la información del usuario
        public $message;
           Devuelve el mensaje
            
    */
    public $user;
    public $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, $message)
    {
        $this->user = $user;
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    /* 
        PresenceChannel('users');
            Canal de presencia de nombre chat
        \Log::debug("{$this->user->name}: {$this->message}");
            Muestra un mensaje en storage\logs\laravel.log
    */
    public function broadcastOn()
    {
        // \Log::debug("{$this->user->name}: {$this->message}");
        return new PresenceChannel('chat');
    }
}
