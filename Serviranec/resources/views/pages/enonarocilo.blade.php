@extends('layouts.masters.main')
@section('page-content')
@include('layouts.partials.navadmin')
	<div class="body">
			<h2>Naročilo št. {{$order->id}}</h2>
			
				<div class="narocila2">
				<div class="flex-col-sp-between">
					<div class="flex-row-sp-between">
					<form enctype="multipart/form-data" action="{{ URL::to("narocilo/$order->id") }}" method="POST">
						<label>Kupec</label>
						<div  class="flex-row">
							<input type="text" value="{{$order->name}}" class="polje"  name="kupec" required>
							<input type="text" value="{{$order->address}}" class="polje"  name="address" required>
						</div>
						<label>Izdelki</label>
						@foreach($order->cart->items as $item)
						<div  class="flex-row">
							<input type="text" value="{{$item['item']['id']}}" class="polje"  name="kupec" required>
							<label>{{$item['item']['ime']}} </label>
							<input type="text" value="{{$item['qty']}}" class="polje"  name="address" required>
							<a href="{{ route('odstraniiznarocila', ['id' =>$item['item']['id'], 'order' =>$order->id])}}" class="gumb siv">Odstrani</a>
						</div>
						@endforeach
						<input type="hidden" name="_token" value="{{csrf_token()}}">
		  				<input type="submit" class="gumb svmodr nastavitve" value="Shrani">
						</form>
					</div>
				</div>
				
				</div>
			</div>
		@include('layouts.partials.foot')
@stop