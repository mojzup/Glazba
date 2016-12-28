@extends('layouts.masters.main')
@section('page-content')
	@include('layouts.partials.nav')
	<div class="body">
	<div class="potka">
		<a href="index.html">glazba</a><label>  /  </label><label class="klikpotka">Zbirka</label> 
	</div>
	<h2>Zbirka</h2>
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
			<div class="artikel-posamezen flex-row">
				<a href="artikel.html">
	  			<img src="slike/orchid-the-mouths-of-madness.jpg" alt="Mouth of Madness" style="width:150px;height:150px;">
				</a>
				<div class="artikel-podrobnosti flex-col">
					<a href="izvajalec2.html" class="link izvajalec artikel">Orchid</a>
					<div><a href="artikel.html" class="link album artikel">The Mouths of Madness</a><label class="artikel-leto"> (2013)</label></div>	
					<div class="artikel-cena">15€</div>
					<form>
					<input type="submit" value="Dodaj v košarico" class="gumb oranzen sez"></form>
				</div>
			</div>
			<div class="artikel-posamezen flex-row">
				<a href="artikel.html">
	  			<img src="slike/orchid-the-mouths-of-madness.jpg" alt="Mouth of Madness" style="width:150px;height:150px;">
				</a>
				<div class="artikel-podrobnosti flex-col-sp-around">
					<a href="izvajalec2.html" class="link izvajalec artikel">Orchid</a>
					<div><a href="artikel.html" class="link album artikel">The Mouths of Madness</a><label class="artikel-leto"> (2013)</label></div>	
					<div class="artikel-cena">15€</div>
					<form>
					<input type="submit" value="Dodaj v košarico" class="gumb oranzen sez"></form>
				</div>
			</div>
			<div class="artikel-posamezen flex-row">
				<a href="artikel.html">
	  			<img src="slike/orchid-the-mouths-of-madness.jpg" alt="Mouth of Madness" style="width:150px;height:150px;">
				</a>
				<div class="artikel-podrobnosti flex-col-sp-around">
					<a href="izvajalec2.html" class="link izvajalec artikel">Orchid</a>
					<div><a href="artikel.html" class="link album artikel">The Mouths of Madness</a><label class="artikel-leto"> (2013)</label></div>	
					<div class="artikel-cena">15€</div>
					<form>
					<input type="submit" value="Dodaj v košarico" class="gumb oranzen sez"></form>
				</div>
			</div>
			<div class="artikel-posamezen ">
				<a href="artikel.html">
	  			<img src="slike/orchid-the-mouths-of-madness.jpg" alt="Mouth of Madness" style="width:150px;height:150px;">
				</a>
				<div class="artikel-podrobnosti flex-col-sp-around">
					<a href="izvajalec2.html" class="link izvajalec artikel">Orchid</a>
					<div><a href="artikel.html" class="link album artikel">The Mouths of Madness</a><label class="artikel-leto"> (2013)</label></div>	
					<div class="artikel-cena">15€</div>
					<form>
					<input type="submit" value="Dodaj v košarico" class="gumb oranzen sez"></form>
				</div>
			</div>
		</div>
		<div class="block"></div>
	</div>
	</div>
	@include('layouts.partials.foot')
@stop