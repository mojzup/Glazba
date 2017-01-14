@extends('layouts.masters.main')
@section('page-content')
@include('layouts.partials.navadmin')
			<h2>Tekoča naročila</h2>
			<div class="narocila">
				<div class="narocila2">
				<div class="flex-col">
					@foreach($orders as $order)
					<label>{{$order->id}}</label>
					@endforeach
				</div>
				<button type="submit">Potrdi</button>
				</div>
			</div>
		@include('layouts.partials.foot')
@stop