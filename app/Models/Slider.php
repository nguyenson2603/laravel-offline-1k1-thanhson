<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'link', 'status'];
    protected $searchAccepted = ['name'];

    public function getList($params = null)
    {
        $search = isset($params['search']) ? trim($params['search']) : '';
        $filter = isset($params['filter']) ? trim($params['filter']) : '';
        $filterStatus = isset($params['filter-status']) ? trim($params['filter-status']) : '';

        $query = self::select();
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

        $result = $query->latest('id')->paginate(7);

        return $result;
    }

    public function countByStatus()
    {
        $result = null;
        $query = self::select(DB::raw('status, COUNT(id) as count'));
        $result = $query->groupBy('status')->get()->toArray();
        return $result;
    }
}
