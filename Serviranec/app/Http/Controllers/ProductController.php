<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Stripe\Stripe;
use Stripe\Charge;

class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view('pages.zbirka', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('zbirka.index');
    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('pages.kosarica');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('pages.kosarica', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'totalQty' => $cart->totalQty]);
    }

    public function getCheckout(){
        if (!Session::has('cart')) {
            return view('pages.kosarica');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('pages.blagajna', ['products' => $cart->items, 'total' => $total]);
    }
    public function postCheckout(Request $request){
        if (!Session::has('cart')){
                return redirect()->route('pages.kosarica');
        } else{
           $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);

            Stripe::setApiKey('sk_test_nH3xfKRBgkiJUkjMzcKadmnK');
            try{
                Charge::create(array(
                            "amount" => $cart->totalPrice * 100,
                          "currency" => "eur",
                          "source" => $request->input('stripeToken'), // obtained with Stripe.js
                          "description" => "Obremenili smo vas in vašo kartico"
                ));

            } catch(\Exception $e){
                return redirect()->route('checkout')->with('error', $e->getMessage());
            }

            Session::forget('cart');
            return redirect()->route('home')->with('success', 'Cestitamo!');
        }
    }

}
