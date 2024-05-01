<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['username','title','description',];

    public function comments()
    {
        return $this->belongsToMany(Comment::class, 'post_comments');
    }
}
