<?php

use BeyondCode\LaravelWebSockets\Facades\WebSocketsRouter;
use Domain\TableWebsocket;
use Illuminate\Support\Facades\Broadcast;

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

WebSocketsRouter::webSocket('/ws/table/', TableWebsocket::class);

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
