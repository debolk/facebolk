<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Reaction;

class ReactionController extends Controller
{
    public function react(Post $post)
    {
    	if (! array_key_exists(request('type'), Reaction::allowed_reactions )){
    		return "ERROR: illegal reaction type provided: " . request('type');
    	}

    	$reaction = Reaction::where('user_id', auth()->id())->where('post_id', $post->id)->first();
    	if ($reaction)
    	{
    		$reaction->delete();
    		// return 'unliked';
    		return view('posts.react_button', compact('post'));
    	}

    	Reaction::create([
    		'user_id' => auth()->id(),
    		'post_id' => $post->id,
    		'type' => request('type')
    	]);
    	// return 'liked';
    	return view('posts.react_button', compact('post'));
    }

    public function reactions(Post $post)
    {
    	return view('posts.reactions', compact('post'));
    }
}
