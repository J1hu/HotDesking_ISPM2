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
            @include('layouts.include.navbar')
        <main>
                <div class="container d-flex justify-content-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis pellentesque lacus. Praesent et est ut turpis aliquet tempor non ac libero. Mauris pellentesque venenatis lectus, id mollis diam euismod quis. Aliquam non tempus enim, et convallis turpis. Mauris eleifend luctus arcu quis eleifend. Suspendisse potenti. Proin rutrum, sem quis tristique lacinia, justo nisi rhoncus nunc, vel fermentum mauris tortor a nulla. Nulla facilisi. Nulla in neque dolor. Integer faucibus sit amet odio at fermentum. Maecenas elementum enim varius odio consequat, sit amet scelerisque felis finibus. Sed varius, quam vel sodales eleifend, justo erat consectetur ante, a dignissim lectus sapien consectetur ante. In ex nunc, laoreet eget elementum a, ultrices eget felis. Integer tortor libero, cursus ut nisi quis, auctor iaculis est.
                                Nam sit amet cursus nisl, et imperdiet ipsum. Fusce eu commodo metus. Morbi molestie, odio vitae feugiat commodo, felis mauris venenatis odio, et pulvinar velit augue vel ligula. Mauris quis sem id eros ullamcorper blandit id vulputate ipsum. Sed lacus metus, iaculis sed facilisis auctor, condimentum in tellus. Praesent ac cursus libero. Pellentesque a interdum magna.
                                Vestibulum neque tortor, viverra a facilisis eget, volutpat et metus. Nunc vulputate dapibus bibendum. Integer egestas dolor vel odio ornare interdum. Etiam egestas eleifend mauris. Ut venenatis libero in ipsum eleifend, eget tempor dui venenatis. Donec finibus feugiat erat vitae suscipit. Curabitur eleifend odio ligula, in posuere dui sodales sit amet. Aliquam ex lectus, semper ac massa eget, sagittis aliquet nisi. Donec scelerisque finibus tempus.
                                In convallis velit et tincidunt ornare. Sed congue augue mi, eu mattis urna blandit ac. Morbi semper vehicula turpis, nec scelerisque enim tincidunt id. Phasellus semper leo sed odio vestibulum malesuada. Suspendisse quis cursus nisl. Nam nec est nec massa gravida tristique fermentum at nisl. Quisque sit amet tellus non nunc sagittis facilisis. Suspendisse fringilla nibh eget mauris porttitor, sit amet consectetur dolor elementum. Vivamus sit amet neque risus. Sed libero enim, imperdiet non nunc eget, molestie consequat massa. Nulla quis dolor a augue scelerisque accumsan. Praesent turpis elit, vulputate vitae dolor nec, tristique scelerisque felis. Nam vitae enim ipsum. Curabitur vestibulum tristique venenatis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas a faucibus urna, id ultrices nibh.
                                Praesent fermentum, magna maximus lobortis imperdiet, tortor leo euismod tellus, in mollis tortor orci ut massa. Praesent fermentum felis facilisis cursus porta. In turpis metus, malesuada a ante quis, luctus consectetur neque. Nulla rutrum nulla est, sed sagittis massa condimentum a. Ut lobortis elementum dolor, ut vestibulum elit mattis aliquet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pellentesque urna ac nisi convallis molestie.
                                Vestibulum in tincidunt ligula, eget fermentum arcu. Maecenas sed ligula ac nibh malesuada lacinia. Duis cursus faucibus nunc, quis sagittis libero pharetra in. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam pharetra interdum felis, at semper dolor rhoncus nec. Proin vulputate ex metus. Phasellus scelerisque lorem massa. Nullam urna urna, mollis sit amet arcu eget, ornare venenatis magna. Nunc sodales, nisi iaculis porta malesuada, orci leo blandit magna, ac dignissim mi arcu efficitur enim. Ut ultricies enim vitae nisl sodales, gravida imperdiet lorem pulvinar. Mauris posuere auctor aliquam.
                        </p>
                </div>
        </main>
            @include('layouts.include.footer')
        </div>

    </body>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    
</html>