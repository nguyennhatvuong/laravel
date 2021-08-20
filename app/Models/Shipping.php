<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Shipping extends Model
{
    protected $fillable=['order_id','order_status_id','payment_method_id','service_ship_id','total'];
    public static function createShip($request,$order_id){
        $shipping=new Shipping();
        $shipping->order_id=$order_id;
        $shipping->order_status_id=1;
        $shipping->payment_method_id=$request->payment_method_id;
        $shipping->service_ship_id=$request->obj_service['id'];
        $shipping->total=$request->obj_service['ship'];
        $shipping->save();
    }
}
