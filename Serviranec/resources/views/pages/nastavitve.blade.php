@extends('layouts.masters.main')
@section('page-content')
	@include('layouts.partials.nav')
	@include('layouts.partials.nav2')		
		<div class="body">	
			<h2>Nastavitve</h2>
			<div class="seznam nastavitve flex-col">
				<h3>Spremeni prikazno sliko</h3>
				<div class="camera">
					<div class="flex-row">
						<video id="video" width="213" height="160" autoplay></video>
						<canvas id="canvas" width="213" height="160"></canvas>
					</div>
					<input type="submit" id="snap" class="gumb modr nastavitve" value="Zajemi sliko">
	  			</div>
				<h3>Spremeni geslo</h3>
				<label>Staro geslo</label>
				<input type="password" placeholder="Vnesi geslo" name="psw" class="polje nast" required>
				<label>Novo geslo</label>
				<input type="password" placeholder="Vnesi geslo" name="psw" class="polje nastavitve" required>
				<label>Potrdi geslo</label>
				<input type="password" placeholder="Vnesi geslo" name="psw" class="polje nastavitve" required>
				<h3>Spremeni naslov</h3>
				<label>Ime Priimek</label>
				<input type="text" placeholder="Vnesi ime in priimek" name="uname" class="polje nastavitve" required>
				<label>Ulica in hišna številka</label>
				<input type="text" placeholder="Vnesi ulico in hišno številko" name="uname" class="polje nastavitve" required>
				<label>Pošta in poštna številka</label>
				<input type="text" placeholder="Vnesi pošto in poštno številko" name="uname" class="polje nastavitve" required>
				<label>Država</label>
				<input type="text" placeholder="Vnesi državo" name="uname" class="polje nastavitve" required>
				<h3>Spremeni podatke o plačilni kartici</h3>
				<label>Ime nosilca</label>
				<input type="text" placeholder="Vnesi ime nosilca kartice" name="uname" class="polje nastavitve" required>
				<label>Številka kartice</label>
				<input type="text" placeholder="Vnesi številko kartice" name="uname" class="polje nastavitve" required>
				<label>Veljavno do</label>
				<input type="text" placeholder="Vnesi pač to" name="uname" class="polje nastavitve" required>
				<label>Varnostna koda</label>
				<input type="text" placeholder="Vnesi varnostno kodo" name="uname" class="polje nastavitve" required>
				<input type="submit" class="gumb modr nastavitve" value="Shrani">	
			</div>
		</div>
		@include('layouts.partials.foot')
@stop	