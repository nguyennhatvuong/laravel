<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Urban extends Model
{
    protected $table='urbans';
    protected $fillable=['id','name','code','province_id'];
    public static function getUrban($request){
        $district=explode(",",$request->district);
        return Urban::where('code',$district[0])->first()==null?0:1;
    }
}
