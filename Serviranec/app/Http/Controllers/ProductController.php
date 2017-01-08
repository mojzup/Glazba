<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Http\Requests;
use Session;

class ProductController extends Controller
{
	
   public function getIndex(){
   	$products  = Product::all();
   	return view('pages.zbirka', ['products' => $products]);
   }

   public function getAddToCart(Request $request, $id){
	$product = Product::find($id);
	$oldCart = Session::has('cart') ? Session::get('cart') : null;
	$cart = new Cart($oldCart);
	$cart->add($product, $product->id);
	$request->session()->put('cart', $cart);
	dd($request->session()->get('cart'));
	return redirect()->route('home');
   }

   public function getCart(){

   	if(!Session::has('cart')){
   		return view('pages.kosarica');
   	}
   	$oldCart = Session::get('cart');
   	$cart = new Cart($oldCart);
   	return view('pages.kosarica', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
   }
}
