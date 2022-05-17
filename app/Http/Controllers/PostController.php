<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    // CRUD C Query Builder
    public function addPost(){
        return view('add-post');

    } // end method

    // CRUD C Query Builder
    public function addPostSubmit(Request $request){

        DB::table('posts')->insert([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_creatred','Post has been created successfully!');

    } // end method




    // CRUD R Query Builder
    public function getAllPost(){

        $posts = DB::table('posts')->get();
        return view('posts', compact('posts'));

    } // end method

    // CRUD R Query Builder
    public function getPostById($id){

        $post = DB::table('posts')->where('id',$id)->first();
        return view('single-post', compact('post'));

    } // end method




    // CRUD U Query Builder
    public function editPost($id){

        $post = DB::table('posts')->where('id',$id)->first();
        return view('edit-post', compact('post'));

    } // end method

   
    // CRUD U Query Builder
    public function updatePost(Request $request){

        DB::table('posts')->where('id',$request->id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_updated','Post has been updated successfully!');

    } // end method



 
    // CRUD D Query Builder
    public function deletePost($id){

        DB::table('posts')->where('id',$id)->delete();
        return back()->with('post-deleted','Post has been deleted successfully!');

    } // end method



}
