<?php
namespace App\Http\Traits;
use App\Models\Student;
use App\Models\User;

trait StudentTrait {
    public function index() {
        // Fetch all the students from the 'student' table.
        $student = Student::all();
        return view('welcome')->with(compact('student'));
    }


    public  function fuck($data  =null){
        return "thisname" .$data;
    }
    public function test($model)
    {
        return $model::all();

       ///return dd(User::all());
      //  return view('welcome');
    }
}

