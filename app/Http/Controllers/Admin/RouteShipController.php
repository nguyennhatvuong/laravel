<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Route;
use App\Models\ServiceShip;
use Illuminate\Http\Request;

class RouteShipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['specials']=ServiceShip::with('routeShip')->where('route_ships.special',1)->get();
        
        $data['normals']=ServiceShip::getNormal();
        $data['specials']=ServiceShip::getSpecial();
        return view("admin.route.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RouteShip  $routeShip
     * @return \Illuminate\Http\Response
     */
    public function show(RouteShip $routeShip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RouteShip  $routeShip
     * @return \Illuminate\Http\Response
     */
    public function edit(RouteShip $routeShip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RouteShip  $routeShip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RouteShip $routeShip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RouteShip  $routeShip
     * @return \Illuminate\Http\Response
     */
    public function destroy(RouteShip $routeShip)
    {
        //
    }
}
