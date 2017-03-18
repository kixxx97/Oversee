<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ecommerce extends Controller
{
    public function shop()
    {
        return view('shop');
    }
}
