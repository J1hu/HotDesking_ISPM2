<nav class="navbar navbar-expand-sm sticky-top navbar-dark" style="background-color: #27231E;">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/hot-desk-icon.png') }}" class="rounded-circle" width="30" height="30" alt="">
         Hot Desk
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarNavDropdown" style="">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-4">
                <a class="nav-link" href="{{ url('/#features') }}">
                Features
                </a>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="{{ url('support') }}" >Get help</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-warning" role="button" aria-haspopup="true" aria-expanded="false" href="{{ url('login') }}">
                Log In
                </a>
            </li>     
        </ul>
    </div>
</nav>