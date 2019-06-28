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
$router->get('/teacher/{id}', ['uses' => 'TeacherController@show'], function () use ($router) {
    return $router->app->version();
});
$router->post('/teacher/post/{id}', ['uses' => 'TeacherController@edit'], function () use ($router) {
    return $router->app->version();
});
$router->delete('/teacher/{id}', ['uses' => 'TeacherController@delete'], function () use ($router) {
    return $router->app->version();
});

//STUDENT
$router->get('/student/{id}', ['uses' => 'StudentController@show'], function () use ($router) {
    return $router->app->version();
});
$router->post('/student/post/{id}', ['uses' => 'StudentController@edit'], function () use ($router) {
    return $router->app->version();
});
$router->delete('/student/{id}', ['uses' => 'StudentController@delete'], function () use ($router) {
    return $router->app->version();
});

// ROOM
$router->get('/room/{id}', ['uses' => 'RoomController@show'], function () use ($router) {
    return $router->app->version();
});
$router->post('/room/post/{id}', ['uses' => 'RoomController@edit'], function () use ($router) {
    return $router->app->version();
});
$router->delete('/room/{id}', ['uses' => 'RoomController@delete'], function () use ($router) {
    return $router->app->version();
});
