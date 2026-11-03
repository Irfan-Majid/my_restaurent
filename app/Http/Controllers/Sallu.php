<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sallu extends Controller
{
    public function zaher(){
		return view('test1');
	}
	
	public function emran(){
		return view('test2');
	}
	
	public function borhan(){
		return view('test3');
	}
}
