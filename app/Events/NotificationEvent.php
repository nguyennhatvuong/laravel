<?php
namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Http\Request;

class NotificationEvent implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;


  public $message;

  public function __construct($data)
  {
      $this->message  = $data;
  }

  public function broadcastOn()
  {
      return ['my-channel'];
  }
}