<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use app\Http\Traits\TestTrait;
use App\Models\Post;

use Illuminate\Http\Request;

///TestTrait


class PostController extends Controller
{
  ///  use TestTrait;
    public function getdata()
    {

       // $t =new  TestTrait();
        $posts=Post::all();
      ////  return $t->test($posts , "good" , 401);

       // return response()->json([$posts]);
       $message="moahmned";
       return testme($posts , $message , 401);


    //    return response()->json([
    //     'posts'=>$posts,
    //     'message'=>$message,
    //     'status'=>401,

    //    ]);
      ///  return $this->test($posts, $message, 401);
    }

    
}

