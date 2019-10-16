<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// *********short format*************
Route::view('/','welcome');

Route::view('/contact-us','contact');

// ********Foldername.filename or view name********  /login is any give the url name
Route::view('/register','Login.login');

// ************adding new in first time open page called View Load here **** contact-us is url
// **************long format***********
// Route::get('/contact-us', function () {
//     // return "Contact-us";
//     return view('contact');
// });



//long 
// Route::get('/contact-us', function () {
//     return view('c ontact');
// });

// Route::get('/contact-us', function () {
//     return view('contact');
// });


// Route::view('/','welcome');
//in sort one line
// Route::view('/contact-us','contact');



