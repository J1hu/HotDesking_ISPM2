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
<body style="background-color: #F4EFEB;">
    <div id="app">
            @include('layouts.include.homenavbar')
        <main>
            <div class="">
                <div class="mask d-flex align-items-center h-50">
                    <div class="container">
                    <h1 class="col text-center">Help Center</h1>
                        <div class="row">
                        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                            <div class="card mb-2">
                            <div class="card-body p-2">
                                <div class="input-group input-group-lg">
                                <input type="text" class="form-control form-control-lg rounded" placeholder="Search"
                                    aria-label="Search" aria-describedby="basic-addon2" />
                                <span class="input-group-text border-0" id="basic-addon2"><i class="fas fa-search"></i></span>
                                </div>
                            </div>
                            </div>
                <p> Get started in using our website through our help center. If you need <br> any help, feel free to contact our support team.</p>
            </div>
        </main>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</html>