@extends('home')

@section('admin')
<main class="mdl-layout__content ">
  <div class="mdl-grid ui-tables">
    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
      <div class="mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title">
          <h1 class="mdl-card__title-text">{{  __('Usuarios') }}</h1>
        </div>
        <div class="mdl-card__supporting-text no-padding">
          <table class="mdl-data-table mdl-js-data-table">
            <thead>
              <tr>
                <th class="mdl-data-table__cell--non-numeric">#</th>
                <th class="mdl-data-table__cell--non-numeric">Usuario</th>
                <th class="mdl-data-table__cell--non-numeric">Nombres</th>
                <th class="mdl-data-table__cell--non-numeric"># Publicaciones</th>
                <th class="mdl-data-table__cell--non-numeric">Actividad</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($usuarios as $usuario)
              <tr>
                <td class="mdl-data-table__cell--non-numeric">{{ $usuario->id }}</td>
                <td class="mdl-data-table__cell--non-numeric">{{ $usuario->name }}</td>
                <td class="mdl-data-table__cell--non-numeric">Jerson Morocho</td>
                <td class="mdl-data-table__cell--non-numeric">2016</td>
                <td class="mdl-data-table__cell--non-numeric">
                  <span class="label label--mini label__availability background-color--primary"></span>
                  <span class="label label--mini label__availability background-color--primary"></span>
                  <span class="label label--mini label__availability background-color--primary"></span>
                  <span class="label label--mini label__availability background-color--primary"></span>
                  <span class="label label--mini label__availability"></span>
                </td>
                <td class="mdl-data-table__cell--non-numeric">
                  <a class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect"
                    href="{{ route('usuarios.show', $usuario->name) }}">
                    <i class="material-icons">analytics</i>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
