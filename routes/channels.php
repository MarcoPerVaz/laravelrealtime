<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

/* 
    'notifications'
        Nombre del canal declarado en la función broadcastOn() en app\Events\UserSessionChanged.php
    return $user != null;
        Si no existe el usuario devuelve null y si devuelve a algún usuario entonces accede al canal de comunicación
*/
Broadcast::channel('notifications', function ($user) {
    return $user != null;
});

/* 

*/
Broadcast::channel('chat', function ($user) {
    if ($user != null) {
        return ['id' => $user->id, 'name' => $user->name];
    }
});