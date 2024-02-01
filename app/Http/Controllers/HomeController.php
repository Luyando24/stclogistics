<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{   
   public function index(){
    return view('home');
   }
   
   public function redirect()
 {
    // Get usertype
    $usertype = Auth::user()->usertype;

    // Check usertype and redirect to relevant page
    if ($usertype == 'regular') {
        return view('home');

    }else {
        return view('admin.admin_dashboard');
    }
 }
    
}
