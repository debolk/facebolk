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

    public function getReactionStringAttribute()
    {
        $reaction_counts = [];
        foreach (array_keys(Reaction::allowed_reactions) as $reaction_type)
        {
            $amount = $this->reactions()->where('type', $reaction_type)->count();
            if ($amount > 0)
                $reaction_counts[] = Reaction::allowed_reactions[$reaction_type] . $amount;
        }
        return join(" ", $reaction_counts);
    }
}
