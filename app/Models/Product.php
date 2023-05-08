<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'slug',
        'product_id',
        'category_id',
        'description_1', 
        'description_2',
        'description_3',
        'description_4',
        'description_5',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    protected static function boot() {

        parent::boot();

        static::creating(function ($question) {
            $question->slug = Str::slug($question->title);
        });
    }
}
