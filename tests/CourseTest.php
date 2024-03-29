<?php

use App\Course;
use Illuminate\Foundation\Testing\TestCase;

abstract class CourseTest extends Laravel\Lumen\Testing\TestCase {
   
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCourseName()
    {
        $this->post('/course', ['name' => 'english', 'date' => '2019-06-30'], ['Content-type' => 'application/json']);

        var_dump($this->response->getContent());die();
        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }

    public function testCourseDate()
    {
        $this->post('/course', ['name' => 'english', 'date' => '2019-07-25'], ['Content-type' => 'application/json']);

        var_dump($this->response->getContent());die();
        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }
       
    public function coursesMock($valid){
        $coursesmock = $this->createMock(Courses::class);
        $coursesmock->method('isValid')
        ->willReturn($valid);
        return $coursesmock;
    }
}