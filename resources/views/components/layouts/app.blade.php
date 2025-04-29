<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ARCAPT SCHOOL | @yield('title')</title>


        <link href="{{ asset('adminlte3/dist/img/logo.png') }}" rel="icon">
        <link href="{{ asset('adminlte3/dist/img/logo.png') }}" rel="apple-touch-icon">

        @include('components.layouts.style')
        @livewireStyles

    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            @include('components.layouts.navbar')

            @include('components.layouts.sidebar')

            @yield('content')

            @include('components.layouts.footer')

        </div>

        @include('components.layouts.script')
        @livewireScripts

    </body>
</html>
