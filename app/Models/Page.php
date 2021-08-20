<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable=['name','slug','view'];
    public static function getPage($view){
        switch ($view) {
            case 'frontend.login':
                return view('frontend.login');
                break;
            case 'frontend.product-grid':
                return view('frontend.product-grid');
                break;
            
            default:
                # code...
                break;
        }
    }
}

