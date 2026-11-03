<?php

namespace App\Http\Controllers;

use App\Models\Dboy;
use Illuminate\Http\Request;

class DboyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stuffs.dboylist')->with('dboyarr', Dboy::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stuffs.dboyadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new Dboy;
		$res->name=$request->input('name');
		$res->email=$request->input('email');
		$res->contact=$request->input('contact');
		$res->age=$request->input('age');
		$res->salary=$request->input('salary');
		$res->password=$request->input('password');
		$res->save();
		
		return redirect('dboylist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dboy  $dboy
     * @return \Illuminate\Http\Response
     */
    public function show(Dboy $dboy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dboy  $dboy
     * @return \Illuminate\Http\Response
     */
    public function edit(Dboy $dboy, $id)
    {
        return view('stuffs.dboyedit')->with('dboyarr', Dboy::findorfail($id));
    }

    
    public function update(Request $request, Dboy $dboy)
    {
        $res = Dboy::find($request->id);
		$res->name=$request->input('name');
		$res->email=$request->input('email');
		$res->contact=$request->input('contact');
		$res->age=$request->input('age');
		$res->salary=$request->input('salary');
		$res->password=$request->input('password');
		$res->save();
		
		return redirect('dboylist');
    }

    
    public function destroy(Dboy $dboy, $id)
    {
        Dboy::destroy(array('id', $id));
	    return redirect('dboylist');
    }
}
