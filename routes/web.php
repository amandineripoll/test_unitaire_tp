<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
// TEACHER
$router->post('/teacher', 'TeacherController@createNewTeacher');

//STUDENT
$router->post('/student', 'StudentController@createNewStudent');

//ROOMS
$router->post('/rooms', 'RoomController@createNewRoom');

//COURSES
$router->post('/course', 'CourseController@createNewCourse');
