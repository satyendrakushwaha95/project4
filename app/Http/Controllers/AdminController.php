<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Redirect;
use Request;
use Hash;

class AdminController extends Controller
{
	public function home(){
		return view('home');
	}

	public function services(){
		return view('services');
	}

	public function contact(){
		return view('contact');
	}

	public function gallery(){
		return view('gallery');
	}
}
