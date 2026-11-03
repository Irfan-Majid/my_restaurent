<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stuffs.cheflist')->with('chefarr', Chef::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stuffs.chefadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new Chef;
		$res->name=$request->input('name');
		$res->email=$request->input('email');
		$res->contact=$request->input('contact');
		$res->age=$request->input('age');
		$res->salary=$request->input('salary');
		$res->password=$request->input('password');
		$res->save();
		
		return redirect('superadmin/cheflist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function show(Chef $chef)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function edit(Chef $chef, $id)
    {
        return view('stuffs.chefedit')->with('chefarr', Chef::findorfail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chef $chef)
    {
        $res = Chef::find($request->id);
		$res->name=$request->input('name');
		$res->email=$request->input('email');
		$res->contact=$request->input('contact');
		$res->age=$request->input('age');
		$res->salary=$request->input('salary');
		$res->password=$request->input('password');
		$res->save();
		
		return redirect('superadmin/cheflist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chef $chef, $id)
    {
       Chef::destroy(array('id', $id));
	   return redirect('superadmin/cheflist');
    }
}
