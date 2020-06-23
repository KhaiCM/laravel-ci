<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Topic;
use App\Models\Post;

class Comment extends Model
{
    public function user()
	{
	    return $this->belongsTo(User::class);
	}

	public function topic()
	{
	    return $this->belongsTo(Topic::class);
	}

	public function post()
	{
		return $this->belongsTo(Post::class);
	}
}
