<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    
	public function newClient(){

		return view('clients.add_client');
	}

}
