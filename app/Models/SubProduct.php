<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SubProduct extends Model
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

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    protected static function boot() {

        parent::boot();

        static::creating(function ($question) {
            $question->slug = Str::slug($question->title);
        });
    }
}
