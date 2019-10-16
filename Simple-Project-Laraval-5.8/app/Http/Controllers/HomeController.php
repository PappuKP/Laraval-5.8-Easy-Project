<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(Request $request){

	// $languages=['JAVA','PHP','PYTHON','C++','ASP'];
	// return view('welcome',['lang'=>$languages]);
	// return "Welcome to Home Page";

	$request->session()->flash('pappu', 'Given Task was successful!');
		return view('home');
  }
}



