<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReceiptCategory extends Model
{
    protected $fillable=['name','status','is_parent','parent_id','slug'];
    public static function getCode($id){
        $cat=ReceiptCategory::find($id);
        return $cat->code;
    }

}
