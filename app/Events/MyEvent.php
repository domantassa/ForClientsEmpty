<?php

namespace App\Events;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MyEvent implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;

  public $message;
  public $receiverUserId;
  public $senderUserId = null;

  public function __construct($message, $receiverUserId, $senderUserId)
  {
      $this->message = $message;
      $this->receiverUserId = $receiverUserId;
      $this->senderUserId = $senderUserId;
  }

  public function broadcastOn()
  {
      return ['new-order-channel'];
  }

  public function broadcastAs()
  {
      return 'new-order-channel';
  }
}