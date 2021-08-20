<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Models\Region;
use App\Models\Urban;
class Profile extends Model
{
    protected $table="profiles";
    protected $fillable=['name','user_id','phone','address','ward','province','district','default','urban','region'];
    
    public static function store($request){
        $region=Province::getRegion($request);
        $urban=Urban::getUrban($request);
        $profile=new Profile();
        $profile->user_id=Auth::user()->id;
        $profile->name=$request->name;
        $profile->phone=$request->phone;
        $profile->address=$request->address;
        $profile->urban=$urban;
        $profile->region=$region;
        $profile->province=$request->province;
        $profile->district=$request->district;
        $profile->ward=$request->ward;
        $profile->default=$request->isDefault;
        $profile->type=$request->type;
        $profile->save();
        return true;
    }
    public static function show($user_id){
        return Profile::where('user_id',$user_id)->get();
    }
    public function province()
    {
        return $this->belongsTo('App\Models\Province');
    }
    public function district()
    {
        return $this->belongsTo('App\Models\District');
    }
    public function ward()
    {
        return $this->belongsTo('App\Models\Ward');
    }
    public function scopeDefault($query){
        return $query->where('default', '1');
    }
    public function scopeStatus($query){
        return $query->where('status', '1');
    }
}
