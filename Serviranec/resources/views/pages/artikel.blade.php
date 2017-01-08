@extends('layouts.masters.main')
@section('page-content')
	@include('layouts.partials.nav')
	@include('layouts.partials.nav2')
		<div class="body">
			<div class="potka">
				<a href="index.html">glazba</a><label> / </label><a href="seznam.html">Zbirka</a><label> / </label><label class="klikpotka">Orchid - The Mouths of Madness</label>
			</div>
			<div class="artikel flex-col">
				<div class="zgori flex-row">
					<img src="slike/orchid-the-mouths-of-madness.jpg" alt="Mouths Of Madness" style="width:300px;height: 300px;">
					<div class="artikelPodatki album flex-col-sp-between">
						<div><label class="artikelIme">The Mouths of Madness</label><label>(2013)</label></div>
						<a href="izvajalec2.html" class="link izvajalec album">Orchid</a>
						<form>
		  					<label class="artikelOznaka druga">Količina:</label>
		  					<input type="text" name="quantity"  pattern="[0-9]{1,2}" class="polje artikel">
		  					<label class="artikelZaloga">na zalogi</label>
						</form>
						<div class="artikelPodatki2">
							<div><label class="artikelOznaka">Cena:</label><label class="artikelCena">15 €</label></div>
							<input type="submit" class="gumb modr artikel" Value="Dodaj v košarico">
							<input type="submit" class="gumb svmodr artikel" Value="Dodaj na seznam želja">
						</div>
					</div>
				</div>
				<div class="artikelVsebina">
					The Mouths of Madness je drugi studijski album Ameriške heavy metal skupine Orchid.
					The Mouths of Madness je drugi studijski album Ameriške heavy metal skupine Orchid.
					The Mouths of Madness je drugi studijski album Ameriške heavy metal skupine Orchid.
					The Mouths of Madness je drugi studijski album Ameriške heavy metal skupine Orchid.
					The Mouths of Madness je drugi studijski album Ameriške heavy metal skupine Orchid.
					The Mouths of Madness je drugi studijski album Ameriške heavy metal skupine Orchid.
				</div>
				<label class="pesmioznaka">Seznam pesmi</label>
				<div class=" pesmivse flex-sp-between">
					<ol class="pesmi">
						<li>Mouths of Madness</li>
						<li>Marching Dogs of War</li>
						<li>Silent One</li>
						<li>Nomad</li>
						<li>Mountains of Steel</li>
						<li>Leaving It All Behind</li>
						<li>Loving Hand of God</li>
						<li>Wizard of War</li>
						<li>See You on the Other Side</li>
					</ol>
					<ul class="pesmi">
						<li>5:50</li>
						<li>5:29</li>
						<li>7:25</li>
						<li>6:21</li>
						<li>6:57</li>
						<li>7:20</li>
						<li>6:10</li>
						<li>3:19</li>
						<li>7:16</li>
					</ul>
				</div>
			</div>
		</div>
				@include('layouts.partials.foot')
@stop	