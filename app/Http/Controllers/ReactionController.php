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
    	if (! in_array(request('type'), Reaction::allowed_reactions )){
    		return "illegal reaction type provided: " . request('type');
    	}

    	$reaction = Reaction::where('user_id', auth()->id())->where('post_id', $post->id)->first();
    	if ($reaction)
    	{
    		$reaction->delete();
    		return "unliked";
    	}

    	Reaction::create([
    		'user_id' => auth()->id(),
    		'post_id' => $post->id,
    		'type' => request('type')
    	]);
    	return "liked";
    }
}
