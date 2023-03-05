<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

class ProductController extends Controller
{
    //
    function index(){
        //return Product::all();

        $data = Product::all();

        return view('product', ['products'=>$data]);
    }

    function detail($id){
        //return Product::find($id);
        $data = Product::find($id);
        return view('detail', ['product'=>$data]);
    }

    function addToCart(Request $req){
        if($req->session()->has('user')){
            //return "hello";
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
}
