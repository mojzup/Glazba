@extends('layouts.masters.main')
@section('page-content')
	@include('layouts.partials.nav')
	@include('layouts.partials.nav2')
		<div class="body">
			<h2>Seznam želja</h2>
				<div class="seznam zelje flex-col">
					<div class="zeljeArtikel">
						<div class="zeljeArtikel2 flex-sp-between">
							<a href="">
		  						<img src="slike/orchid-the-mouths-of-madness.jpg" alt="Mouth Of Madness" style="height:150px;width:150px;">
							</a>
							<div class="zeljeIme flex-col " >
								<a href="izvajalec2.html" class="link izvajalec">Orchid</a>
								<a href="artikel.html" class="link album">The Mouths of Madness</a>
							</div>
							<div class="zeljeCena">
							<label>Cena</label> <label class="kosaricaCena2">15€</label>
							</div>
						</div>
						<div class="zeljeGumb flex-col">
							<input type="submit" value="Kupi zdaj" class="gumb modr">
							<input type="submit" value="Dodaj v košarico" class="gumb svmodr">
						</div>
					</div>	
						<div class="zeljeArtikel flex-sp-between">
						<div class="zeljeArtikel2 flex-sp-between">
							<a href="">
		  						<img src="slike/orchid-the-mouths-of-madness.jpg" alt="Mouth Of Madness" style="height:150px;width:150px;">
							</a>
							<div class="zeljeIme flex-col " >
								<a href="izvajalec2.html" class="link izvajalec">Orchid</a>
								<a href="artikel.html" class="link album">The Mouths of Madness</a>
							</div>
							<div class="zeljeCena">
							<label>Cena</label> <label class="kosaricaCena2">15€</label>
							</div>
						</div>
						<div class="zeljeGumb flex-col">
							<input type="submit" value="Kupi zdaj" class="gumb modr">
							<input type="submit" value="Dodaj v košarico" class="gumb svmodr">
						</div>
					</div>	
						<div class="zeljeArtikel flex-sp-between">
						<div class="zeljeArtikel2 flex-sp-between">
							<a href="">
		  						<img src="slike/orchid-the-mouths-of-madness.jpg" alt="Mouth Of Madness" style="height:150px;width:150px;">
							</a>
							<div class="zeljeIme flex-col " >
								<a href="izvajalec2.html" class="link izvajalec">Orchid</a>
								<a href="artikel.html" class="link album">The Mouths of Madness</a>
							</div>
							<div class="zeljeCena">
							<label>Cena</label> <label class="kosaricaCena2">15€</label>
							</div>
						</div>
						<div class="zeljeGumb flex-col">
							<input type="submit" value="Kupi zdaj" class="gumb modr">
							<input type="submit" value="Dodaj v košarico" class="gumb svmodr">
						</div>
					</div>	
						<div class="zeljeArtikel flex-sp-between">
						<div class="zeljeArtikel2 flex-sp-between">
							<a href="">
		  						<img src="slike/orchid-the-mouths-of-madness.jpg" alt="Mouth Of Madness" style="height:150px;width:150px;">
							</a>
							<div class="zeljeIme flex-col " >
								<a href="izvajalec2.html" class="link izvajalec">Orchid</a>
								<a href="artikel.html" class="link album">The Mouths of Madness</a>
							</div>
							<div class="zeljeCena">
							<label>Cena</label> <label class="kosaricaCena2">15€</label>
							</div>
						</div>
						<div class="zeljeGumb flex-col">
							<input type="submit" value="Kupi zdaj" class="gumb modr">
							<input type="submit" value="Dodaj v košarico" class="gumb svmodr">
						</div>
					</div>	
				</div>	
			</div>	
		@include('layouts.partials.foot')
@stop	