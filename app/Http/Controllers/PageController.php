<?php

namespace App\Http\Controllers;


use App\Mail\MyMail;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //
    public function home(){
        return view('page.home');
    }

    public function products(){
        $products = Product::all();
        $productsMonth = Product::where('category','best of this month items')->get();
        $productsPremium = Product::where('category','premium items')->get();
        $productsBest = Product::where('category','best seller')->get();
        return view('page.products',compact('products','productsMonth','productsPremium','productsBest'));
    }



    public function account(){
        $user = Auth::user();
        $address = Auth::user()->address;
        $orders = Auth::user()->orders;
        $orders->transform(function($order,$key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('page.account',compact('user','address','orders'));
    }

    public function contact(){
        return view('page.contact');
    }


//


}
