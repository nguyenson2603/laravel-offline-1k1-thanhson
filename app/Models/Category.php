<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status'];
    protected $searchAccepted = ['name'];

    public function getList($params = null)
    {
        $search = isset($params['search']) ? trim($params['search']) : '';
        $filter = isset($params['filter']) ? trim($params['filter']) : '';

        $query = self::with('products')->select();

        if ($search != '') {
            if ($filter != '') {
                $query->where("{$filter}", 'LIKE', "%{$search}%");
            } else {
                $query->where("name", 'LIKE', "%{$search}%");
            }
        }

        $result = $query->latest('id')->paginate(5);

        return $result;
    }

    public function getProductListAttribute()
    {
        return $this->products->implode('name', '<br>');
    }

    public function categories()
    {
        return self::with('products')->select('id', 'name')->latest()->get()->toArray();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
