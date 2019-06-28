<?php
use App\Student;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class StudentTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStudentName()
    {   

        $this->post('/student',['firstname' => 'Leo', 'lastname' => 'Wattier', 'email' => 'leo.wattier@free.fr', 'birthdate' => '1993-09-23'], ['Content-type'=> 'application/json']);

        var_dump($this->response->getContent());die();

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }

    public function testStudentLastname()
    {   

        $this->post('/student',['firstname' => 'Leo', 'lastname' => '', 'email' => 'leo.wattier@free.fr', 'birthdate' => '1993-09-23'], ['Content-type'=> 'application/json']);

        var_dump($this->response->getContent());die();

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }

    public function testStudentEmail()
    {   

        $this->post('/student',['firstname' => 'Leo', 'lastname' => '', 'email' => 'leo.wattierfreefr', 'birthdate' => '1993-09-23'], ['Content-type'=> 'application/json']);

        var_dump($this->response->getContent());die();

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }

    public function studentMock($valid){
        $studentmock = $this->createMock(Student::class);
        $studentmock->method('isValid')
        ->willReturn($valid);
        return $studentmock;
      }
}
