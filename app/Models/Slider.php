<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'link', 'status'];
    // public $oke;

    // public function __construct()
    // {
    //     $this->oke = 123;
    // }

    public function getList()
    {
        // $oke = $this->oke;
        $query = self::select('id', 'name', 'description', 'link', 'status')->where('status', 1);
        $result = $query->latest()->get()->toArray();
        return $result;
    }
}
