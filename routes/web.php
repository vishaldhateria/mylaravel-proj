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
   $tasks = DB::table('vid_info')->get();

   return view('video/index', compact('tasks'));
});

Route::get('/show/{task}',function($id){
    
    $task = DB::table('vid_info')->find($id);
    dd($task);
    return view('video/show', compact('tasks'));
});