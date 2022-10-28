<?php
if (! function_exists('testme')) {
    function testme($posts , $message =null , $status=null)
    {
        return response()->json([
            'posts'=>$posts,
            'message'=>$message,
            'status'=> $status,

           ] , $status);
    }
}
