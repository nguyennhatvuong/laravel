<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['title','slug','summary','photo','status','is_parent','parent_id','added_by'];
    protected $table='categories';
    public static function store($request){
        // dd($request->all());
        $parent_id=$request->parent_id=='null' ? null : $request->parent_id;
        $data=new Category();
        $data->title=$request->title;
        $data->slug=$request->slug;
        $data->parent_id=$parent_id;
        $data->is_parent=$request->is_parent;
        $data->status=$request->status;
        $data->photo=$request->photo;
        $data->save();
    }
    public function scopeStatus($query)
    {
        return $query->where('status', 1);
    }
    public function parent_info(){
        return $this->hasOne('App\Models\Category','id','parent_id');
    }
    public static function getAllCategory(){
        return Category::orderBy('id','asc')->with('parent_info')->get();
    }
    public function products()
    {
        return $this->hasMany('App\Models\Product','cat_id','id');
    }

    public static function shiftChild($cat_id){
        return Category::whereIn('id',$cat_id)->update(['is_parent'=>1]);
    }
    public static function getChildByParentID($id){
        return Category::where('parent_id',$id)->orderBy('id','ASC')->pluck('title','id');
    }

    public function child_cat(){
        return $this->hasMany('App\Models\Category','parent_id','id');
    }
    public static function getAllParentWithChild(){
        return Category::with('child_cat')->where('is_parent',1)->get();
    }
    // public function products(){
    //     return $this->hasMany('App\Models\Product','cat_id','id')->where('status','active');
    // }
    public function sub_products(){
        return $this->hasMany('App\Models\Product','child_cat_id','id')->where('status','active');
    }
    public static function getProductByCat($slug){
        // dd($slug);
        return Category::with('products')->where('slug',$slug)->first();
        // return Product::where('cat_id',$id)->where('child_cat_id',null)->paginate(10);
    }
    public static function getProductBySubCat($slug){
        // return $slug;
        return Category::with('sub_products')->where('slug',$slug)->first();
    }
    public static function countActiveCategory(){
        $data=Category::where('status','active')->count();
        if($data){
            return $data;
        }
        return 0;
    }
}
