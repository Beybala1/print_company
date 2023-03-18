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
        'image', 
        'slug',
        'product_id',
        'description_1', 
        'description_2',
        'description_3',
        'description_4',
        'description_5',
    ];

    public function subproducts()
    {
        return $this->hasMany(Product::class);
    }

    protected static function boot() {

        parent::boot();

        static::creating(function ($question) {
            $question->slug = Str::slug($question->title);
        });
    }
}
