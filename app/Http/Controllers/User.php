<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function shop()
    {
        return view('shop');
    }
    public function home()
    {
        return view('home');
    }

    public function contact(){
        return view('contact');
    }
    public function cart(){
        return view('cart');
    }
    public function checkout(){
        return view('checkout');
    }
    public function shop_single(){
        return view('shop-single');
    }
    public function thankyou(){
        return view('thankyou');
    }
}
