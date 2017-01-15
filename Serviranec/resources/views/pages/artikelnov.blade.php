@extends('layouts.masters.main')
@section('page-content')
@include('layouts.partials.nav')
		<div class="wrapper">
			<h2>Dodaj artikel</h2>
			<div class="wrapper2">
			<form enctype="multipart/form-data" action="{{ route('artikelnov')}}" method="POST">
				<div class="flex-row novartikel">
				
					<div class="flex-col novartikel">
						<h3>Slika</h3>
						<canvas class="kanvas" width="213" height="160"></canvas>
						<input type="file" name="file" id="file" class="inputfile" />
						<label for="file" class="gumb siv slika">Izberi datoteko ...</label>
					</div>
					<div class="flex-col">
						<h3>Podatki</h3>
						<label class="labela">Album</label>
						<input type="text" name="ime" class="polje nastavitve" required>
						<label class="labela">Izvajalec ID</label>
						<input type="text" name="izvajalec" class="polje nastavitve" required>
						<label class="labela">Leto</label>
						<input type="text" name="leto" class="polje nastavitve">
						<label class="labela">Cena</label>
						<input type="text" name="cena" class="polje nastavitve" required>€
						<label class="labela">Format [0 - LP, 1 - CD]</label>
						<input type="text" name="format" class="polje nastavitve" required>
						<label class="labela">Opis</label>
						<input type="text" name="opis" class="polje nastavitve" required>
					</div>
				
			</div>
			{{ csrf_field() }}
			<input type="submit" class="gumb modr nastavitve" value="Shrani">
			</form>	
		</div>
	@include('layouts.partials.foot')
@stop