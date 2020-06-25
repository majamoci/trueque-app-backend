<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/d3.min.js') }}"></script>
    <script src="{{ asset('js/getmdl-select.min.js') }}"></script>
    <script src="{{ asset('js/material.min.js') }}"></script>
    <script src="{{ asset('js/nv.d3.min.js') }}"></script>
    <script src="{{ asset('js/layout/layout.min.js') }}"></script>
    <script src="{{ asset('js/scroll/scroll.min.js') }}"></script>
    <script src="{{ asset('js/widgets/charts/discreteBarChart.min.js') }}"></script>
    <script src="{{ asset('js/widgets/charts/linePlusBarChart.min.js') }}"></script>
    <script src="{{ asset('js/widgets/charts/stackedBarChart.min.js') }}"></script>
    <script src="{{ asset('js/widgets/employer-form/employer-form.min.js') }}"></script>
    <script src="{{ asset('js/widgets/line-chart/line-charts-nvd3.min.js') }}"></script>
    <script src="{{ asset('js/widgets/map/maps.min.js') }}"></script>
    <script src="{{ asset('js/widgets/pie-chart/pie-charts-nvd3.min.js') }}"></script>
    <script src="{{ asset('js/widgets/table/table.min.js') }}"></script>
    <script src="{{ asset('js/widgets/todo/todo.min.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/lib/getmdl-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lib/nv.d3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/application.min.css') }}">
</head>
<body>
    <!-- id="app" inyecta vue components -->
    <div id="app">
        @yield('content')
    </div>
</body>
</html>
