<?php

namespace App\Http\Controllers;

use App\smallform;
use Illuminate\Http\Request;
use App\User;

class SmallformController extends Controller
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
        return view('smallform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
        'name' => 'required|max:200',
        'mobile' => 'required|digits:10',
        'blood_group' => 'required|max:100|string',
        'age' => 'required|integer|between:1,100',
        'gender' => 'required|string|max:100',
        'symptoms.*' => 'required|string|max:100',
        'symptoms_details' => 'nullable|string|max:200',
        'exposure.*' => 'required|string|max:100',
        'medical_condition.*' => 'required|string|max:100',
        'travel.*' => 'required|string|max:100'
    ]);
        $validatedData['symptoms']= serialize($request->symptoms);
        $validatedData['exposure']=serialize($request->exposure);
        $validatedData['travel']=serialize($request->travel);
        $validatedData['medical_condition']=serialize($request->medical_condition);
        $validatedData['visitor']=$request->ip();
        
        $user = User::firstOrCreate(
            ['mobile' => $request->mobile],
            $request->all()
        );
        $validatedData['user_id']=$user->id;
        // dd($validatedData);
        smallform::create($validatedData);
        return view('formfilled');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\smallform  $smallform
     * @return \Illuminate\Http\Response
     */
    public function show(smallform $smallform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\smallform  $smallform
     * @return \Illuminate\Http\Response
     */
    public function edit(smallform $smallform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\smallform  $smallform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, smallform $smallform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\smallform  $smallform
     * @return \Illuminate\Http\Response
     */
    public function destroy(smallform $smallform)
    {
        //
    }
}
