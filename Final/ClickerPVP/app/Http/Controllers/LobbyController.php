<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LobbyController extends Controller
{
    public function inicio(){
    	return view('index');
    }
}
