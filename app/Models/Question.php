<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function articles() {
        return $this->hasMany(PostArticle::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
