<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Province;
class RouteShip extends Model
{
    protected $table='route_ships';
    protected $fillable=['name','description','note','checkSpecial','checkProvince','checkRegion'];
    public static function getRouteShip($user){
        $checkRegion=$checkProvince=$checkSpecial=0;
        $shop=Information::first();
        $user_province_id=explode(',',$user->province)[0];
        $shop_province_id=explode(',',$shop->province)[0];
        Province::where('id',$user_province_id)->first()->special==1?$checkSpecial++:$checkSpecial;
        Province::where('id',$shop_province_id)->first()->special==1?$checkSpecial++:$checkSpecial;
        $user_province_id==$shop_province_id?$checkProvince++:$checkProvince;
        $user->region==$shop->region?$checkRegion++:$checkRegion;
        $routeShip=RouteShip::where([
                                    'checkProvince' => $checkProvince,
                                    'checkRegion' => $checkRegion,
                                    'checkSpecial' => $checkSpecial
                                ])->first();
        return $routeShip->id;

    }
}
