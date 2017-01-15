<?php
namespace App\Http\Controllers\Api;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
class SearchController extends Controller {
    // we will Installing and configuring Laravel Scout
    public function search(Request $request){
     $products = Product::where(function($query)){
     	if (($group_id = $request->get("id"))){
     		$query->where("id", $group_id);
     	}
     });
     return view('pages.zbirka', ['products' => $products]);
    }
    public function autocomplete(Request $request){

    	$term=$request->term; //jquery
    	$data=Product::where('ime', 'LIKE', '%'.$term.'%')
    	->take(10)
    	->get();
    	$result=array();
    	foreach ($data  as $key => $v){
    		$result[] = ['id'=>$v->id, 'ime'=>$v->ime]
    	}
    	return response() ->json($result);
    }

}