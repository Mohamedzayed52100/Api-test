<?php
namespace app\Http\Traits;

trait TestTrait
{
    public function test($posts , $message =null , $status =null)
    {

      ///return "mohamed";
        return response()->json([
            'posts' => $posts,
            'message'=>$message,
            'status'=>$status,
        ] , $status);



    }
}
