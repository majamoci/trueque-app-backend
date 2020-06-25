@extends('home')

@section('admin')
<main class="mdl-layout__content ">
  <div class="mdl-grid ui-tables">
    <div class="mdl-cell mdl-cell--7-col-desktop mdl-cell--7-col-tablet mdl-cell--12-col-phone">
      <div class="mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title">
          <h1 class="mdl-card__title-text">{{ $usuario->name }}</h1>
        </div>

        <div class="mdl-card__supporting-text">
          <div class="form__article">
            <h3>Información</h3>
            <div class="mdl-grid">
              <div class="mdl-cell mdl-cell--4-col">
                <p class="headline">Nombres</p>
                <span>{{ $usuario->name }}</span>
              </div>
              <div class="mdl-cell mdl-cell--4-col">
                <h6>Usuario</h6>
                <span>{{ $usuario->name }}</span>
              </div>
              <div class="mdl-cell mdl-cell--4-col">
                <h6>E-mail</h6>
                <span>{{ $usuario->email }}</span>
              </div>
            </div>
            <h3>Acciones</h3>
            <div class="mdl-grid">
              <div class="mdl-cell mdl-cell--12-col">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                  Accion 1
                </button>
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                  Accion 2
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mdl-cell mdl-cell--5-col-desktop mdl-cell--5-col-tablet mdl-cell--12-col-phone">
      <div class="mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title">
          <h1 class="mdl-card__title-text">{{ __('Detalles') }}</h1>
        </div>

        <div class="mdl-card__supporting-text no-padding">
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
              <h6>Actividad</h6>
              <ul class="mdl-list pull-left">
                <li class="mdl-list__item">
                  <div id="reputation1" class="mdl-progress mdl-js-progress progress--colored-red"></div>
                  <span>&nbsp; Intercambios realzados</span>
                </li>
                <li class="mdl-list__item">
                  <div id="reputation2" class="mdl-progress mdl-js-progress progress--colored-red"></div>
                  <span>&nbsp; Intercambios realzados</span>
                </li>
                <li class="mdl-list__item">
                  <div id="reputation3" class="mdl-progress mdl-js-progress progress--colored-red"></div>
                  <span>&nbsp; Intercambios realzados</span>
                </li>
              </ul>
            </div>
            <div class="mdl-cell mdl-cell--6-col">
              <h6># Publicaciones</h6>
              <span>{{ $usuario->name }}</span>
            </div>
            <div class="mdl-cell mdl-cell--6-col">
              <h6>Reputación</h6>
              <span>{{ $usuario->name }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
