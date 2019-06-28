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
        
        $response = response()->json(
            [
                'response' => [
                    'created' => true,
                    'id' => $student->id
                ]
            ], 201
        );

        return $response;
    }
}