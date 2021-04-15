<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller{
    
    public function index(){
        return view('layout.layout');
    }

    public function show($id){
        return view('orders.order', ['id' => $id]);
    }
}
