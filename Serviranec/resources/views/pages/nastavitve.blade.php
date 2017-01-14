@extends('layouts.masters.main')
@section('page-content')
	@include('layouts.partials.nav')
	@include('layouts.partials.nav2')		
		<div class="body">	
			<h2>Nastavitve</h2>
			<div class="seznam nastavitve flex-col">
			
				<h3>Spremeni prikazno sliko</h3>
				<div class="flex-row">
		  			<img src="/slike/avatarji/{{ $user->imagePath}}" style="width:150px; height:150px;">
		  			<form enctype="multipart/form-data" action="{{ URL::to("nastavitve/$user->name") }}" method="POST">
		  			<input type="file" name="prikazna">	
	  			</div>
				<h3>Spremeni geslo</h3>
				<label>Staro geslo</label>
				<input type="password" placeholder="Vnesi geslo" name="psw" class="polje nast" >
				<label>Novo geslo</label>
				<input type="password" placeholder="Vnesi geslo" name="psw" class="polje nastavitve" >
				<label>Potrdi geslo</label>
				<input type="password" placeholder="Vnesi geslo" name="psw" class="polje nastavitve" >
				<h3>Spremeni naslov</h3>
				<label>Ime Priimek</label>
				<input type="text" value="{{ $user->imepriimek}}" name="imepriimek" class="polje nastavitve" >
				<label>Ulica in hišna številka</label>
				<input type="text" value="{{ $user->ulica}}" name="ulica" class="polje nastavitve" >
				<label>Pošta in poštna številka</label>
				<input type="text" value="{{ $user->posta}}" name="posta" class="polje nastavitve" >
				<label>Država</label>
				<input type="text" value="{{ $user->drzava}}" name="drzava" class="polje nastavitve" >
				<h3>Spremeni podatke o plačilni kartici</h3>
				<label>Ime nosilca</label>
				<input type="text" value="{{ $user->KREDnosilec}}" name="KREDnosilec" class="polje nastavitve" >
				<label>Številka kartice</label>
				<input type="text" value="{{ $user->KREDstevilka}}" name="KREDstevilka" class="polje nastavitve" >
				<label>Veljavno do</label>
				<div class="flex-row"><input type="text" value="{{ $user->KREDmesec}}" name="KREDmesec" class="polje nastavitve" >/
				<input type="text" value="{{ $user->KREDleto}}" name="KREDleto" class="polje nastavitve" ></div>
				<label>Varnostna koda</label>
				<input type="text" value="{{ $user->KREDvarnost}}" name="KREDvarnost" class="polje nastavitve" >
				<input type="hidden" name="_token" value="{{csrf_token()}}">
		  		<input type="submit" class="gumb modr nastavitve" value="Shrani">
				</form>
			</div>
		</div>
		@include('layouts.partials.foot')
@stop	