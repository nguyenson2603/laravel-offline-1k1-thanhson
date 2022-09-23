<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'status'];

    // public function getPriceAttribute($value)
    // {
    //     return number_format($value) . 'vnđ';
    // }

    // PriceFormatted -> price_formatted
    // PriceFormattedAbc -> price_formatted_abc
    // PriceFormattedABC -> price_formatted_a_b_c

    public function getPriceFormattedAttribute()
    {
        return number_format($this->price) . ' vnđ';
    }

    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}
