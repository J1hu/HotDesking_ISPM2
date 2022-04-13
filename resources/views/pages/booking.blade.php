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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
    <body>
        <div id="app">
            @include('layouts.include.homenavbar')
        <main>
        <div class="row">

            <!--LEFT SIDE -->
            <section class="w-50" style="background-color:#F4EFEB">
                    <h1 class="mb-1 py-5 ml-5 pl-5"> Desk Reservation</h1>
                    <form class="ml-5 pl-5 mr-5 pr-5">
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label for="inputLocation4">Select desk location:</label>
                                <input type="text" class="form-control rounded border border-dark" id="inputEmail4">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputDate4">Select date:</label>
                                <input type="date" class="form-control rounded border border-dark" id="inputPassword4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Select start time:</label>
                                <input type="email" class="form-control rounded border border-dark" id="inputEmail4">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Select end time:</label>
                                <input type="password" class="form-control rounded border border-dark" id="inputPassword4">
                            </div>
                        </div>
                        <div class="d-flex">
                                <p class="opacity-50 p-1 font-italic">Due to strict implementation of health guidelines and safety protocols,<br> some seats may currently be unavailable for reservation.</p>
                            <div class="ml-auto p-2">
                                <button type="submit" class="btn btn-lg btn-warning text-white">Reserve desk</button>
                            <div>
                        </div>
                    </form>
            </section>
            
             <!--RIGHT SIDE -->
            <section class="w-50">
                <div class="col-md-8">
                    <div class="w-150 h-150 mb-1 py-5 ml-3 pl-5">
                        <img src="{{ asset('images/desk-map.png') }}" class=" img-fluid" alt="Responsive image">  
                    </div>  

                </div>
            </section>
            </div>
        </div>
        </main>
        @include('layouts.include.footer')
        </div>
    </body>