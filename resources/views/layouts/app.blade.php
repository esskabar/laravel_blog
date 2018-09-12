<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta name="description" content="@yield('meta_description')">
    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @include('layouts.header')

        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h2 class="border-bottom text-center">Standart Vue+laravel</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr2"><a class="btn btn-secondary" href="#1">Example component</a></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="owl-carousel owl-theme mt-5">
                            <div class="row m-2" data-hash="1">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2 class="text-center" style="min-height: 300px">
                                                #1 Example Component
                                            </h2>
                                            <example-component></example-component>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')


        </main>


    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
