<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index(){
        // dd('test');
        return view('player');
    }
}
