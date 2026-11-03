<?php

namespace App\Http\Controllers;

use App\Models\Tablelist;
use Illuminate\Http\Request;

class TablelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tablelist.tablelist')->with('tblarr', Tablelist::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tablelist.tableadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new Tablelist;

        $image = $request->file('table_icon');
        $ext = $image->extension();
        $file = time().'.'.$ext;


        $res->tbl_name = $request->input('table_name');
		$res->capacity = $request->input('table_capacity');
		$res->tbl_img = $file;
		$res->save();
		
		return redirect('superadmin/tablelist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tablelist  $tablelist
     * @return \Illuminate\Http\Response
     */
    public function show(Tablelist $tablelist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tablelist  $tablelist
     * @return \Illuminate\Http\Response
     */
    public function edit(Tablelist $tablelist, $id)
    {
        return view('tablelist.tableedit')->with('tblarr', Tablelist::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tablelist  $tablelist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tablelist $tablelist)
    {
        $res = Tablelist::findorfail($request->id);
        $res->tbl_name = $request->input('table_name');
		$res->capacity = $request->input('table_capacity');
		$res->tbl_img = $request->file('table_icon');
		$res->save();
		
		return redirect('superadmin/tablelist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tablelist  $tablelist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tablelist $tablelist, $id)
    {
        Tablelist::destroy(array('id', $id));
        return redirect('superadmin/tablelist');
    }
}
