<?php
namespace App\Http\Controllers;
use App\Teacher;
use Illuminate\Http\Request;

class TeacherControler extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function createNewTeacher(Request $request)
    {
        $response = 
        $this->validate(
            $request, [
                'lastname' => 'required',
                'firstname' => 'required',
                'birthdate' => 'required',
                'email' => 'required|email'
            ]
        );
        
        $teacher = new Teacher();
        $teacher->firstname = $request->firstname;
        $teacher->lastname = $request->lastname;
        $teacher->birthdate = $request->birthdate;
        $teacher->email = $request->email;
        $teacher->save();
        
        if($teacher->save())
        {
            $response = response()->json(
                [
                    'response' => [
                        'created' => true,
                        'userId' => $teacher->id
                    ]
                ], 201
            );
        }
        return $response;
    }
}