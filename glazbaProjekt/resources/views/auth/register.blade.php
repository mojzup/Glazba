@extends('layouts.masters.main')
@section('page-content')

<div id ="logosr"><a href="{!! route('home') !!}"><img src="{{ asset('slike/logo1.png') }}" alt="Glazba" ></a></div>


	<div class="containerPri flex-col">
		<div class="PpriReg flex-row">
			{!!link_to_route('get_login', 'Prijava', null, array('id' => 'gRegistracija', 'class' => 'PpriRegBut')); !!}
			{!!link_to_route('get_register', 'Registracija', null, array('id' => 'gPrijava', 'class' => 'PpriRegBut')); !!}
		</div>
		<div id="prijavi">
		{!! Form::open(['route' => 'post_register', 'id' => 'registration-form'])!!}
			{!! Form::text('uname', null, [ 'class' => ' polje', 'placeholder' => 'Izberi uporabniško ime', 'required' ] )!!}
			{!! Form::email('mail', null, ['class' => 'polje', 'placeholder' => 'Vnesi e-poštni naslov', 'required' ] )!!}
			{!! Form::password('psw', [ 'class' => ' polje', 'placeholder' => 'Izberi geslo', 'required' ] )!!}
			{!! Form::button('Registriraj se', ['class' => 'gumb oranzen prij', 'type' => 'submit' ] )!!}
			{!! Form::close()!!}
		</div>
	</div>

@stop
