@extends('layouts.masters.main')
@section('page-content')
	@include('layouts.partials.nav')
	<div class="body">
	<div id="charge-message">{{ Session::get('success')}}</div>
	@foreach ($products as $product)
		@if($product->id == '5')
		<?php $prod1 = $product;?>
		@endif
		@foreach($artists as $artist)
		@if ($artist->id === $product->where('id','5')->first()->artist_id)
	            <?php $feat1 = $artist; ?>
	    @endif
	    @if ($artist->id === $product->where('id','11')->first()->artist_id)
	            <?php $feat2 = $artist; ?>
	    @endif
	    @if ($artist->id === $product->where('id','1')->first()->artist_id)
	            <?php $feat3 = $artist; ?>
	    @endif
	    @if ($artist->id === $product->where('id','14')->first()->artist_id)
	            <?php $feat4 = $artist; ?>
	    @endif
	    @if ($artist->id === $product->where('id','8')->first()->artist_id)
	            <?php $feat5 = $artist; ?>
	    @endif
		@endforeach
		@endforeach
		<div class="index-featured">
			<h3>Vroča ponudba</h3>
				<div class="featured">
					<a href="{{ route('product.index', ['id' => $prod1->id])}}"><img src="/{{$prod1 ->imagePath}}" alt="{{$prod1->ime }}" style="width:230px;height:230px;"></a>
					<div class="flex-col-sp-around featured">
						<a href="{{ route('artist.index', ['id' => $feat1->id])}}"" class="link izvajalec featured">{{$feat1->ime}}</a>
						<a href="{{ route('product.index', ['id' => $prod1 ->id])}}" class="link album featured">{{$prod1->ime}}</a>
						<label>{{$prod1 ->cena}} €</label>
						<a href="{{ route('dodajvkosaro', ['id' => $prod1 ->id])}}" class="gumb oranzen featured">Dodaj v košarico</a>
					</div>
				</div>
		</div>
		<div class="index-featured less ">
			<h3>Ostala vroča ponudba</h3>
				<div class="floatingblock">
					<div class="flex-col-sp-between">
						<a href="{{ route('product.index', ['id' => $product->where('id', '11')->first()->id])}}"><img src="/{{$product->where('id', '11')->first()->imagePath}}" alt="{{$product->where('id', '11')->first()->ime}}" style="width:90%;height:90%;"></a>
						<a href="{{ route('artist.index', ['id' => $feat2->id])}}" class="link izvajalec featured less">{{$feat2->ime}}</a>
						<a href="{{ route('product.index', ['id' => $product->where('id', '11')->first()->id])}}" class="link album featured less">{{$product->where('id', '11')->first()->ime}}</a>
						<label>{{$product->where('id', '11')->first()->cena}} €</label>
						<a href="{{ route('dodajvkosaro', ['id' => $product->where('id', '11')->first()->id])}}" class="gumb oranzen featured less">Dodaj v košarico</a>
					</div>
				</div>
				<div class="floatingblock">
					<div class="flex-col-sp-between">
						<a href="{{ route('product.index', ['id' => $product->where('id', '1')->first()->id])}}"><img src="/{{$product->where('id', '1')->first()->imagePath}}" alt="{{$product->where('id', '1')->first()->ime}}" style="width:90%;height:90%;"></a>
						<a href="{{ route('artist.index', ['id' => $feat3->id])}}" class="link izvajalec featured less">{{$feat3->ime}}</a>
						<a href="{{ route('product.index', ['id' => $product->where('id', '1')->first()->id])}}" class="link album featured less">{{$product->where('id', '1')->first()->ime}}</a>
						<label>{{$product->where('id', '1')->first()->cena}} €</label>
						<a href="{{ route('dodajvkosaro', ['id' => $product->where('id', '1')->first()->id])}}" class="gumb oranzen featured less">Dodaj v košarico</a>
					</div>
				</div>
				<div class="floatingblock">
					<div class="flex-col-sp-between">
						<a href="{{ route('product.index', ['id' => $product->where('id', '14')->first()->id])}}"><img src="/{{$product->where('id', '14')->first()->imagePath}}" alt="{{$product->where('id', '14')->first()->ime}}" style="width:90%;height:90%;"></a>
						<a href="{{ route('artist.index', ['id' => $feat4->id])}}" class="link izvajalec featured less">{{$feat4->ime}}</a>
						<a href="{{ route('product.index', ['id' => $product->where('id', '14')->first()->id])}}" class="link album featured less">{{$product->where('id', '14')->first()->ime}}</a>
						<label>{{$product->where('id', '14')->first()->cena}} €</label>
						<a href="{{ route('dodajvkosaro', ['id' => $product->where('id', '14')->first()->id])}}" class="gumb oranzen featured less">Dodaj v košarico</a>
					</div>
				</div>
				<div class="floatingblock">
					<div class="flex-col-sp-between">
						<a href="{{ route('product.index', ['id' => $product->where('id', '8')->first()->id])}}"><img src="/{{$product->where('id', '8')->first()->imagePath}}" alt="{{$product->where('id', '8')->first()->ime}}" style="width:90%;height:90%;"></a>
						<a href="{{ route('artist.index', ['id' => $feat5->id])}}" class="link izvajalec featured less">{{$feat5->ime}}</a>
						<a href="{{ route('product.index', ['id' => $product->where('id', '8')->first()->id])}}" class="link album featured less">{{$product->where('id', '8')->first()->ime}}</a>
						<label>{{$product->where('id', '8')->first()->cena}} €</label>
						<a href="{{ route('dodajvkosaro', ['id' => $product->where('id', '8')->first()->id])}}" class="gumb oranzen featured less">Dodaj v košarico</a>
					</div>
				</div>

		</div>
	
	</div>
	@include('layouts.partials.foot')
@stop