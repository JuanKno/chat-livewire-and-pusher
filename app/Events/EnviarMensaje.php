<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class EnviarMensaje implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message, $user;

    public function __construct($user, $message)
    {
        $this->user = $user;
        $this->message = $message;
    }


    public function broadcastOn()
    {
        return 'chat-channel';
    }


    public function broadcastAs()
    {
        return 'chat-event';
    }
}
