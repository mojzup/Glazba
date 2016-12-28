@extends('layouts.masters.main')
@section('page-content')
		<div class="blagajnaglava"><a href="index.html"><img src="slike/logo1.png" width="194.6px" height="81.3px" alt="Glazba" class ="logo blagajna"></a>	
			<h2>Blagajna</h2>
		</div>
		<div class="blagajna">
			<div class ="blagajna2">
				<label class="blagajna-naslov">Povzetek nakupa</label>
				<div class="blagajnaPovzetek">
					<div class="blagajnaArtikel">
						<a href="artikel.html">Orchid - The Mouths of Madness</a>
						<label>Cena: 15€</label>
					</div>
					<div class="blagajnaArtikel">
						<a href="artikel.html">Orchid - The Mouths of Madness</a>
						<label>Cena: 15€</label>
					</div>
				</div>
				<label class="blagajna-naslov">Naslov za dostavo</label>
				<div class="blagajnaPovzetek">
					<label>Ime Priimek</label>
					<input type="text" placeholder="Vnesi ime in priimek" name="uname" class="polje" required>
					<label>Ulica in hišna številka</label>
					<input type="text" placeholder="Vnesi ulico in hišno številko" name="uname" class="polje" required>
					<label>Pošta in poštna številka</label>
					<input type="text" placeholder="Vnesi pošto in poštno številko" name="uname" class="polje" required>
					<label>Država</label>
					<input type="text" placeholder="Vnesi državo" name="uname" class="polje" required>
				</div>
				<label class="blagajna-naslov">Podatki o plačilni kartici</label>
				<div class="blagajnaPovzetek">
					<label>Ime nosilca</label>
					<input type="text" placeholder="Vnesi ime nosilca kartice" name="uname" class="polje" required>
					<label>Številka kartice</label>
					<input type="text" placeholder="Vnesi številko kartice" name="uname" class="polje" required>
					<label>Veljavno do</label>
					<input type="text" placeholder="Vnesi pač to" name="uname" class="polje" required>
					<label>Varnostna koda</label>
					<input type="text" placeholder="Vnesi varnostno kodo" name="uname" class="polje" required>	
				</div>
			</div>
			<div class="kosaricaSkupaj blagajna">
				<div class="kosaricaSkupajIzdelek"><label class="kosaricaSkupajIzdelek2">Izdelek (1)</label><label>15€</label></div>
				<div class="kosaricaSkupajIzdelek"><label class="kosaricaSkupajIzdelek2">Izdelek (1)</label><label>15€</label></div>
				<div class="kosaricaSkupajLab2">
					<label class="kosaricaSkupajLab blag">Skupaj</label> 
					<label class="kosaricaSkupajLab cena blag">30€</label>
				</div>
				<a href="blagajna.html" class="gumb modr blag druga">Potrdi in plačaj</a>
			</div>
		</div>
@stop