<?php

// Route::get('/', function (){


// 	$languages=['JAVA','PHP','PYTHON','C++'];

// 	return view('welcome',['lang'=>$languages]);
// });

Route::get('/home', 'HomeController@index');
// Route::get('/pappu', 'HomeController@index');
Route::get('/logic', 'LanguagesController@List');

Route::get('/about', 'AboutController@index');



// Route::view('/','contact');
Route::view('/contact-us','contact');


/*Route::get('/register',function() {
	return view('Login.login');
})->middleware('Checkstatus');*/

Route::post('/home', 'LanguagesController@index');



// for group of webApp
Route::group(['middleware'=>'webApp'],function(){
	Route::get('/register',function() {
	return view('Login.login');
  });
});
