<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayController extends Controller
{
   public function home(){
    return view('pay.index');
   }
   public function about(){
      return view('pay.about');
   }
   public function contact(){
      return view('pay.contact');
   }
}
