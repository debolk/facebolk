<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
	protected $fillable = ['post_id', 'user_id', 'type'];
	const allowed_reactions = [
        'like' => '👍', 
        'love' => '❤', 
        'haha' => '🤣', 
        'wow' => '😮', 
        'sad' => '😢', 
        'angry' => '😡',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
}
