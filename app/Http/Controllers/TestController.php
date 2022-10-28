<?php

namespace App\Http\Controllers;

use app\Http\Traits\zayedtraits;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    use zayedtraits;

    public function haha(){
        return $this->zayed();

    }
    public function  getdata(){
     //   $posts=DB::table('posts')->get();
        $posts =Post::all();
        return view('allposts' , ['posts' =>$posts]);
    }
    public function addpost(){
        return view('addpost');
    }
    public function submit(Request $request){
       /// return $request->all();


       Post::create($request->all());

       return redirect()->back();
       DB::table('posts')->insert([
        'title'=>$request->title,
        'body'=>$request->body,

       ]);
     //  return "post successfully";
     return redirect('addpost');


     return back();

    }

    public function getByid($id){
        $post =Post::find($id);
        if($post){
            return view('byid' , compact('post'));
            return dd($post);

        }

        return "not found";

    }
    public  function update($id){
        $post =Post::find($id);
        return view('update' , compact('post'));
    }
    public  function updatesubmit(Request $request){
        $post=Post::find($request->id);
        if($post){
            $post->update($request->all());

        }



        return redirect()->back();






        return $request->all();

    }


    public function delete($id){
        DB::delete('delete from posts where id = ?', [$id]);
        return redirect()->back();

    }




}
