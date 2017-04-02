@extends('main')

@section('content')

<div class="mdl-grid">
    <div class="mdl-layout-spacer"></div>
    <div class="mdl-cell mdl-cell--4-col-offset mdl-cell--5-col mdl-shadow--3dp mdl-color--grey-100" style="margin-top: 10%;">
        <div class="mdl-layout-spacer "></div>
        <div class="mdl-color--indigo-A700" style="padding-top: 10px;padding-bottom: 10px;padding-left: 10px;">
            <span class="mdl-layout-title mdl-color-text--white">Reg&iacute;strate</span>
            <div class="mdl-layout-spacer"></div>
        </div>
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col-offset mdl-cell--8-col">
                    <form role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin-left: 40px;">
                            <input class="mdl-textfield__input" type="text" id="name" name="name" value="{{ old('name') }}">
                            <label class="mdl-textfield__label" for="name">Nombre y Apellido</label>
                            <span class="mdl-textfield__error">Inserte un nombre y apellido v&aacute;lidos</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin-left: 40px;">
                            <input class="mdl-textfield__input" type="text" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            <label class="mdl-textfield__label" for="email" name="email">E-mail (este sera su usuario)</label>
                            <span class="mdl-textfield__error">Debes ingresar tu correo</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin-left: 40px;">
                            <input class="mdl-textfield__input" type="password" id="password" name="password" pattern=".{6,}">
                            <label class="mdl-textfield__label" for="password" name="password">Password</label>
                            <span class="mdl-textfield__error">El password debe tener al menos 6 caracteres</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin-left: 40px;">
                            <input id="password-confirm" type="password" class="mdl-textfield__input" name="password_confirmation" pattern=".{6,}">
                            <label class="mdl-textfield__label" for="password" name="password">Password</label>
                            <span class="mdl-textfield__error">El password no coincide</span>
                        </div>
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--4-col">
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--primary">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <div class="mdl-layout-spacer"></div>
    </div>
@endsection
