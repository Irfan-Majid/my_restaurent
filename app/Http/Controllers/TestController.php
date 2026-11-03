<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
		return view('test1');
	}
	
	public function test(){
		return view('test2');
	}
}
