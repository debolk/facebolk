<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$posts = Post::where('parent', null)->orderBy('created_at', 'desc')->get();

    	return view('content', compact('posts'));
    }

    public function store()
    {
    	$this->Validate(request(), [
    		'body' => 'required|min:4'
    	]);

    	Post::create([
    		'body' => request('body'),
    		'user_id' => auth()->id(),
    	]);

    	return redirect('/');
    }

    public function comment(Post $post)
    {
    	$this->Validate(request(), [
    		'body' => 'required|min:2'
    	]);

    	$post->addComment(request('body'));

    	return redirect('/');
    }

    public function addReplySection(int $post_id)
    {
    	return view('comments/write_reply_form', compact('post_id'));
    }
}
