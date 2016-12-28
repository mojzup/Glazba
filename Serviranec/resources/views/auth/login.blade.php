@extends('layouts.masters.main')
@section('page-content')
        <div id ="logosr"><a href="{{ url('/') }}"><img src="slike/logo1.png" alt="Glazba"></a></div>
        <div class="containerPri flex-col">
            <div class="PpriReg flex-sp-around">
                <a href="{{ url('/login') }}" id="gPrijava">Prijava</a>
               <a href="{{ url('/register') }}" id="gRegistracija">Registracija</a>
            </div>
            <div id="prijavi">
                <form role="form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}
                    <input id="email" type="email" class="polje" name="email" placeholder="Vnesi e-poštni naslov" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                     <input id="password" type="password" class="polje" name="password" placeholder="Vnesi geslo" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    <input type="submit" value="Prijavi se" class="gumb oranzen prij">
                    <div class="Ppri2 flex-sp-between">
                        <p class="keeplogin"><input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" checked="checked">
                        <label for="loginkeeping">Zapomni si me</label>
                        <p class="pozGeslo"><a href="{{ url('/password/reset') }}">Pozabljeno geslo?</a>
                    </div>
                </form>
            </div>
        </div>
@stop