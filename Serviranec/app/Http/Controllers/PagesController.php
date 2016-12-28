<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){

    	return view('pages.home');
    }
     public function zbirka(){

    	return view('pages.zbirka');
    }
     public function izvajalci(){

    	return view('pages.izvajalci');
    }
     public function zanri(){

    	return view('pages.zanri');
    }
    public function kosarica(){

    	return view('pages.kosarica');
    }
     public function blagajna(){

    	return view('pages.blagajna');
    }
        public function zelje(){

    	return view('pages.zelje');
    }
        public function zgodovina(){

    	return view('pages.zgodovina');
    }
        public function nastavitve(){

    	return view('pages.nastavitve');
    }

}
