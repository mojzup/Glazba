@extends('layouts.masters.main')
@section('page-content')
	@include('layouts.partials.nav')
	@include('layouts.partials.nav2')	
		<div class="body">
			<h2>Košarica</h2>
			@if(Session::has('cart'))
			<div class=" kosaravse ">

				<div class="seznam kosarica flex-col">
				@foreach($products as $product)
					<div class="kosaricaArtikel flex-col">
						<div class="flex-sp-between">
							<a href="{{ route('product.index', ['id' => $product['item']['id']])}}">
		  						<img src="{{ $product['item']['imagePath']}}" alt="{{$product['item']['ime']}}" style="height:150px;width:150px;">
							</a>
							<div class="flex-col">
								<a href="{{ route('product.index', ['id' => $product['item']['id']])}}" class="link album">{{$product['item']['ime']}}</a>
							</div>
							<div class="kosaricaKolicina flex-col">
			  					<label>Količina</label>
			  					<form>
			  						<label>{{$product['qty']}}</label>
							</form>
							</div>
							<div class="kosaricaCena flex-col">
							<label>Cena</label> <label class="kosaricaCena2">{{$product['item']['cena']}}€</label>
							</div>
						</div>
						<div class="kosaricaOdstrani flex-end">
							<a href="{{ route('odstraniizkosare', ['id' =>$product['item']['id']])}}" class="gumb siv">Odstrani</a>
						</div>
					</div>	
					@endforeach			
				</div>
			<div class="kosaricaSkupaj flex-col">
					<label class="kosaricaSkupajLab">Povzetek nakupa</label>
					<label class="kosaricaSkupajSt">({{ $totalQty }}) artiklov</label>
					<div class="kosaricaSkupajLab2 kos">
						<label class="kosaricaSkupajLab blag">Skupaj</label> 
						<label class="kosaricaSkupajLab cena blag">{{ $totalPrice }}€</label>
					</div>
						<a href="{{ route('checkout') }}" class="gumb modr blag">Na blagajno</a>
					</div>	
			</div>
			@else
			<label>Zapravljaj!</label>
			@endif
		</div>
	@include('layouts.partials.foot')
@stop	