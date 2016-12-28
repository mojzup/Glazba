@extends('layouts.masters.main')
@section('page-content')
	@include('layouts.partials.nav')
	@include('layouts.partials.nav2')	
		<div class="body">
			<h2>Košarica</h2>
			<div class=" kosaravse ">
				<div class="seznam kosarica flex-col">
					<div class="kosaricaArtikel flex-col">
						<div class="flex-sp-between">
							<a href="">
		  						<img src="slike/orchid-the-mouths-of-madness.jpg" alt="Mouth Of Madness" style="height:150px;width:150px;">
							</a>
							<div class="flex-col">
								<a href="izvajalec2.html" class="link izvajalec">Orchid</a>
								<a href="artikel.html" class="link album">The Mouths of Madness</a>
							</div>
							<div class="kosaricaKolicina flex-col">
			  					<label>Količina</label>
			  					<form>
			  						<label><input type="text" name="quantity" pattern="[0-9]{1,2}" class="polje kolicina"></label>
							</form>
							</div>
							<div class="kosaricaCena flex-col">
							<label>Cena</label> <label class="kosaricaCena2">15€</label>
							</div>
						</div>
						<div class="kosaricaOdstrani flex-end">
							<input type="submit" value="Odstrani" class="gumb siv">
						</div>
					</div>	
					<div class="kosaricaArtikel flex-col">
						<div class="flex-sp-between">
							<a href="">
		  						<img src="slike/orchid-the-mouths-of-madness.jpg" alt="Mouth Of Madness" style="height:150px;width:150px;">
							</a>
							<div class="flex-col">
								<a href="izvajalec2.html" class="link izvajalec">Orchid</a>
								<a href="artikel.html" class="link album">The Mouths of Madness</a>
							</div>
							<div class="kosaricaKolicina flex-col">
			  					<label>Količina</label>
			  					<form>
			  						<label><input type="text" name="quantity" pattern="[0-9]{1,2}" class="polje kolicina"></label>
							</form>
							</div>
							<div class="kosaricaCena flex-col">
							<label>Cena</label> <label class="kosaricaCena2">15€</label>
							</div>
						</div>
						<div class="kosaricaOdstrani flex-end">
							<input type="submit" value="Odstrani" class="gumb siv">
						</div>
					</div>	
					<div class="kosaricaArtikel flex-col">
						<div class="flex-sp-between">
							<a href="">
		  						<img src="slike/orchid-the-mouths-of-madness.jpg" alt="Mouth Of Madness" style="height:150px;width:150px;">
							</a>
							<div class="flex-col">
								<a href="izvajalec2.html" class="link izvajalec">Orchid</a>
								<a href="artikel.html" class="link album">The Mouths of Madness</a>
							</div>
							<div class="kosaricaKolicina flex-col">
			  					<label>Količina</label>
			  					<form>
			  						<label><input type="text" name="quantity" pattern="[0-9]{1,2}" class="polje kolicina"></label>
							</form>
							</div>
							<div class="kosaricaCena flex-col">
							<label>Cena</label> <label class="kosaricaCena2">15€</label>
							</div>
						</div>
						<div class="kosaricaOdstrani flex-end">
							<input type="submit" value="Odstrani" class="gumb siv">
						</div>
					</div>	
					<div class="kosaricaArtikel flex-col">
						<div class="flex-sp-between">
							<a href="">
		  						<img src="slike/orchid-the-mouths-of-madness.jpg" alt="Mouth Of Madness" style="height:150px;width:150px;">
							</a>
							<div class="flex-col">
								<a href="izvajalec2.html" class="link izvajalec">Orchid</a>
								<a href="artikel.html" class="link album">The Mouths of Madness</a>
							</div>
							<div class="kosaricaKolicina flex-col">
			  					<label>Količina</label>
			  					<form>
			  						<label><input type="text" name="quantity" pattern="[0-9]{1,2}" class="polje kolicina"></label>
							</form>
							</div>
							<div class="kosaricaCena flex-col">
							<label>Cena</label> <label class="kosaricaCena2">15€</label>
							</div>
						</div>
						<div class="kosaricaOdstrani flex-end">
							<input type="submit" value="Odstrani" class="gumb siv">
						</div>
					</div>		
				</div>
			<div class="kosaricaSkupaj flex-col">
					<label class="kosaricaSkupajLab">Povzetek nakupa</label>
					<label class="kosaricaSkupajSt">(4 artikli)</label>
					<div class="kosaricaSkupajLab2 kos">
						<label class="kosaricaSkupajLab blag">Skupaj</label> 
						<label class="kosaricaSkupajLab cena blag">60€</label>
					</div>
						<a href="{{ url('/blagajna') }}" class="gumb modr blag">Na blagajno</a>
					</div>	
			</div>
		</div>
	@include('layouts.partials.foot')
@stop	