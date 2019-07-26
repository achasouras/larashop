<?php

namespace App\Http\Controllers\Control;

use App\Http\Controllers\Controller;

class Control extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{

	}

	public function home(){
		return view('control.home');
	}
}
