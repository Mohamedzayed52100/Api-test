<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::any('getposts' , [TestController::class , 'getdata']);

Route::get('/addpost' , [TestController::class , 'addpost']);
Route::any('/postsubmit', [TestController::class  , 'submit'])->name('register.new');

Route::get('/getbyid/{id}' , [TestController::class , 'getByid']);


Route::any('/update/{id}' , [TestController::class , 'update']);


Route::any('updatesubmit' , [TestController::class , 'updatesubmit']);



Route::any('delete/{id}' , [TestController::class , 'delete']);
Route::any('haha' , [TestController::class , 'haha']);




Route::get('/', function () {
    return view('welcome');
});
Route::resource('students', StudentController::class);
Route::any('tests' , [StudentController::class , 'tests']);

