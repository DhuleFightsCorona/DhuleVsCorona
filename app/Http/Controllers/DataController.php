<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;
use App\Http\Requests\DataRequest;
use App\User; 
use App\Information; 

class DataController extends Controller
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
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataRequest $request)
    {
        
        $request['visitor']=$request->ip();
        $request['symptoms']= serialize($request->symptoms);
        $request['exposure']=serialize($request->exposure);
        $request['travel']=serialize($request->travel);
        $request['medical_condition']=serialize($request->medical_condition);
        
        $user = User::firstOrCreate(
            ['mobile' => $request->mobile],
            $request->all()
        );
        $request['user_id']=$user->id;
        
        $data = Data::firstOrCreate(
            ['id' => $user->id],
            $request->all()
        );
        
        $request['data_id']=$data->id;
        $information = Information::create($request->all());
        $user->fill(['is_fully_registered' => 1]);
        $user->save();
        // dd($request->all(),$user->get(),$data,$information);
        return view('formfilled');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        //
    }
}
