<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class CourseController extends BaseController
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

    public function createNewCourse(Request $request) {
        $response = 
        $this->validate(
            $request, [
                'name' => 'required',
                'date' => 'required',
            ]
        );
        
        $course = new Course();
        $course->name = $request->name;
        $course->date = $request->date;
        $course->save();
        
        if($course->save())
        {
            $response = response()->json(
                [
                    'response' => [
                        'created' => true,
                        'CourseId' => $course->id
                    ]
                ], 201
            );
        }
        return $response;
    }

    
}
