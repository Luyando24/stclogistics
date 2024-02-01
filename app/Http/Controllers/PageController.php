<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sea_rates;


class PageController extends Controller
{
    public function PageController(){
        return view('/destinations');
    }

    public function productDetails(){
        return view('/details');
    }

    public function shippingRates(){
        $data = sea_rates::all();

        return view('/rates', compact('data'));
    }

    public function shippingController(){
        return view('/ship');
    }
}
