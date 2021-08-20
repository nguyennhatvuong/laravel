<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slug extends Model
{
    protected $fillable=['slug','reference_id','reference_type'];
    public static function show($slug){
        $data=Slug::where('slug', $slug)->firstOrFail();
        $model=app($data->reference_type);

        // dd($data);
        switch ($data->reference_type) {
            case 'App\Models\Page':
                $page= $model::find($data->reference_id);
                dd($page);
                // return $page->view;

                // Page::getPage($page->view);
                // return redirect()->route('home');
                return view($page->view);
                // break;
            
            default:
                # code...
                break;
        }
    }

}
