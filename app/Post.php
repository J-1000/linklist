<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'url', 'source_domain'];

    public function postedBy()
    {
        return $this->belongsTo(User::class);
    }
}
