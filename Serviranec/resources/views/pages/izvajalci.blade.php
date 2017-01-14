@extends('layouts.masters.main')
@section('page-content')
	@include('layouts.partials.nav')
		<div class="body">
			<div class="potka">
				<a href="index.html">glazba</a><label>  /  </label><label class="klikpotka">Izvajalci</label> 
			</div>
			<h2>Izvajalci</h2>
			<div class="seznam2 flex-col">
			@foreach ($artists as $artist)
				<a href="{{ route('artist.index', ['id' => $artist->id])}}">{{$artist->ime}}</a>
			@endforeach	
			</div>
		</div>
	@include('layouts.partials.foot')
@stop	