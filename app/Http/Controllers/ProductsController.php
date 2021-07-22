<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use DB;
class ProductsController extends Controller
{
    public function index(){
        $products = DB::table("products") ->get();
        return view("products")->with("products", $products);
    }
}
