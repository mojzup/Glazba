<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Order;
use App\Artist;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests;
use Session;
use Auth;
use Stripe\Stripe;
use Stripe\Charge;

class ProductController extends Controller
{

    public function nov(Request $request){
       /* if ($request->hasFile('file')){
            $prikazna = $request->file('file');
            $filename = time() .  '.' . $prikazna->getClientOriginalExtension();
            Image::make($prikazna)->resize(150,150)->save(public_path('/slike/'.$filename) );
           $userser->imagePath = $filename;    
        }*/
        $product = new Product;
        $product->ime = $request->ime;
        $product->cena = $request->cena;
        $product->format = $request->format;
        $product->opis = $request->opis;
        $product->save();
        return view('pages.admin');
    }

    public function getIndex()
    {
        $products = Product::all();
         $artists = Artist::all();
        return view('pages.zbirka', ['products' => $products, 'artists' => $artists]);
    }
       public function getZbirkaadmin(){
        $products = Product::all();
         return view('pages.adminzbirka', ['products' => $products]);
   }
    public function getProduct($id)
    {
        $product = Product::find($id);
        return view('pages.artikel', ['product' => $product]);
    }
    public function getAddToWishlist($id){
        $product = Product::find($id);
        return view('pages.artikel');
    }
    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->back();
    }


    public function getRemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('pages.kosarica');
    }
   /* public function getRemoveItemOrder($order, $id){
        $order->cart->remove($id);
        $order->cart->items
        return view('pages.enonarocilo');
    }*/
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
        $user = Auth::user();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('pages.blagajna', ['products' => $cart->items, 'total' => $total, 'user' => $user]);
    }

    public function postCheckout(Request $request)
    {
        if (!Session::has('cart')) {
            return redirect()->route('pages.kosarica');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_nH3xfKRBgkiJUkjMzcKadmnK');
        try {
            $charge = Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "eur",
                "source" => $request->input('stripeToken'), // obtained with Stripe.js
                "description" => "Obremenili smo vas in vašo kartico"
            ));
            $order = new Order();
            $order ->cart = serialize($cart);
            $order ->address = $request->input('address');
            $order ->name = $request->input('name');
            $order ->payment_id = $charge->id;

            Auth::user()->orders()->save($order);

        } catch (\Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }
        Session::forget('cart');
        return redirect()->route('home')->with('success', 'Čestitamo za nakup!');
    }

    public function getArtikeluredi($id){
        $product = Product::find($id);
        return view('pages.artikeluredi', ['product' => $product]);
    }
    public function postArtikeluredi(Request $request, $id){
        if ($request->hasFile('file')){
            $prikazna = $request->file('file');
            $filename = time() .  '.' . $prikazna->getClientOriginalExtension();
            Image::make($prikazna)->resize(150,150)->save(public_path('/slike/'.$filename) );

            
            $product->imagePath = $filename;
            
        }
        $product = Product::find($id);
        $product->artist_id = $request['izvajalec'];
        $product->zanr_id = $request['zvrst'];
        $product->ime = $request['ime'];
        $product->leto = $request['leto'];
        $product->cena = $request['cena'];
        $product->format = $request['format'];
        $product->opis = $request['opis'];
        $product->update();
        return view('pages.artikeluredi', ['product' => $product]);
    }
     public function getArtikelnov(){
        return view('pages.artikelnov');
    }
}
