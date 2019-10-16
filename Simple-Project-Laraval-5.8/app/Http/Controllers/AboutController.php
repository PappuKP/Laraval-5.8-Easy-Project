<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
	public function index(Request $request){

		// print_r($request->input());
		// print_r($request->input('name'));
		// print_r($request->path());
		// print_r($request->url());
		print_r($request->method());


		// ****for condition based******
		if($request->isMethod="get")
		{
			echo "     --> This is the GET method !!!";
		}else{
			echo "     --> This is a Post Method!!!";
		}
  }
}



