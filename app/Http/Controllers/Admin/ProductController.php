<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Stock;
use App\Models\Color;
use App\Models\PriceList;
use App\Models\PriceListDetail;
use App\Enums\TypeProductEnum;
use App\Enums\SizeProductEnum;
use App\Enums\ConditionProductEnum;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        
        return view('admin.product.index');
    }
    public function filter(Request $request){
        $data=[];
            $products=Product::with('brand','category','child_category')->get();
            if($products->count()==0){
                return Datatables::of($products)->make();
            }
            else{
                $data=Product::filter($request);
                return Datatables::of($data)->make();
            }
    }
    public function getProperties(){
        $data['types']=TypeProductEnum::getKeys();
        $data['sizes']=SizeProductEnum::getKeys();
        $data['conditions']=ConditionProductEnum::getKeys();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['brands']=Brand::get(); 
        $data['category_products']=Category::where('is_parent',1)->get();
        $data['category_sizes']=Category::where('is_parent',1)->get();
        return view('admin.product.create',$data);
    }
    public function detailStock(Request $request){
        $data=Stock::with('branch')->where('product_id',$request->id)->get();
        return response()->json($data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    public function store(ProductRequest $request)
    {
        $color_id=Color::updateColor($request->color);
        $product_id=Product::store($request,$color_id);
        PriceListDetail::storePriceListDefault($request,$product_id);
        return response()->json(true);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data=Product::findOrFail($request->id);
            
        return json_encode($data);

    }
    public function getPriceDefault(Request $request){
        $data=PriceList::getPriceDefault($request->id);
        return response()->json($data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $product=Product::with('brand')->where('slug',$request->slug)->first();
        $price=PriceList::getPriceDefault($product->id);
        $data=array_merge($product->toArray(), $price->toArray());
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request)
    {
        Color::updateColor($request->color);
       Product::updateProduct($request);
       PriceListDetail::updatePriceListDefault($request);
       return response()->json(true);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        $status=$product->delete();
        
        if($status){
            request()->session()->flash('success','Product successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting product');
        }
        return redirect()->route('product.index');
    }
}
