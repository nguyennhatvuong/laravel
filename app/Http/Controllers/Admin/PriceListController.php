<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PriceList;
use App\Models\Product;
use App\Models\PriceListDetail;
use App\Models\PriceListFormat;
use App\Models\CategoryCustomer;
use App\Http\Requests\PriceListRequest;
use App\Http\Requests\FormatRequest;
use Yajra\DataTables\DataTables;
use App\Enums\ParentPriceFormatEnum;
use App\Enums\CalculationFormatEnum;
use App\Enums\TypeFormatEnum;
// use Response;
use Illuminate\Support\Facades\Response;
class PriceListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('admin.priceList.index');
    }
    public function getPriceList(){
        $data=PriceList::get();
        return response()->json($data);
    }
    public function create()
    {
        $data['parent_prices']=ParentPriceFormatEnum::getKeys();
        $data['calculations']=CalculationFormatEnum::getKeys();
        $data['types']=TypeFormatEnum::getKeys();
        $data['price_list']=PriceList::orderBy('end_date','desc')->first();
        return response()->json($data);

    }
    public function getFormat(Request $request){
        $data['parent_prices']=ParentPriceFormatEnum::getKeys();
        $data['calculations']=CalculationFormatEnum::getKeys();
        $data['types']=TypeFormatEnum::getKeys();
        $data['formats']=PriceListFormat::with('priceList')->where('price_list_id',$request->id)->firstOrFail();
        return response()->json($data);
    }
    public function updateFormat(FormatRequest $request){
        $price_list_id=PriceListFormat::updateFormat($request);
        $detail=PriceListDetail::where('price_list_id',$price_list_id)->get();
        if(!$detail->isEmpty()){
            PriceListDetail::updateProduct($detail);
        }
        return response()->json(true);
    }
    public function updateDetail(Request $request){
        $result=PriceListDetail::updateDetail($request);
        return response()->json($result);
    }
    public function deleteProduct(Request $request){
        PriceListDetail::where('id',$request->id)->delete();
        return response()->json(true);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PriceListRequest $request)
    {
        $result=PriceList::store($request);
        if($result[0]==404){
            return response()->json(['start_date'=>array($result[1]),'type'=>'error']);
        }
        else{
            PriceListFormat::store($result[1],$request);
            return response()->json(true);
        }
    
    }
    public function edit(Request $request){
         $data['price_list']=PriceList::findOrFail($request->id);
         $data['parent_prices']=ParentPriceFormatEnum::getKeys();
         $data['calculations']=CalculationFormatEnum::getKeys();
         $data['types']=TypeFormatEnum::getKeys();
         $data['formats']=PriceListFormat::with('priceList')->where('price_list_id',$request->id)->firstOrFail();
         return response()->json($data);
    }
    public function detail(Request $request)
    {
        
        if($request->ajax()){
            $priceList=PriceList::findOrFail($request->id);
            $data=PriceListDetail::with('priceList','product')->where('price_list_id',$priceList->id)->get();
            return Datatables::of($data)->make();
        }
    }
    public function getProduct(Request $request){
        
        $data=PriceList::getProduct($request);
        return response()->json($data);

    }
    public function getCategory(Request $request){
        
        $data=PriceList::getCategory($request);
        return response()->json($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data=PriceList::findOrFail($request->id);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PriceListRequest $request, $id)
    {
        $result=PriceList::updatePriceList($request);
        if($result[0]==404){
            return response()->json(['error'=>array($result[1]),'type'=>'error']);
        }
        else{
            PriceListFormat::updateFormat($request);
            PriceListDetail::updateAllPrice($request);
            return response()->json($request->id);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        PriceList::destroy($request->id);
        PriceListFormat::destroy($request->id);
        PriceListDetail::destroy($request->id);
        return response()->json(true);
    }
    public function updatePrice(Request $request){
        PriceListDetail::updatePrice($request);
        return response()->json(true);

    }
}
