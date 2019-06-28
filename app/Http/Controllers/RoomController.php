<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function createNewRoom(Request $request)
    {
        $response = 
        $this->validate(
            $request, [
                'room_number' => 'required'|'unique:room_number',
                'capacity' => 'required|number'
            ]
        );
        
        $room = new Room();
        $room->name = $request->room_number;
        $room->email = $request->capacity;
        $room->save();
        
        if($room->save())
        {
            $response = response()->json(
                [
                    'response' => [
                        'created' => true,
                        'roomId' => $room->id
                    ]
                ], 201
            );
        }
        return $response;
    }
}