<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostArticle;
use App\Models\PostSLide;
use App\Models\Comment;
use App\Models\Survey;

class Post extends Model
{
    use HasFactory;

    public function articles() {
        return $this->hasMany(PostArticle::class);
    }

    public function slides() {
        return $this->hasMany(PostSlide::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function surveys() {
        return $this->hasMany(Survey::class);
    }
}
