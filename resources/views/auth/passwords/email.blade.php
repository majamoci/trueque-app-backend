@extends('layouts.app')

@section('content')
<div class="mdl-layout mdl-js-layout color--gray is-small-screen login">
  <main class="mdl-layout__content">
    <div class="mdl-card mdl-card__login mdl-shadow--2dp">
      <div class="mdl-card__supporting-text color--dark-gray">
        <div class="mdl-grid">
          <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
              <span class="mdl-card__title-text text-color--smooth-gray">
                {{ __('Sistema de Intercambio Digital') }}
              </span>
            </div>
            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
              <span class="login-name text-color--white">{{ __('Olvidó la contraseña') }}</span>
              <span class="login-secondary-text text-color--smoke">
                {{ __('Ingrese su correo electrónico para recibir un enlace de recuperación') }}
              </span>
            </div>
            @if (session('status'))
            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
              <span class="color-text--red">{{ session('status') }}</span>
            </div>
            @endif

            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                <input id="email" type="email" class="mdl-textfield__input"
                  name="email" value="{{ old('email') }}" type="email" required autofocus>
                <label class="mdl-textfield__label" for="email">
                  {{ __('Correo Electrónico') }}
                </label>

                @error('email')
                <span class="color-text--red">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
              <div class="mdl-layout-spacer"></div>
              <button type="submit" class="mdl-button mdl-js-button mdl-button--raised color--light-blue">
                Solicitar correo de recuperación
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
</div>
@endsection
