@extends('layouts.masters.main')
@section('page-content')
	@include('layouts.partials.navadmin')
	<div class="body">
	<h2>Zbirka</h2>
	<div class="flex-end">
		<div class="block"></div>
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
				<a href="{{ route('artikeluredi', ['id' => $product->id])}}">
	  			<img src="{{ $product->imagePath}}" alt="{{$product->ime}}" style="width:150px;height:150px;">
				</a>
				<div class="artikel-podrobnosti flex-col-sp-around">
					<a href="{{ route('artist.index', ['id' => $var->id])}}" class="link izvajalec artikel">{{$var->ime}}</a>
					<div><a href="{{ route('artikeluredi', ['id' => $product->id])}}" class="link album artikel">{{$product->ime}}</a><label class="artikel-leto"> ({{$product->leto}})</label></div>	
					<div class="artikel-cena">{{$product->cena}}€</div>
				</div>
			</div>

			@endforeach
		</div>

		
	</div>

	</div>
	@include('layouts.partials.foot')
@stop