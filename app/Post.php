<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // fillable allows mass assignment
    protected $fillable = ['body', 'user_id', 'parent'];

    public function comments()
    {
        $comments = Post::where('parent', $this->id)->get();
    	return $comments;
    }

    public function addComment($body)
    {
    	Post::create([
            'body' => request('body'),
            'user_id' => auth()->id(),
            'parent' => $this->id
        ]);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function reactions()
    {
        return $this->hasMany(Reaction::class);
    }
}
