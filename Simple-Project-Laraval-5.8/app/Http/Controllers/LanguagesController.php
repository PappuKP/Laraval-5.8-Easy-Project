<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguagesController extends Controller
{
	public function List(){

	$languages=['JAVA','PHP','PYTHON','C++','ASP'];
	return view('welcome',['lang'=>$languages]);
  }
  public function index(Request $request)
  {
  	$request->validate([
  		'username'=>'required | email',
  		'pass'=>'required | min:4 | max:6',


  	]);
  
  //print_r($request->input('username'));

  // $request->session()->put('user',$request->input('username'));
    // $output=$request->session()->get('user');


  // $request->session()->put('Data',$request->input());
  // $output=$request->session()->get('Data');

      $request->session()->put('test',$request->input());
      $output=$request->session()->get('test');



  if($output['username']=='pappu@gmail.com') {
    echo "Session Present";
      return view('about');
  }else {
    echo "Session Not present";
      return view('home');
  }

 // print_r($request->session()->get('user'));
  }
}


