<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title','image','slug','description'];

    protected static function boot() {

        parent::boot();

        static::creating(function ($question) {
            $question->slug = Str::slug($question->title);
        });
    }
}
