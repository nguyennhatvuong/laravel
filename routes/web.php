<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','FrontendController@index')->name('home')->middleware('cacheResponse:300');;

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');
Route::group(['namespace'=>'Auth'],function(){
    Route::get('dang-nhap','LoginController@index')->name('login.get');
    Route::post('dang-nhap','LoginController@login')->name('login.post');
    Route::post('logout','LoginController@logout')->name('logout');
});
Route::group(['prefix'=>'san-pham','as'=>'product.'],function(){
    Route::get('/','FrontendController@productGrid')->name('grid');
    Route::get('/{slug}','FrontendController@productCategory')->name('category');
    Route::get('chi-tiet/{slug}','FrontendController@productDetail')->name('detail');
    Route::post('filter','FrontendController@filterProduct')->name('filter');
});
Route::group(['as'=>'cart.','prefix'=>'gio-hang'],function(){
    Route::post('add','CartController@addCart')->name('add');
    Route::post('update','CartController@updateCart')->name('update');
    Route::post('delete','CartController@deleteCart')->name('delete');
    Route::get('/','CartController@index')->name('index');
    Route::post('/giao-hang','CartController@shipping')->name('shipping');
    Route::post('/phi-ship','CartController@feeShip')->name('feeShip');
    Route::post('/dat-hang','CartController@order')->name('order');
});
Route::group(['as'=>'checkout.','middleware'=>['auth','user']],function(){
    Route::get('/thanh-toan','CartController@checkout')->name('index');
    Route::get('/getAllProfile','CartController@getAllProfile')->name('getAllProfile');
});
Route::group(['prefix'=>'khach-hang','namespace'=>'user','as'=>'user.','middleware'=>['auth','user']],function(){
    Route::get('/','UserController@index')->name('index');
    Route::post('/','UserController@index')->name('index');
    Route::post('/ho-so/updateDefault','ProfileController@updateDefault')->name('profile.updateDefault');
    Route::get('/ho-so/getDefault','ProfileController@getDefault')->name('profile.getDefault');
    Route::resource('ho-so','ProfileController',['names' => 'profile']);
});

Route::group(['prefix'=>'ban-hang','as'=>'sell.','middleware'=>['auth','sell']],function(){

    Route::get('/','SellController@index')->name('index');

});



Route::group(['prefix'=>'quan-ly','namespace'=>'Admin','as'=>'admin.','middleware'=>['auth','admin']],function(){
    Route::get('/','AdminController@index')->name('index');
    
    Route::group(['prefix' => 'thong-bao','as' => 'notification.'], function () {
        Route::get('/',function(){
            dd('ok');
        });
        Route::get('/index','NotificationController@index')->name('index');
        Route::post('/mark','NotificationController@mark')->name('mark');
    });
    Route::resource('mau-sac','ColorController',['names' => 'color'])->except('show','destroy','edit');
    Route::resource('tai-khoan','UserController', ['names' => 'user'])->except('show');
    Route::post('tai-khoan/show','UserController@show')->name('user.show');
    Route::resource('don-dat-hang','OrderController', ['names' => 'order'])->except('show');
    Route::resource('thong-tin','InformationController', ['names' => 'information'])->except('show');
    Route::resource('quyen-truy-cap','RoleController', ['names' => 'role'])->except('update');
    Route::resource('nhan-vien','PersonelController', ['names' => 'personel'])->except('show','edit');
    Route::get('nhan-vien/edit/{code}','PersonelController@edit')->name('personel.edit');
    Route::post('quyen-truy-cap/updatePermission','RoleController@updatePermission')->name('role.updatePermission');
    Route::put('quyen-truy-cap/updateRole','RoleController@update')->name('role.update');
    Route::post('khu-vuc/noi-thanh','RegionController@urban')->name('region.urban');
    Route::resource('giao-hang','RouteShipController',['names' => 'routeShip'])->except('show','destroy','edit');
    Route::resource('khu-vuc','RegionController',['names' => 'region'])->except('show','destroy','edit');
    Route::resource('/nha-cung-cap','SupplierController', ['names' => 'supplier'])->except('create');
    Route::group(['prefix' => 'san-pham','as'=>'product.'], function () {
        Route::get('them-san-pham','ProductController@create')->name('create');
        Route::post('show','ProductController@show')->name('show');
        Route::post('filter','ProductController@filter')->name('filter');
        Route::post('edit','ProductController@edit')->name('edit');
        Route::put('update','ProductController@update')->name('update');
        Route::post('getProperties','ProductController@getProperties')->name('getProperties');
        Route::post('getPriceDefault','ProductController@getPriceDefault')->name('getPriceDefault');
    });
    Route::resource('/san-pham','ProductController', ['names' => 'product'])->except('create','show','edit','update');
    Route::group(['prefix' => 'nhap-hang'], function () {
        Route::get('them-phieu-nhap','ProductImportController@create')->name('productImport.create');
        Route::post('chi-tiet','ProductImportController@show')->name('productImport.show');
        Route::post('phieu-chi','ProductImportController@receipt')->name('productImport.receipt');
        Route::post('them-phieu-chi','ProductImportController@createCashflow')->name('productImport.createCashflow');
        Route::post('getProduct','ProductImportController@getProduct')->name('productImport.getProduct');
        Route::post('getCostPrice','ProductImportController@getCostPrice')->name('productImport.getCostPrice');
        Route::post('hoan-thanh','ProductImportController@complete')->name('productImport.complete');
    });
    
    Route::resource('/nhap-hang','ProductImportController', ['names' => 'productImport'])->except('create','show');
    Route::resource('/dong-tien','CashflowController', ['names' => 'cashflow'])->except('create','show');
    Route::resource('/don-vi','UnitController', ['names' => 'unit']);
    Route::resource('/thuong-hieu','BrandController', ['names' => 'brand']);
    Route::post('doi-tac/','PartnerController@index')->name('partner.index');
    Route::group(['prefix' => 'danh-muc','as' => 'category.'], function () {
        Route::get('them-danh-muc','CategoryController@create')->name('create');
        Route::post('edit','CategoryController@edit')->name('edit');
        Route::put('lưu-danh-muc','CategoryController@update')->name('update');
        Route::get('getParent','CategoryController@getParent')->name('getParent');
        Route::get('child','CategoryController@childCategory')->name('child');
        Route::post('getProduct','CategoryController@getProduct')->name('getProduct');
    });
  
    Route::resource('danh-muc-san-pham','CategoryController',['names' => 'category'])->except('create','update','edit');
    Route::group(['prefix' => 'anh-bia'], function () {
        Route::post('trang-thai','BannerController@updateStatus')->name('banner.updateStatus');
        Route::post('destroy','BannerController@destroy')->name('banner.destroy');
        Route::get('onlyTrashed','BannerController@onlyTrashed')->name('banner.onlyTrashed');
        Route::post('restore','BannerController@restore')->name('banner.restore');
        Route::put('update','BannerController@update')->name('banner.update');
    });

    Route::resource('anh-bia','BannerController',['names' => 'banner'])->except('create','destroy','update');
    Route::group(['prefix' => 'bang-gia'], function () {
        Route::get('default','PriceListController@default')->name('priceList.default');
        Route::get('create','PriceListController@create')->name('priceList.create');
        Route::get('getPriceList','PriceListController@getPriceList')->name('priceList.getPriceList');
        Route::post('getFormat','PriceListController@getFormat')->name('priceList.getFormat');
        Route::post('updateFormat','PriceListController@updateFormat')->name('priceList.updateFormat');
        Route::post('getProduct','PriceListController@getProduct')->name('priceList.getProduct');
        Route::post('getCategory','PriceListController@getCategory')->name('priceList.getCategory');
        Route::post('destroy','PriceListController@destroy')->name('priceList.destroy');
        Route::post('deleteProduct','PriceListController@deleteProduct')->name('priceList.deleteProduct');
        Route::post('updateDetail','PriceListController@updateDetail')->name('priceList.updateDetail');
        Route::post('updatePrice','PriceListController@updatePrice')->name('priceList.updatePrice');
        Route::post('chi-tiet','PriceListController@detail')->name('priceList.detail');
        Route::post('show','PriceListController@show')->name('priceList.show');
        Route::post('edit','PriceListController@edit')->name('priceList.edit');
    });
    Route::resource('bang-gia','PriceListController',['names' => 'priceList'])->except('show','destroy','edit');
});


Route::get('/get', function () {
    return view('showNotification');

});

Route::get('getPusher', function (){
    return view('form_pusher');
 });
 
Route::get('/pusher', function(Illuminate\Http\Request $request) {
    event(new App\Events\NotificationEvent('ok'));
    return redirect('getPusher');
});