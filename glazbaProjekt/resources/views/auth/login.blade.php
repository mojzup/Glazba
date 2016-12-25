@extends('layouts.masters.main')
@section('page-content')

<div id ="logosr"><a href="{!! route('home') !!}"><img src="{{ asset('slike/logo1.png') }}" alt="Glazba" ></a></div>


	<div class="containerPri flex-col">
		<div class="PpriReg flex-row">
			{!!link_to_route('get_login', 'Prijava', null, array('id' => 'gPrijava', 'class' => 'PpriRegBut')); !!}
			{!!link_to_route('get_register', 'Registracija', null, array('id' => 'gRegistracija', 'class' => 'PpriRegBut')); !!}
		</div>
		<div id="prijavi">
		{!! Form::open(['route' => 'post_login', 'id' => 'login-form'])!!}
			{!! Form::text('uname', null, [ 'class' => ' polje', 'placeholder' => 'Vnesi uporabniško ime', 'required' ] )!!}
			{!! Form::password('psw', [ 'class' => ' polje', 'placeholder' => 'Vnesi geslo', 'required' ] )!!}
			{!! Form::button('Prijavi se', ['class' => 'gumb oranzen prij', 'type' => 'submit' ] )!!}
			{!! Form::close()!!}
		</div>
	</div>

@stop
