<?php

namespace App\Http\Controllers;
use App\vid_info;
use Illuminate\Http\Request;

class videoidcontroller extends Controller
{
    public function getvideos(){

    $tasks = vid_info::all();

   return view('video/index', compact('tasks'));
    }
}
