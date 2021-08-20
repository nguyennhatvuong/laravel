<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceRange extends Model
{
    protected $fillable=['title','from','to'];
    public static function filter($arr,$price_range_id){
        $range=PriceRange::findOrFail($price_range_id);
        $data=[];
        foreach($arr as $item){
            dd($item);;
            $price=$item['promotion_on_price']!=null?$item['promotion_on_price']:$item['on_price'];
            if($price > $range['from'] && $price <= $range['to']){
                array_push($data,$item);
            }
        }
        return $data;

    }
}
