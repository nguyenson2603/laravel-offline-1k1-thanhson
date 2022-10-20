<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'status', 'description', 'content', 'category_id', 'is_top_collection', 'is_trending', 'is_feature', 'is_best_seller', 'is_on_sale', 'sale'];

    public function getList($params, $pagination = 5)
    {
        $search = isset($params['search']) ? trim($params['search']) : '';
        $filter = isset($params['filter']) ? trim($params['filter']) : '';
        $filterStatus = isset($params['filter-status']) ? trim($params['filter-status']) : '';

        $query = self::with('category')->select();
        if ($filterStatus !== 'all' && $filterStatus !== '') {
            $query->where('status', '=', $filterStatus);
        }
        if ($search != '') {
            if ($filter != '' && $filter != 'all') {
                $query->where("{$filter}", 'LIKE', "%{$search}%");
            } else {
                foreach ($this->fillable as $colum) {
                    $query->orWhere($colum, 'LIKE', "%{$search}%");
                }
            }
        }

        $result = $query->latest('id')->paginate($pagination);

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

    public function countByStatus()
    {
        $result = null;
        $query = self::with('category')->select(DB::raw('status, COUNT(id) as count'));
        $result = $query->groupBy('status')->get()->toArray();
        return $result;
    }

    public function homeList($type = null, $limit = 6)
    {
        if ($type == 'new_products') {
            $query = self::select('id', 'name', 'price', 'status', 'description', 'content', 'category_id', 'sale')->where('status', 1);
            $result = $query->latest()->limit($limit)->get()->toArray();
        } else if ($type == 'big_savings') {
            $query = self::select('id', 'name', 'price', 'status', 'description', 'content', 'category_id', 'sale')->where('status', 1)->orderByRaw('sale DESC');
            $result = $query->latest()->limit($limit)->get()->toArray();
        } else {
            $query = self::select('id', 'name', 'price', 'status', 'description', 'content', 'category_id', 'sale', $type)->where($type, 1)->where('status', 1);
            $result = $query->latest()->limit($limit)->get()->toArray();
        }
        return $result;
    }
}
