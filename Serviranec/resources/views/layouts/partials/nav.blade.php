<div class="header">
	<div class="glavca flex-center">
		<div class="block"><a href="{{ url('/') }}"><img src="/slike/logo2.png" alt="Glazba"></a></div>
		<div class="search-box flex-row">
	
			<div class="stretch"><input type="search" name="iskalnik" id="serc" class="polje" onkeydown="down()" onkeyup="up()"><a href=""></a></div>
			<div class="normal"><input type="image" src="/slike/magglass.png" alt="Išči" class="gumb oranzen"/></div>

		</div>
		<div class="block prij"> 
			  @if (Auth::guest())
                            <a href="{{ url('/login') }}">Prijava</a>
                            <label>|</label>
                            <a href="{{ url('/register') }}">Registracija</a>
                        @else
                             <li class="dropdown">
                             <?php $user = Auth::user();?>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pozdravljena, {{ Auth::user()->name }} <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/zgodovina') }}">Zgodovina</a></li>
                                <li><a href="{{ URL::to("nastavitve/$user->name") }}">Nastavitve</a></li>
                                    <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Odjava</a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
		</div>				
	</div>
	<div class="glavca meni">
		<div class="block"></div>
		<div class="block2">
			<a href="{{ url('/zbirka') }}" >Zbirka</a>
			<a href="{{ url('/izvajalci') }}" >Izvajalci</a>
		</div>
		<div class = "block index-kosarica flex-row">
			<a href="{{ url('/kosarica') }}" class="cart"><img src="/slike/cart.png" alt="cart" style="width:30px;height:30px;"></a>
			<a href="{{ url('/kosarica') }}" class="cart-text">Košarica ({{Session::has('cart') ? Session::get('cart')->totalQty : '0'}})</a>
		</div>	
	</div>
</div>