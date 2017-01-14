<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Image;

class UsersController extends Controller
{
   public function getAccount($name){
   		$user = User::whereName($name)->first();
   		//return view('nastavitve', ['user' => Auth::user()]);
   		//return view('nastavitve', array('user' => Auth::user()) );
   	return view('pages.nastavitve', compact('user'));
   }

   public function update(Request $request){
   		$user = Auth::user();
   		if ($request->hasFile('prikazna')){
   			$prikazna = $request->file('prikazna');
   			$filename = time() .  '.' . $prikazna->getClientOriginalExtension();
   			Image::make($prikazna)->resize(150,150)->save(public_path('/slike/avatarji/'.$filename) );

   			
   			$user->imagePath = $filename;
   			
  		}
  		$user->imepriimek = $request['imepriimek'];
  		$user->ulica = $request['ulica'];
  		$user->posta = $request['posta'];
  		$user->drzava = $request['drzava'];
  		$user->KREDnosilec = $request['KREDnosilec'];
  		$user->KREDstevilka = $request['KREDstevilka'];
  		$user->KREDmesec = $request['KREDmesec'];
  		$user->KREDleto = $request['KREDleto'];
  		$user->KREDvarnost = $request['KREDvarnost'];
  		$user->update();
   	return view('pages.nastavitve', array('user' => Auth::user()), compact('user'));
	}
}