@extends('layouts.masters.main')
@section('page-content')
@include('layouts.partials.navadmin')
		<div class="wrapper">
		<div class="potka">
				<a href="{{ url('/admin') }}">glazba</a><label> / </label><a href="{{ url('/adminzbirka') }}">Zbirka</a><label> / </label><label class="klikpotka">Orchid -{{$product->ime}}</label>
			</div>
			<h2>Uredi artikel</h2>
			<div class="wrapper2">
			<form enctype="multipart/form-data" action="{{ URL::to("artikeluredi/$product->id") }}" method="POST">
				<div class="flex-row novartikel">
				
					<div class="flex-col novartikel">
						<h3>Slika</h3>
						<img src="/{{ $product->imagePath}}" style="width:150px; height:150px;">
						<input type="file" name="file" id="file" class="inputfile" />
						<label for="file" class="gumb siv slika">Izberi datoteko ...</label>
					</div>
					<div class="flex-col">
						<h3>Podatki</h3>
						<label class="labela">Album</label>
						<input type="text" name="ime" class="polje nastavitve" value="{{ $product->ime}}" required>
						<label class="labela">Izvajalec ID</label>
						<input type="text" name="izvajalec" class="polje nastavitve" value="{{ $product->artist_id}}" required>
						<label class="labela">Leto</label>
						<input type="text" name="leto" class="polje nastavitve" value="{{ $product->leto}}">
						<label class="labela">Cena</label>
						<input type="text" name="cena" class="polje nastavitve" required value="{{ $product->cena}}">€
						<label class="labela">Format [0 - LP, 1 - CD]</label>
						<input type="text" name="format" class="polje nastavitve" value="{{ $product->format}}" required>
						<label class="labela">Opis</label>
						<input type="text" name="opis" class="polje nastavitve" value="{{ $product->opis}}"  required>
					</div>
				
			</div>
			{{ csrf_field() }}
			<input type="submit" class="gumb modr nastavitve" value="Shrani">
			</form>	
		</div>
	</div>
	@include('layouts.partials.foot')
@stop