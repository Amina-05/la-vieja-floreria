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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
});

Route::get("/faq", function(){
  return view("faq");
});

Route::get("/register", function(){
  return view("register");
});

Route::post("/register", function(){
  return view("register");
});

Route::get("/login", function(){
  return view("login");
});

Route::post("/login", function(){
  return view("login");
});

Route::get("/index", function(){
  return view("index");
});

Route::get('/store', function(){
    return view('/store');
});
