@extends('layouts.masters.main')
@section('page-content')
	@include('layouts.partials.navadmin')
	<div class="body">
	<h2>Artikli</h2>
	<div class="flex-end">
		<div class="block"></div>
		<div class="razvrsti select">
			<label>Razvrsti po:</label>
			<select>
					<option value="volvo">Cena - padajoče</option>
					<option value="saab">Cena - naraščajoče</option>
					<option value="opel">Ime - padajoče</option>
					<option value="audi">Ime - naraščajoče</option>
			</select>
		</div>
		<div class="block"></div>
	</div>
	<div class="flex-row">
		<div class="filtri flex-col">
			<div class="tip-filtra flex-col"><label class="filter-naslov">Kategorija</label>
				<div><input type="checkbox" name="izvajalec" value="Izvajalec" class="as"><label> Izvajalec</label></div>
				<div><input type="checkbox" name="album" value="Album"><label> Album</label></div>
				<div><input type="checkbox" name="pesem" value="Pesem"><label> Pesem</label></div>
				<div><input type="checkbox" name="žanr" value="Žanr"><label> Žanr</label></div>
			</div>
			<div class="tip-filtra flex-col"><label class="filter-naslov">Format</label>
				<div><input type="checkbox" name="cd" value="CD"><label> CD</label></div>
				<div><input type="checkbox" name="lp" value="LP"><label> LP/Vinil</label></div>
			</div>
			<div class="tip-filtra flex-col"><label class="filter-naslov">Leto izdaje</label>
				<div class="razpon">
				 	<div><form><input type="text" name="leto1" pattern="[0-9]{4}" maxlength="4" minlength="4" class="polje"> - <input type="text" name="leto2" pattern="[0-9]{4}" maxlength="4" minlength="4" class="polje"></form></div>
				</div>
			</div>
			<div class="tip-filtra flex-col"><label class="filter-naslov">Žanr</label>
				<div><input type="checkbox" name="rock" value="Rock"><label> Rock</label></div>
				<div><input type="checkbox" name="pop" value="Pop"><label> Pop</label></div>
				<div><input type="checkbox" name="jazz" value="Jazz"><label> Jazz</label></div>
				<div><input type="checkbox" name="klasika" value="Klasika"><label> Klasika</label></div>
			</div>
			<div class="tip-filtra flex-col"><label class="filter-naslov">Cena</label>
				<div class="razpon">
				 	<div><form><input type="text" name="cena1" pattern="[0-9]{0,}" class="polje"> - <input type="text" name="cena2" pattern="[0-9]{0,}" class="polje"></form></div>
				</div>
			</div>
			<div><input type="submit" value="Filtriraj" class="gumb modr filtr"></div>
		</div>
		<div class="seznam flex-col">
			@foreach($products as $product)
			<div class="artikel-posamezen flex-row">
				<a href="{{ route('artikeluredi', ['id' => $product->id])}}">
	  			<img src="/{{ $product->imagePath}}" alt="{{$product->ime}}" style="width:150px;height:150px;">
				</a>
				<div class="artikel-podrobnosti flex-col-sp-around">
					<a href="izvajalec2.html" class="link izvajalec artikel">Orchid</a>
					<div><a href="{{ route('artikeluredi', ['id' => $product->id])}}" class="link album artikel">{{$product->ime}}</a><label class="artikel-leto"> ({{$product->leto}})</label></div>	
					<div class="artikel-cena">{{$product->cena}}€</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="block"></div>
	</div>
	</div>
	@include('layouts.partials.foot')
@stop