@extends('layouts.masters.main')
@section('page-content')
	@include('layouts.partials.nav')
	<div class="body">
	<div class="potka">
		<a href="{{route('home')}}">glazba</a><label>  /  </label><label class="klikpotka">Zbirka</label> 
	</div>
	<h2>Zbirka</h2>
	<div class="flex-end">
		<div class="block"></div>
		<div class="razvrsti select">
			<label>Razvrsti po:</label>
			<div class="flex-row">
			<a href="{{ route('imepad')}}" class="gumb">Ime - padajoče</a>
			<a href="{{ route('imenar')}}" class="gumb">Ime - naraščajoče</a>
			<a href="{{ route('cenpad')}}" class="gumb">Cena - padajoče</a>
			<a href="{{ route('cennar')}}" class="gumb">Cena - naraščajoče</a>
			</div>
		</div>
		<div class="block"></div>
	</div>
	<div class="flex-row">

		<div class="seznam flex-col" >
			@foreach($products as $product)
			@foreach($artists as $artist)
				@if ($artist->id === $product->artist_id)
                                <?php $var = $artist; ?>
                            @endif
			@endforeach
			<div class="artikel-posamezen flex-row">
				<a href="{{ route('product.index', ['id' => $product->id])}}">
	  			<img src="{{ $product->imagePath}}" alt="{{$product->ime}}" style="width:150px;height:150px;">
				</a>
				<div class="artikel-podrobnosti flex-col-sp-around">
					<a href="{{ route('artist.index', ['id' => $var->id])}}" class="link izvajalec artikel">{{$var->ime}}</a>
					<div><a href="{{ route('product.index', ['id' => $product->id])}}" class="link album artikel">{{$product->ime}}</a><label class="artikel-leto"> ({{$product->leto}})</label></div>	
					<div class="artikel-cena">{{$product->cena}}€</div>
					<form>
					<a href="{{ route('dodajvkosaro', ['id' => $product->id])}}" class="gumb oranzen sez">Dodaj v košarico</a></form>
				</div>
			</div>

			@endforeach
		</div>
		
	</div>


	</div>
	@include('layouts.partials.foot')
@stop