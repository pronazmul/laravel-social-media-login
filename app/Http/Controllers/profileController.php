<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function redirectProfile(){

    	return view('profile');
    }
}
