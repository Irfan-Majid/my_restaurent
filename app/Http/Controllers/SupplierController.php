<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('supplier.supplierlist')->with('suparr', Supplier::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.supplieradd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new Supplier;
		$res->name = $request->input('name');
		$res->email = $request->input('email');
		$res->contact = $request->input('contact');
		$res->balance = $request->input('balance');
		$res->address = $request->input('address');
		$res->save();
		
		return redirect('superadmin/suplist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier, $id)
    {
        return view('supplier.supplieredit')->with('suparr', Supplier::findorfail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $res = Supplier::find($request->id);
		$res->name = $request->input('name');
		$res->email = $request->input('email');
		$res->contact = $request->input('contact');
		$res->balance = $request->input('balance');
		$res->address = $request->input('address');
		$res->save();
		
		return redirect('superadmin/suplist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier, $id)
    {
        Supplier::destroy(array('id', $id));
        return redirect('superadmin/suplist');
    }
}
