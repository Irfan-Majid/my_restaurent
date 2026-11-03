<?php

namespace App\Http\Controllers;

use App\Models\Waiter;
use Illuminate\Http\Request;

class WaiterController extends Controller
{
   
    public function index()
    {
        return view('stuffs.waiterlist')->with('waiterarr', Waiter::all());
    }

    
    public function create()
    {
         return view('stuffs.waiteradd');
    }

   
    public function store(Request $request)
    {
         $res = new Waiter;
		$res->name=$request->input('name');
		$res->email=$request->input('email');
		$res->contact=$request->input('contact');
		$res->age=$request->input('age');
		$res->salary=$request->input('salary');
		$res->password=$request->input('password');
		$res->save();
		
		return redirect('superadmin/waiterlist');
    }

    
    public function show(Waiter $waiter)
    {
        //
    }

    
    public function edit(Waiter $waiter, $id)
    {
         return view('stuffs.waiteredit')->with('waiterarr', Waiter::findorfail($id));
    }

    
    public function update(Request $request, Waiter $waiter)
    {
        $res = Waiter::find($request->id);
		$res->name=$request->input('name');
		$res->email=$request->input('email');
		$res->contact=$request->input('contact');
		$res->age=$request->input('age');
		$res->salary=$request->input('salary');
		$res->password=$request->input('password');
		$res->save();
		
		return redirect('superadmin/waiterlist');
    }

    
    public function destroy(Waiter $waiter, $id)
    {
       Waiter::destroy(array('id', $id));
	   return redirect('superadmin/waiterlist');
    }
}
