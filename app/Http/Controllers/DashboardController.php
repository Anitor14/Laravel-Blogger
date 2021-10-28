<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct(){

        $this->middleware(['auth']);
    }
    public function index(){
 
        // dd(auth()->user()->name);
        return view('dashboard');
    }
}
