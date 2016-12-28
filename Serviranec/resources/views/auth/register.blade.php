@extends('layouts.masters.main')
@section('page-content')
        <div id ="logosr"><a href="{{ url('/') }}"><img src="slike/logo1.png" alt="Glazba"></a></div>
        <div class="containerPri flex-col">
            <div class="PpriReg flex-sp-around">
                <a href="{{ url('/login') }}" id="gRegistracija">Prijava</a>
               <a href="{{ url('/register') }}" id="gPrijava">Registracija</a>
            </div>
            <div id="prijavi">
                <form role="form" method="POST" action="{{ url('/register') }}">
                {!! csrf_field() !!}
                     <input id="name" type="text" class="polje" placeholder="Izberi uporabniško ime" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    <input id="email" type="email" class="polje" name="email" placeholder="Vnesi e-poštni naslov" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    <input id="password" type="password" class="polje" placeholder="Izberi geslo" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                     <input id="password-confirm" type="password" class="polje" placeholder="Potrdi geslo" name="password_confirmation" required>
                    <input type="submit" value="Registriraj se" class="gumb oranzen prij">
                
                </form>
            </div>
        </div>
@stop
