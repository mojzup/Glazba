@extends('layouts.masters.main')
@section('page-content')
	@include('layouts.partials.nav')
	@include('layouts.partials.nav2')
		<div class="body">
			<h2>Zgodovina</h2>
			@foreach($orders as $order)
				<div class="seznam zelje flex-col">
					
					@foreach($order->cart->items as $item)
					<div class="zeljeArtikel flex-sp-between">
						<div class="zeljeArtikel2 flex-sp-between">
							<a href="">
		  						<img src="{{$item['item']['imagePath']}}" alt="Mouth Of Madness" style="height:150px;width:150px;">
							</a>
							<div class="zeljeIme flex-col " >
								<a href="izvajalec2.html" class="link izvajalec">Orchid</a>
								<a href="artikel.html" class="link album">{{$item['item']['ime']}}</a>
							</div>
							<div class="zeljeCena">
							<label>Cena</label> <label class="kosaricaCena2">{{$item['price']}}€</label><label> Količina</label><label class="kosaricaCena2">{{$item['qty']}}</label>
							</div>
							<div>
							</div>
						</div>	
					</div>
					@endforeach
					<label>Skupaj cena: {{$order->cart->totalPrice}}€</label>
				</div>	
				@endforeach
			</div>	
		@include('layouts.partials.foot')
@stop	