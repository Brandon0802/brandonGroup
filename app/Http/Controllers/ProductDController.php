<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDController extends Controller
{
    public function index(){
        return view('productDetails');
    }
}
