<?php

use App\Room;
use Illuminate\Foundation\Testing\TestCase;

abstract class RoomTest extends Laravel\Lumen\Testing\TestCase
{
    private $room;

    public function testIsValid() {
    $user = new User("dd", "dd", "enzo@hotmail.fr", 15);
    $this->assertEquals(true, $user->isValid(), "User invalide");
  }
}
