<?php
namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
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
    public function createNewStudent(Request $request)
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
        
        $student = new Student();
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->birthdate = $request->birthdate;
        $student->email = $request->email;
        $student->save();
        
        if($student->save())
        {
            $response = response()->json(
                [
                    'response' => [
                        'created' => true,
                        'userId' => $student->id
                    ]
                ], 201
            );
        }
        return $response;
    }
}