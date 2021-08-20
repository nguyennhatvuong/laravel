<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryCustomer extends Model
{
    protected $fillable=['title','discount','from_point','to_point','slug'];
    public function scopeStatus($query){
        return $query->where('status', '1');
    }
}
