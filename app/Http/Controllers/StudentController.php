<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Traits\StudentTrait;
use App\Models\User;

class StudentController extends Controller
{
    use StudentTrait;


    public function tests(){
        return $this->test(User::class);
        //return $this->fuck(123);
    }
}
