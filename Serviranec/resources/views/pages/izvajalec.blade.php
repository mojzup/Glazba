@extends('layouts.masters.main')
@section('page-content')
	@include('layouts.partials.nav')
	<div class="body">
			<div class="potka">
				<a href="{{route('home')}}">glazba</a><label> / </label><a href="{{ url('/izvajalci') }}">Izvajalci</a><label> / </label><label class="klikpotka">{{$artist->ime}}</label>
			</div>
			<h2>{{$artist->ime}}</h2>
			<div>
				<div class="zgori">
					<img src="/{{$artist->imagePath}}" alt="{{$artist->ime}}" style="width:450px;height:450px;">
					<div class="artikelPodatki flex-col">
						<div class="artikelPodatki2 izvajalec flex-col-sp-between">
							<label>{{$artist->izvor}}</label>
							<label>Leta delovanja: {{$artist->leta}}</label>
							<label>Založba: {{$artist->zalozba}}</label>
							<label>Člani: {{$artist->clani}}</label>
							<label>Nekdanji člani:  {{$artist->exclani}}</label>
							<label>Spletna stran:<a href="{{$artist->spletna}}" class="link"> {{$artist->spletna}}</a></label>
						</div>
					</div>
				</div>
				</div>
				<div class="seznam3">
				@foreach ($products as $product)
					@if ($product->artist_id === $artist->id)
					<div class="artikel-posamezen flex-row">
						<a href="artikel.html">
			  			<img src="/{{$product->imagePath}}" alt="{{$product->ime}}" style="width:150px;height:150px;">
						</a>
						<div class="artikel-podrobnosti flex-col-sp-around">
							<div><a href="{{ route('product.index', ['id' => $product->id])}}" class="link album">{{$product->ime}}</a><label class="artikel-leto"> ({{$product->leto}})</label></div>	
							<div class="artikel-cena">{{$product->cena}}€</div>
							<form>
							<a href="{{ route('dodajvkosaro', ['id' => $product->id])}}" class="gumb oranzen sez">Dodaj v košarico</a></form>
						</div>
					</div>
					@endif
				@endforeach	
				</div>
				</div>
	@include('layouts.partials.foot')
@stop