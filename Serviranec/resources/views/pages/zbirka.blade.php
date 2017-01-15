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
		<div class="block"></div>
	</div>
	<div class="flex-row">
		<div class="filtri flex-col">
				
					<div class="tip-filtra flex-col"><label class="filter-naslov">Format</label>
					<div><a href="{{ route('cd')}}" class="gumb modr filtr">CD</a></div>
					<div><a href="{{ route('lp')}}" class="gumb modr filtr">LP/Vinil</a></div>
					</div>
					<div class="tip-filtra flex-col"><label class="filter-naslov">Razvrsti</label>
					<div><a href="{{ route('imepad')}}" class="gumb modr filtr">Ime - padajoče</a></div>
			<div><a href="{{ route('imenar')}}" class="gumb modr filtr">Ime - naraščajoče</a></div>
			<div><a href="{{ route('cenpad')}}" class="gumb modr filtr">Cena - padajoče</a></div>
			<div><a href="{{ route('cennar')}}" class="gumb modr filtr">Cena - naraščajoče</a></div>
					</div>
				</div>
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