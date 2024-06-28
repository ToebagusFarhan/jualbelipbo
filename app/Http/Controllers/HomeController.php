<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('home.index');    
    }
    function products()
    {
        return view('home.products');    
    }
    function product()
    {
        return view('home.product');    
    }
    function cart()
    {
        return view('home.cart');    
    }
    function checkout()
    {
        return view('home.checkout');    
    }
    function orders()
    {
        return view('home.orders');    
    }
    function about()
    {
        return view('home.about');    
    }
    function contact()
    {
        return view('home.contact');    
    }
    function faq()
    {
        return view('home.faq');    
    }
}
