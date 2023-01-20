<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Form;
use App\Models\Question;

class Page extends Model
{
    use HasFactory;

    public const PAGE_TYPE_POST = 0;

    public const PAGE_TYPE_QUESTION = 1;

    public const PAGE_TYPE_FORM = 2;

    public const PAGE_TYPE_PLAIN = 3;

    protected $fillable = [];

    public function getUrl(): string
    {
        return '/'. $this->slug;
    }

    public static function getTypes(): array
    {
        return [
            self::PAGE_TYPE_POST => 'Публикация',
            self::PAGE_TYPE_QUESTION => 'Дискуссия',
            self::PAGE_TYPE_FORM => 'Форма',
            self::PAGE_TYPE_PLAIN => 'По умолчанию',
        ];
    }

    public static function getTypeName(int $typeId): array
    {
        return self::getTypes()[$typeId];
    }

    public function posts() {
        return $this->hasOne(Post::class);
    }

    public function questions() {
        return $this->hasOne(Question::class);
    }

    public function forms() {
        return $this->hasOne(Form::class);
    }
}
