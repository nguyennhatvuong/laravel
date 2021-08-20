<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table='regions';
    protected $fillable=['id','name','code'];
    public function province(){
        return $this->hasMany('App\Models\Province');

    }

}
