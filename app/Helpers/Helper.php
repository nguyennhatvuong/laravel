<?php

namespace App\Helpers;

class Helper {
    public static function createCode($id,$str){
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
    function formatNumber($price){
        return number_format($price);
    }
    function formatPriceList($format){
        switch ($format->calculation) {
            case 'sub':
                $calculation='-';
                break;
            
            case 'add':
                $calculation='+';
                break;
        }
        switch ($format->type) {
            case 'person':
                $type="%";
                break;
            
            default:
                # code...
                break;
        }
        return $str=$calculation.$format->value.$type;
    }
}