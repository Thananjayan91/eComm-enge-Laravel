<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

class ProductionController extends Controller
{
    //
    function index(){
        //return Product::all;

        $data = Product::all();

        return view('product', ['products'=>$data]);
    }
}
