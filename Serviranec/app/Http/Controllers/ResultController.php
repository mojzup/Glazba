<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Artist;
use Form;

class ResultController extends Controller
{
    public function getCenpad(){
    	 $products = Product::orderBy('ime', 'desc')->get();
    	  return view('pages.zbirka', ['products' => $products]);
    }
    public function imepad(){
    	$products = Product::orderBy('ime', 'desc')->get();
    	$artists = Artist::all();
        return view('pages.zbirka', ['products' => $products, 'artists' => $artists]);
    }
     public function imenar(){
    	$products = Product::orderBy('ime', 'asc')->get();
    	$artists = Artist::all();
        return view('pages.zbirka', ['products' => $products, 'artists' => $artists]);
    }
     public function cenpad(){
    	$products = Product::orderBy('cena', 'desc')->get();
    	$artists = Artist::all();
        return view('pages.zbirka', ['products' => $products, 'artists' => $artists]);
    }
     public function cennar(){
    	$products = Product::orderBy('cena', 'asc')->get();
    	$artists = Artist::all();
        return view('pages.zbirka', ['products' => $products, 'artists' => $artists]);
    }
    public function lp(){
        $artists = Artist::all();
      $products = Product::where('format', '0')->orWhere('format',  '=', '2')->get();
      return view("pages.zbirka", [
            'products' => $products, 'artists' => $artists
        ]);
    }
      public function cd(){
        $artists = Artist::all();
      $products = Product::where('format', '=','1')->orWhere('format',  '=', '2')->get();

      return view("pages.zbirka", [
            'products' => $products, 'artists' => $artists
        ]);
    }
}
