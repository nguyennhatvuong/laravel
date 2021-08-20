<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\Category;
class PriceList extends Model
{
    protected $table = "price_lists";
    protected $fillable = ['title', 'default','status','apply'];
    public function scopeDefault($query)
    {
        return $query->where("default", 1);
    }
    public function scopeStatus($query)
    {
        return $query->where("status", 1);
    }
    public function scopeApply($query)
    {
        return $query->where("apply", 1);
    }
    public static function store($request){
        $end_date =date('Y-m-d h:i:s', strtotime($request->end_date));
        $start_date =date('Y-m-d h:i:s', strtotime($request->start_date));
        $data=PriceList::whereDate('end_date','>=',$start_date)->first();
        if($data){
            return [404, 'Thời gian bắt đầu của '.$request->title.' trùng với ' .$data->title];
        }
        else{
            $data=new PriceList();
            $data->title=$request->title;
            $data->end_date=$end_date;
            $data->start_date=$start_date;
            $data->save();
            return [200, $data->id];

        }
    }
    public static function destroy($id){
        PriceList::findOrFail($id)->delete();
    }
    public static function getCostPrice($id){
        $default=PriceList::default()->first();
        $data=PriceListDetail::where('price_list_id',$default->id)->where('product_id',$id)->first();
        return $data;
    }
    public static function getPriceDefault($id){
        $default=PriceList::default()->first();
        $data=PriceListDetail::where('price_list_id',$default->id)->where('product_id',$id)->first();
        return $data;
    }
    public static function updatePriceList($request){
        $end_date =date('Y-m-d h:i:s', strtotime($request->end_date));
        $start_date =date('Y-m-d h:i:s', strtotime($request->start_date));
        if($request->apply==0){
            $default=PriceList::where('default',1)->first();
            $default->apply=1;
            $default->save();
        }
        else{
            $now=Carbon::now();
            if($now->gte($start_date) && $now->lte($end_date)){
                $data=PriceList::where('apply',1)->first();
                $data->apply=0;
                $data->save();
            }
            else{
                return [404, 'Thời gian hiện tại không trùng với thời gian hiệu lực'];
            }
        }
        $detail=PriceListDetail::where('price_list_id',$request->id)->get();
        if($detail->count()==0){
            if($request->status==1){
                return [404, 'Sản phẩm trong bảng giá rỗng, không thể hoàn thành bảng giá'];
            }
            if($request->apply==1){
                return [404, 'Sản phẩm trong bảng giá rỗng, không thể áp dụng bảng giá'];
            }
        }
        $data=PriceList::findOrFail($request->id);
        $data->start_date=$start_date;
        $data->end_date=$end_date;
        $data->title=$request->title;
        $data->status=$request->status;
        $data->apply=$request->apply;
        $data->save();
        return [200, $data->id];
       

    }
    public static function getProduct($request){
        $data['products']=Product::status()->get();
        $data['details']=PriceListDetail::with('product')->where('price_list_id',$request->id)->get();
        return $data;
        
    }
    public static function getCategory($request){
        $data['categories']=Category::where('is_parent',1)->get();
        $data['details']=PriceListDetail::with('product')->where('price_list_id',$request->id)->get();
        return $data;
        
    }
    

}
