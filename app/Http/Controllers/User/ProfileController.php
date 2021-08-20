<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use Auth;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
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
    public function getDefault(){
        $data=Profile::where('user_id',Auth::user()->id)->default()->first();
        return response()->json($data);

    }
    public function updateDefault(Request $request){
        // dd($request->all());
        $profile=Profile::where('user_id',Auth::user()->id)->default()->first();
        if($profile->id!=$request->profile_id){
            $data=Profile::findOrFail($request->profile_id);
            $data->default=1;
            $data->save();
            $profile->default=0;
            $profile->save();
        }
        return response()->json(true);


    }
    public function store(ProfileRequest $request)
    {
        if($request->isDefault==1){
            $data=Profile::where('user_id',Auth::user()->id)->default()->first();
            $data->default=0;
            $data->save();
        }
        Profile::store($request);
        return response()->json(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
