<div class="header">
	<div class="glavca flex-center">
		<div class="block"><a href="index.html"><img src="slike/logo2.png" alt="Glazba"></a></div>
		<div class="search-box flex-row">
			<div class="stretch"><input type="search" name="iskalnik" class="polje"><a href=""></a></div>
			<div class="normal"><input type="image" src="slike/magglass.png" alt="Išči" class="gumb oranzen"/></div>
		</div>
		<div class="block prij"> 
			<label>{!! link_to_route('get_login', 'Prijava') !!}</label>
			<label>|</label>
			<label>{!! link_to_route('get_register', 'Registracija') !!}</label>
		</div>				
	</div>
	<div class="glavca meni">
		<div class="block"></div>
		<div class="block2">
			<a href="seznam.html" >Zbirka</a>
			<a href="izvajalec.html" >Izvajalci</a>
			<a href="zanr.html" >Zvrsti</a>
		</div>
		<div class = "block index-kosarica flex-row">
			<a href="kosara.html" class="cart"><img src="slike/cart.png" alt="cart" style="width:30px;height:30px;"></a>
			<a href="kosara.html" class="cart-text">Košarica</a>
		</div>	
	</div>
</div>