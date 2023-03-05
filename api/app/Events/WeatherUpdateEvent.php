<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class WeatherUpdateEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(private array $weatherData)
    {
    }

    /**
     * Customise the name of the broadcast event
     * @return string
     */
    public function broadcastAs(): string
    {
        return 'weather-event';
    }

    /**
     * Constructs the array of data to be broadcast as event payload
     * @return array
     */
    public function broadcastWith(): array
    {
        return ['data' => $this->weatherData];
    }

    /**
     * Determine if this event should broadcast.
     */
    public function broadcastWhen(): bool
    {
        return count($this->weatherData) > 0;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('weather-channel'),
        ];
    }
}
