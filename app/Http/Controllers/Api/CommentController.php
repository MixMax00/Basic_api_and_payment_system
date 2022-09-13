<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
   public function comment($post_id)
   {
   		$comments = Comment::where('post_id', $post_id)->orderBy('id', 'desc')->get();
   		return view('Templete.comments', compact('comments'));
   }

   public function store(Request $request, $id)
   {
   	  $request->validate([
   	  	 'new_comment' => 'required|max:500',
   	  ],
   	  [
   	  	'new_comment.required' => 'Please give comment'
   	  ]);


   	  Comment::create([
   	  	"comment" => $request->new_comment,
   	  	"post_id"  => $id,
   	  	"user_id"  => 5
	  ]);

	  return response()->json([

	 		"status" => true,
	 		"data"   => "Comment post successfully!"
	  ]);


   	 
   }



   public function backgound()
   {
      $backgound_color = "#fff";

      return $backgound_color;
   }
}
