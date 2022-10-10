<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'status', 'description', 'content', 'category_id'];

    public function getList($params)
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

    public function countByStatus()
    {
        $result = null;
        $query = self::with('category')->select(DB::raw('status, COUNT(id) as count'));
        $result = $query->groupBy('status')->get()->toArray();
        return $result;
    }
}
