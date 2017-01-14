<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Order;
use App\Artist;
use App\Product;
class PagesController extends Controller
{
    public function home(){
        $artists = Artist::all();
        $products = Product::all();
    	return view('pages.home', ['products' => $products, 'artists' => $artists]);
    }
    public function admin(){

    	return view('pages.admin');
    }
     public function izvajalci(){
        $artists = Artist::all();
    	return view('pages.izvajalci', ['artists' => $artists]);
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
   public function narocila(){
        $orders = Order::all();
        $orders->transform(function($order, $key){
                $order->cart = unserialize($order->cart);
                return $order;
            });
        return view('pages.narocila', ['orders' => $orders]);
   }
   public function getNarocilo($id){
        $order = Order::find($id);
        $order->cart = unserialize($order->cart);

        return view('pages.enonarocilo', ['order' => $order]);
   }
   public function postNarocilo(Request $request, $id){
         $order = Order::find($id);
         $order->name = $request['kupec'];
        $order->address = $request['address'];
        /*$order->cart->items
        $product->leto = $request['leto'];
        $product->cena = $request['cena'];
        $product->format = $request['format'];
        $product->opis = $request['opis'];*/
        $order->update();
        return view('pages.enonarocilo', ['order' => $order]);
   }
   public function getArtist($id){
        $artist = Artist::find($id);
        $products = Product::all();
        return view('pages.izvajalec', ['artist' => $artist, 'products' => $products]);
   }
}
