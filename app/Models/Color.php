<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table='colors';
    protected $fillable=['name'];
    public static function updateColor($name){
        $data=Color::where('name',$name)->first();
        if($data==null){
            $data=new Color();
            $data->name=$name;
            $data->save();
            return $data->id;
        }
        else{
            return $data->id;
        }
    }
}
