<?php
namespace App\Http\Controllers\Api;
use App\Product;
use App\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
class SearchController extends Controller {
    // we will Installing and configuring Laravel Scout

 public function search(Request $request)
    {
    	$artists = Artist::all();
      $products = Product::whereHas('songs', function($query) use ($request){
        if (($term = $request->get('term'))) {
            $query->where('ime', 'like', '%' . $term . '%');
          }
      })->
      orWhere(function($query) use ($request) {
          if (($term = $request->get('term'))) {
            $query->where('ime', 'like', '%' . $term . '%');
          }
        })
        ->orderBy("id", "desc")
        ->paginate(50);

    	return view('pages.zbirka', [
    		'products' => $products, 'artists' => $artists
    	]);
    }
    public function autocomplete(Request $request){

    	$term=$request->term; //jquery
    	$data=Product::where('ime', 'LIKE', '%'.$term.'%')
    	->take(10)
    	->get();
    	$result=array();
    	foreach ($data  as $key => $v){
    		$result[] = ['id'=>$v->id, 'ime'=>$v->ime];
    	}
    	return response() ->json($result);
    }

}