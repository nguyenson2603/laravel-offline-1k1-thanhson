<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'status', 'description', 'content', 'category_id'];

    // public function getPriceAttribute($value)
    // {
    //     return number_format($value) . 'vnđ';
    // }

    // PriceFormatted -> price_formatted
    // PriceFormattedAbc -> price_formatted_abc
    // PriceFormattedABC -> price_formatted_a_b_c

    public function getList($params) {
        $search = isset($params['search']) ? trim($params['search']) : '';
        $filter = isset($params['filter']) ? trim($params['filter']) : '';

        $query = self::with('category')->select();

        if ($search != '') {
            if($filter != ''){
                $query->where("{$filter}", 'LIKE', "%{$search}%");
            }else{
                $query->where("name", 'LIKE', "%{$search}%");
            }
        }

        $result = $query->latest('id')->paginate(5);

        return $result;
    }

    public function getPriceFormattedAttribute()
    {
        return number_format($this->price) . ' vnđ';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
