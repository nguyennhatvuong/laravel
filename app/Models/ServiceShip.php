<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class ServiceShip extends Model
{
    protected $table='service_ships';
    protected $fillable=['route_ship_id','method','weight','urban','suburban','more_weight','time'];
    
    public static function getNormal(){
        return DB::table('service_ships')
        ->join('route_ships', 'route_ships.id', '=', 'service_ships.route_ship_id')
        ->where('route_ships.special', 0)
        ->get();
    } 
    public static function getSpecial(){
        return DB::table('service_ships')
        ->join('route_ships', 'route_ships.id', '=', 'service_ships.route_ship_id')
        ->where('route_ships.special', 1)
        ->get();
    } 
    public static function getServiceShip($route_ship_id,$weight,$profile)
    {
        $urban=$profile->urban;
        $k=$ship=0;
        $arr_weight=$data=[];
        $services=ServiceShip::where('route_ship_id',$route_ship_id)->get();
        foreach ($services as $key => $value) {
            array_push($arr_weight,$value->weight);
            if($weight<=$value->weight){
                $data=ServiceShip::where('route_ship_id',$route_ship_id)->where('weight',$value->weight)->get()->toArray();
                break;
            }
        }
        $arr_weight = array_unique($arr_weight);
        if($data==null){
            $data=ServiceShip::where('route_ship_id',$route_ship_id)->where('weight',end($arr_weight))->get()->toArray();
            $k++;
        }
        $arr=array();
        foreach($data as $key => $item){
            if($urban==1){
                $ship=$item['urban'];
            }
            else{
                $ship=$item['suburban'];
            }
            if($k!=0){
                $j=$weight-$item['weight'];
                $ship+=$item['more_weight']*(intval($j/500)+1);
            }
            $item['ship']=$ship;
            array_push($arr,$item);
        }
        return $arr;
        
        // dd($service);
    }
}
