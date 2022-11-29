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
        return number_format($this->price) . ' đ';
    }

    public function getSalePriceAttribute() {
        return number_format($this->price * ((100 - $this->sale) / 100)) . ' đ';
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

    public function homeList($type = null, $limit = 6, $id = null)
    {
        $result = null;
        $query = self::select('id', 'name', 'price', 'status', 'description', 'content', 'category_id', 'sale')->active();
        if($type == 'product_of_category'){
            $query->where('category_id', $id);
        }else if ($type == 'new_products') {
        } else if ($type == 'big_savings') {
            $query->latest('sale');
        } else {
            $query->where($type, 1);
        }

        $result = $query->latest()->limit($limit)->get();
        return $result;
    }

    public function scopeActive($query)
    {
        $query->where('status', 1);
    }

    public function scopeInActive($query)
    {
        $query->where('status', 0);
    }

    public function getPriceSaleFormatAttribute()
    {
        return number_format($this->price * ((100 - $this->sale) / 100));
    }

    public function getPriceFormatAttribute()
    {
        return number_format($this->price);
    }
}
