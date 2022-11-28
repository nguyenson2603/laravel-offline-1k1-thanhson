<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use HasFactory;
    use NodeTrait;

    protected $fillable = ['name', 'status', 'parent_id'];
    protected $searchAccepted = ['name'];

    public function getList($params = null)
    {
        $search = isset($params['search']) ? trim($params['search']) : '';
        $filter = isset($params['filter']) ? trim($params['filter']) : '';
        $filterStatus = isset($params['filter-status']) ? trim($params['filter-status']) : '';

        $query = self::with('products')->select();
        if ($filterStatus !== 'all' && $filterStatus !== '') {
            $query->where('status', '=', $filterStatus);
        }
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

    public function getNameWithDepthAttribute()
    {
        return str_repeat("--|--", $this->depth) . $this->name;
    }

    public function categories()
    {
        return self::with('products')->select('id', 'name')->where('status', '1')->latest()->get()->toArray();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function countByStatus()
    {
        $result = null;
        $query = self::with('products')->select(DB::raw('status, COUNT(id) as count'));
        $result = $query->groupBy('status')->get()->toArray();
        return $result;
    }
}
