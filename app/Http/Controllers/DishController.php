<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dish.dishlist')->with('disharr', Dish::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('dish.dishadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$res = new Dish;

        
        $file = $request->file('dish_image');
		
        
		$res->dish_name=$request->input('dish_name');
		$res->dish_price=$request->input('dish_price');
		$res->dish_recipe=$request->input('dish_recipe');
		$res->dish_category=$request->input('dish_category');
		$res->dish_rating=$request->input('dish_rating');
		$res->dish_details=$request->input('dish_details');
        $res->dish_image = $file;
       
		
		$res->save();
		
		return redirect('superadmin/dishlist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish, $id)
    {
         return view('dish.dishedit')->with('disharr', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        $res = Dish::findorfail($request->id);
		$res->dish_name=$request->input('dish_name');
		$res->dish_price=$request->input('dish_price');
		$res->dish_recipe=$request->input('dish_recipe');
		$res->dish_category=$request->input('dish_category');
		$res->dish_rating=$request->input('dish_rating');
		$res->dish_details=$request->input('dish_details');
		
		$path=$request->file('dish_image')->store('public/assets/dishimage');
			if($path)
				$res->dish_image=$path;
		
		$res->save();
		
		return redirect('dish.dishlist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish, $id)
    {
        Dish::destroy(array('id', $id));
		return redirect('superadmin/dishlist');
    }
    
}
