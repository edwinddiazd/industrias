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
            <div class="mdl-cell mdl-cell--2-col-offset mdl-cell--8-col">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin-left: 40px;">
                            <input class="mdl-textfield__input" type="text" id="user_input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            <label class="mdl-textfield__label" for="user_input">Usuario</label>
                            <span class="mdl-textfield__error">Debes ingresar tu correo</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin-left: 40px;">
                            <input class="mdl-textfield__input" type="password" id="pwd_input" pattern=".{6,}">
                            <label class="mdl-textfield__label" for="pwd_input">Password</label>
                            <span class="mdl-textfield__error">El password debe tener al menos 6 caracteres</span>
                        </div>
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--4-col">
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--primary">Ingresar</button>
                            </div>
                            <div class="mdl-cell mdl-cell--8-col-offset mdl-cell--4-col" style="margin-left: 15%;">
                            <button class="mdl-button mdl-js-button mdl-button--accent">
                            <a href="Registro" style="text-decoration: none;">Registrarse</a>
                            </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <div class="mdl-layout-spacer"></div>
    </div>
@endsection
