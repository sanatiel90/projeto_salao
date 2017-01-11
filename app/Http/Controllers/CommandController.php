<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommandController extends Controller
{
    
	public function newCommand(){
		return view('new.command');
	}
    
}
