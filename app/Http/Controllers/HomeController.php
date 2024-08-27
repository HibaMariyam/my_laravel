<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function dummy(){
    $sum=5+5;
    return view('home',["sum"=>$sum]);
    
   }
}
