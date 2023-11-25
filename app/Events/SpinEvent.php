<?php

namespace App\Events;

use App\Models\Spin;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SpinEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private int $luckyNumber;

    /**
     * Create a new event instance.
     */
    public function __construct(int $luckyNumber)
    {
        $this->luckyNumber = $luckyNumber;
    }


    /**
     * Get the data to broadcast.
     *
     * @return array<string, mixed>
     */
    public function broadcastWith(): array
    {
        $spinHistory = Spin::orderBy("created_at", "desc")
                            ->limit(10)
                            ->get();
        $user = User::find(0);
        return [
            "lastTenSpins" => $spinHistory,
            "luckyNumber" => $this->luckyNumber,
            "hit" => rand(0,1),
            "user" => $user
        ];
    }


    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel("GLOBAL_STATE_CHANNEL")
        ];
    }
}
