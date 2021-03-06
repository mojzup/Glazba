@extends('layouts.masters.main')
@section('page-content')
		<div class="blagajnaglava"><a href="{{route('home')}}"><img src="slike/logo1.png" width="194.6px" height="81.3px" alt="Glazba" class ="logo blagajna"></a>	
			<h2>Blagajna</h2>
		</div>
		<div class="blagajna">
			<div id="charge-error" {{!Session::has('error') ? 'hidden' : ''}}>{{ Session::get('error')}}</div>
			<form action="{{ route('checkout')}}" method="post" id="checkout-form">
				<div class ="blagajna2">
					<label class="blagajna-naslov">Povzetek nakupa</label>
					<div class="blagajnaPovzetek">
					@foreach($products as $product)
						<div class="blagajnaArtikel">
							<label>{{$product['item']['ime']}}</label>
							<label>Cena: {{$product['item']['cena']}}€</label>
						</div>
					@endforeach
				</div>
					<label class="blagajna-naslov">Naslov za dostavo</label>
					<div class="blagajnaPovzetek">
						<label>Ime Priimek</label>
						<input type="text" value="{{ $user->imepriimek}}" name="name" class="polje" required>
						<label>Ulica in hišna številka</label>
						<input type="text"  value="{{ $user->ulica}}" name="address" class="polje" required>
						<label>Pošta in poštna številka</label>
						<input type="text" value="{{ $user->posta}}" name="posta" class="polje" required>
						<label>Država</label>
						<input type="text" value="{{ $user->drzava}}" name="uname" class="polje" required>
					</div>
					<label class="blagajna-naslov">Podatki o plačilni kartici</label>
					<div class="blagajnaPovzetek">
						<label>Ime nosilca</label>
						<input type="text" value="{{ $user->KREDnosilec}}"  id="card-name" name="uname" class="polje" required>
						<label>Številka kartice</label>
						<input type="text" value="{{ $user->KREDstevilka}}" name="uname" id="card-number" class="polje" required>
						<label>Veljavno do</label>
						<div class="flex-row"><input type="text" value="{{ $user->KREDmesec}}" name="uname" id="card-expiry-month" class="polje" required>/
						<input type="text" value="{{ $user->KREDleto}}" name="uname" id="card-expiry-year" class="polje" required></div>
						<label>Varnostna koda</label>
						<input type="text" value="{{ $user->KREDvarnost}}" id="card-cvc" name="uname" class="polje" required>	
					</div>
				</div>
				<div class="flex-col kosaricaSkupaj blagajna">
					<div class="kosaricaSkupajLab2">
						<label class="kosaricaSkupajLab blag">Skupaj</label> 
						<label class="kosaricaSkupajLab cena blag">{{$total}}€</label>
					</div>
					{{ csrf_field() }}
					<button type="submit" class="gumb modr blag druga">Potrdi in plačaj</button>
				</div>
			</form>
		</div>
@stop
@section('scripts')
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script type="text/javascript" src="{{ URL::to('js/checkout.js')}}"></script>
@stop