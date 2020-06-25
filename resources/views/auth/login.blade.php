@extends('layouts.app')

@section('content')
<div class="mdl-layout mdl-js-layout color--gray is-small-screen login">
  <main class="mdl-layout__content">
    <div class="mdl-card mdl-card__login mdl-shadow--2dp">
      <div class="mdl-card__supporting-text color--dark-gray">
        <div class="mdl-grid">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
              <span class="mdl-card__title-text text-color--smooth-gray">
                {{ __('Sistema de Intercambio Digital') }}
              </span>
            </div>
            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
              <span class="login-name text-color--white">{{ __('Ingreso') }}</span>
              <span class="login-secondary-text text-color--smoke">
                {{ __('Complete los campos') }} *
              </span>
            </div>
            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                <input type="text" name="email" id="email" value="{{ old('email') }}" required
                  class="mdl-textfield__input @error('email') is-invalid @enderror">
                <label class="mdl-textfield__label" for="email">
                  {{ __('Correo Electrónico') }} *
                </label>

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                <input id="password" type="password" name="password" required
                  class="mdl-textfield__input @error('password') is-invalid @enderror">
                <label class="mdl-textfield__label" for="password">{{ __('Contraseña') }} *</label>

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="col-md-6 offset-md-4">
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="remember">
                  <input type="checkbox" id="remember" type="checkbox" name="remember" class="mdl-checkbox__input"
                    {{ old('remember') ? 'checked' : '' }}>
                  <span class="mdl-checkbox__label">{{ __('Recordarme') }}</span>
                </label>
              </div>
            </div>
            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
              @if (Route::has('password.request'))
              <a class="login-link" href="{{ route('password.request') }}">
                {{ __('¿Olvidó la contraseña?') }}
              </a>
              @endif
              <div class="mdl-layout-spacer"></div>
              <button type="submit"
                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect color--light-blue">
                {{ __('Ingresar') }}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
</div>
@endsection
