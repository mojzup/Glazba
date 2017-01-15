@extends('layouts.masters.main')
@section('page-content')
	@include('layouts.partials.nav')
	@include('layouts.partials.nav2')		
		<div class="body">	
			<h2>Nastavitve</h2>
			<div class="seznam nastavitve flex-col">
			
				<h3>Spremeni prikazno sliko</h3>
				<div class="flex-row">
		  			<img src="/slike/avatarji/{{ $user->imagePath}}" style="width:150px; height:150px;">
		  			<form enctype="multipart/form-data" action="{{ URL::to("nastavitve/$user->name") }}" method="POST">
		  			{!! csrf_field() !!}
		  			<input type="file" name="prikazna">	
	  			</div>
				<h3>Spremeni geslo</h3>
				<label>Novo geslo</label>
				<input type="password" placeholder="Vnesi geslo" name="psw" class="polje nastavitve" >
				<label>Potrdi geslo</label>
				<input type="password" placeholder="Vnesi geslo" name="conpsw" class="polje nastavitve" >
				<h3>Spremeni naslov</h3>
				 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label>Ime Priimek</label>
                            <input type="text"  name="imepriimek" value="{{ $errors->has('imepriimek') ? '' : $user->imepriimek }} " class="polje nastavitve"" >

                            @if ($errors->has('imepriimek'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('imepriimek') }}</strong>
                                </span>
                            @endif
                       
                    </div>
				 <div class="form-group{{ $errors->has('ulica') ? ' has-error' : '' }}">
                        <label>Ulica in hišna številka</label>
                            <input type="text"  name="ulica" value="{{ $errors->has('ulica') ? '' : $user->ulica }}" class="polje nastavitve" >

                            @if ($errors->has('ulica'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('ulica') }}</strong>
                                </span>
                            @endif
                       
                    </div>
				<div class="form-group{{ $errors->has('posta') ? ' has-error' : '' }}">
                        <label>Pošta in poštna številka</label>
                            <input type="text"  name="posta" value="{{ $errors->has('posta') ? '' : $user->posta }}" class="polje nastavitve" >

                            @if ($errors->has('posta'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('posta') }}</strong>
                                </span>
                            @endif
                       
                    </div>
						<div class="form-group{{ $errors->has('drzava') ? ' has-error' : '' }}">
                        <label>Država</label>
                            <input type="text"  name="drzava" value="{{ $errors->has('drzava') ? '' : $user->drzava }}" class="polje nastavitve" >

                            @if ($errors->has('drzava'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('drzava') }}</strong>
                                </span>
                            @endif
                       
                    </div>
				<h3>Spremeni podatke o plačilni kartici</h3>
				<div class="form-group{{ $errors->has('KREDnosilec') ? ' has-error' : '' }}">
                        <label>Ime nosilca</label>
                            <input type="text"  name="KREDnosilec" value="{{ $errors->has('KREDnosilec') ? '' : $user->KREDnosilec }}" class="polje nastavitve" >

                            @if ($errors->has('KREDnosilec'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('KREDnosilec') }}</strong>
                                </span>
                            @endif
                       
                    </div>
				<label>Številka kartice</label>
				<input type="text" value="{{ $user->KREDstevilka}}" name="KREDstevilka" class="polje nastavitve" >
					<div class="form-group{{ $errors->has('KREDstevilka') ? ' has-error' : '' }}">
                        <label>Številka kartice</label>
                            <input type="text"  name="KREDstevilka" value="{{ $errors->has('KREDstevilka') ? '' : $user->KREDstevilka }}" class="polje nastavitve" >

                            @if ($errors->has('KREDstevilka'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('KREDstevilka') }}</strong>
                                </span>
                            @endif
                       
                    </div>
				<label>Veljavno do</label>
				<div class="flex-row"><input type="text" value="{{ $user->KREDmesec}}" name="KREDmesec" class="polje nastavitve" >/
				<input type="text" value="{{ $user->KREDleto}}" name="KREDleto" class="polje nastavitve" ></div>
				<label>Varnostna koda</label>
				<input type="text" value="{{ $user->KREDvarnost}}" name="KREDvarnost" class="polje nastavitve" >
				<input type="hidden" name="_token" value="{{csrf_token()}}">
		  		<input type="submit" class="gumb modr nastavitve" value="Shrani">
				</form>
			</div>
		</div>
		@include('layouts.partials.foot')
@stop	