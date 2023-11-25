<?php

use App\Listeners\SpinListener;
use App\Models\User;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Log;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

//
Broadcast::channel('GLOBAL_STATE_CHANNEL', function (User $user) {
    Log::info("hello");
    return true;
//    return $user->id === Order::findOrNew($orderId)->user_id;
});