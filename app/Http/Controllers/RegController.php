<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\product;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;

class RegController extends Controller
{
    public function index(){
        return view('/login');
    }

    public function store(Request $request){

        $register = new Account;
        $register->firstname = $request->input('Fname');
        $register->lastname = $request->input('Lname');
        $register->email = $request->input('Email');
        $register->address = $request->input('Address');
        $register->contactnum = $request->input('Contact');
        $register->username = $request->input('Username');
        $register->password = $request->input('Password');
        $register->save();

        return view('login');
    }

    public function authenticate(Request $request){
        $products = DB::table("products") ->get();
        return view("products")->with("products", $products);
       
    }


    public function create(){

    }

    public function show($id){

    }

    public function update(Request $request){

    }


    public function destroy($id){

    }

    public function edit($id){

    }
}
