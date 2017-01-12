<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    public function home(){

    	return view('pages.home');
    }
   /* public function zbirka(){

    	return view('pages.zbirka');
    }*/
     public function izvajalci(){

    	return view('pages.izvajalci');
    }
     public function zanri(){

    	return view('pages.zanri');
    }
     public function blagajna(){

    	return view('pages.blagajna');
    }
        public function zelje(){

    	return view('pages.zelje');
    }
        public function zgodovina(){
            $orders = Auth::user()->orders;
            $orders->transform(function($order, $key){
                $order->cart = unserialize($order->cart);
                return $order;
            });
    	return view('pages.zgodovina', ['orders' => $orders]);
    }
        public function nastavitve(){

    	return view('pages.nastavitve');
    }

}
