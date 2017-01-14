@extends('layouts.masters.main')
@section('page-content')
@include('layouts.partials.navadmin')
	<div class="body">
			<h2>Tekoča naročila</h2>
			
				<div class="narocila2">
				<div class="flex-col-sp-between">
					@foreach($orders as $order)
					<div class="flex-row-sp-between">
						<label>{{$order->id}} </label>
						<label>{{$order->name}} </label>
						<label>{{$order->address}} </label>
						<label>{{$order->cart->totalPrice}}€</label>
						<a href="{{ route('preglednarocilo', ['id' => $order->id])}}" class="gumb svmodr">Preglej in uredi</a>

					</div>
					@endforeach
				</div>
				
				</div>
			</div>
		@include('layouts.partials.foot')
@stop