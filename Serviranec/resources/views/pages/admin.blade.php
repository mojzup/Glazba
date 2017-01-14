@extends('layouts.masters.main')
@section('page-content')
@include('layouts.partials.navadmin')
		<div class="domacaAdmin">
				<div class="razdelek">
				<h3>Izdelki</h3>
				<form><input type="search" name="iskalnik" class="polje"><a href="" class="gumb oranzen">Išči</a></form>
				<a class="gumb modr admin" href="{{ url('/adminzbirka') }}">Vsi izdelki</a>
				<a class="gumb svmodr admin" href="{{ url('/artikelnov') }}">Nov izdelek</a>
				</div>
			<div class="razdelek">
				<h3>Naročila</h3>
				<a href="{{ url('/narocila') }}"  class="gumb modr admin">Tekoča naročila</a>

			</div>
		</div>
		@include('layouts.partials.foot')
@stop