<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    
    public static function cat($id,$cat_id){
        dd('ok');
        $cat=ReceiptCategory::find($cat_id);
        $str=$cat->code;
        // dd($str);
        Code::create($id,$str);
    }
    public static function create($id,$str){
        dd($str);
        $lengthId=strlen($id);
        if($lengthId>6){
            $count=9;
        }
        else{
            $count=6;
        }
        $length=$count-$lengthId;
        for($i=0; $i<$length; $i++){
            $str.='0';
        }
        return $str.$id;
    }
    
}
