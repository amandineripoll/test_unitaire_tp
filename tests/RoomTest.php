<?php

use App\Room;
<<<<<<< HEAD
use Illuminate\Foundation\Testing\TestCase;
=======
>>>>>>> d59299894e25b31580d124e3a4732b7908e52026

abstract class RoomTest extends Laravel\Lumen\Testing\TestCase
{
    private $room;

    public function testIsValid() {
    $user = new User("dd", "dd", "enzo@hotmail.fr", 15);
    $this->assertEquals(true, $user->isValid(), "User invalide");
  }
}
