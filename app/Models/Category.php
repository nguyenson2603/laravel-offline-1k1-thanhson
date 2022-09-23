<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status'];
    protected $searchAccepted = ['name'];

    public function getList($params) {
        $search = isset($params['search']) ? trim($params['search']) : '';

        $query = self::with('products')->select();

        if ($search != '') {
            $query->where('name', 'LIKE', "%{$search}%");
        }

        $result = $query->latest('id')->paginate(5);

        return $result;
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
