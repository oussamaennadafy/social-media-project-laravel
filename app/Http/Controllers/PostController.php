<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()->with(['user', 'likes'])->get();
        return view('posts.index',compact('posts'));
    }
 
    public function store(Request $request) {

        $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->only('body'));

        return back();
    }

    public function destroy($id) {
        $post = Post::find($id);

        $this->authorize('delete',$post);

        $post->delete();
        return back();
    }


}
