<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    //

    public function addpost()
    {
      $post=new Post();
      $post->title='first';
      $post->body="describw first";
      $post->save();
      return "post creted successfully";

    }


    public function comment($id)
    {
        # code...
        $post=Post::find($id);
        $cmt=new Comment();
        $cmt->comment="first comment";
        $post->comments()->save($cmt);
        return "comment has been posted";
    }

    public function getCommentByPost($id)
    {
        # code...
        $cmt=Post::find($id)->comments; 
        return $cmt;
    }
   

}
