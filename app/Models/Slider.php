<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'link', 'status'];
    public $oke = 'abc';

    public function getList()
    {
        $query = $this->select('id', 'name', 'description', 'link', 'status')->active();
        $result = $query->latest()->get();
        return $result;
    }

    // local scope -> global scope
    public function scopeActive($query)
    {
        $query->where('status', 1);
    }
}
