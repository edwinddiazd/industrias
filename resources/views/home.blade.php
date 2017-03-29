@extends('main')

@section('content')
<div class="mdl-grid">
    <div class="mdl-layout-spacer"></div>
    <div class="mdl-cell mdl-cell--4-col-offset mdl-cell--5-col mdl-shadow--3dp mdl-color--grey-100" style="margin-top: 10%;">
        <div class="mdl-layout-spacer "></div>
        <div class="mdl-color--indigo-A700" style="padding-top: 10px;padding-bottom: 10px;padding-left: 10px;">
            <span class="mdl-layout-title mdl-color-text--white">Bienvenido</span>
            <div class="mdl-layout-spacer"></div>
        </div>
            <div class="mdl-grid">
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-cell mdl-cell--4-col">
                    <a href="{{ url('/login') }}" style="text-decoration: none;"><button class="mdl-button mdl-js-button mdl-button--primary">Ingresar</button></a>
                </div>
                <div class="mdl-cell mdl-cell--4-col">                
                <a href="{{ url('/register') }}" style="text-decoration: none;"><button class="mdl-button mdl-js-button mdl-button--accent">Registrarse</button></a>
                </div>
                <div class="mdl-layout-spacer"></div>
            </div>
    </div>
    <div class="mdl-layout-spacer"></div>
</div>
    
@endsection
