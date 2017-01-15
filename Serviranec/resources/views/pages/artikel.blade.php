@extends('layouts.masters.main')
@section('page-content')
	@include('layouts.partials.nav')
	@include('layouts.partials.nav2')
		<div class="body">
		@foreach ($artists as $artist)
				@if ($product->artist_id === $artist->id)
				<?php $var = $artist; ?>
				@endif
			@endforeach
			<div class="potka">
				<a href="{{ url('/') }}">glazba</a><label> / </label><a href="{{ url('/zbirka') }}">Zbirka</a><label> / </label><label class="klikpotka">{{$var->ime}} - {{$product->ime}}</label>
			</div>
			<div class="artikel flex-col">
				<div class="zgori flex-row">
					<img src="/{{$product->imagePath}}" alt="{{$product->ime}}" style="width:300px;height: 300px;">
					<div class="artikelPodatki album flex-col-sp-between">
						<div><label class="artikelIme">{{$product->ime}}</label><label>({{$product->leto}})</label></div>
						<a href="{{ route('artist.index', ['id' => $var->id])}}" class="link izvajalec album">{{$var->ime}}</a>
						<div class="artikelPodatki2">
							<div><label class="artikelOznaka">Cena:</label><label class="artikelCena">{{$product->cena}}€</label></div>
							<div class="flex-col"><a href="{{ route('dodajvkosaro', ['id' => $product->id])}}" class="gumb modr artikel">Dodaj v košarico</a>
							</div>
						</div>
					</div>
				</div>
				<div class="artikelVsebina">
					{{$product->opis}}
				</div>
				<label class="pesmioznaka">Seznam pesmi</label>
				<div class=" pesmivse flex-sp-between">
					<ol class="pesmi">
					@foreach ($songs as $song)
					@if ($song->product_id === $product->id)
						<li>{{$song->ime}}</li>
					@endif
					@endforeach
					</ol>
					<ul class="pesmi">
					@foreach ($songs as $song)
					@if ($song->product_id === $product->id)
						<li>{{$song->dolzina}}</li>
					@endif
						@endforeach

					</ul>
				</div>
			</div>
		</div>
				@include('layouts.partials.foot')
@stop	