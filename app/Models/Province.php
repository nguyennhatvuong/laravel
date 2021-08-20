<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Province;
class Province extends Model
{
    protected $table='provinces';
    protected $fillable=['id','name','code','special'];
    
    public function region(){
        return $this->belongsTo('App\Models\Region');
    }
    public function urban(){
        return $this->hasMany('App\Models\Urban');
    }
    public static function getRegion($request){
        $province=explode(",",$request->province);
        $data=Province::findOrFail($province[0]);
        return $data->region_id;
    }

}
