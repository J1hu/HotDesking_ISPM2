<nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color: #27231E;">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/hot-desk-icon.png') }}" width="30" height="30" alt="">
          ホットデスク Hot Desk
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarNavDropdown" style="">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active mr-5">
                <a class="nav-link active" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Features
                </a>
            </li>
            <li class="nav-item dropdown active mr-5">
            <a class="nav-link dropdown-toggle" href="{{ url('support') }}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Get help
            </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ url('support') }}">Support</a>
                    <a class="dropdown-item" href="{{ url('privacy') }}">Privacy Disclaimer</a>
                    <a class="dropdown-item" href="#">User Guide</a>
                    <a class="dropdown-item" href="{{ url('faqs') }}">FAQs</a>
                </div>
            </li>

                <li class="nav-item mr-5">
                    <a class="btn btn-warning" role="button" aria-haspopup="true" aria-expanded="false" href="{{ url('login') }}">
                    Log In
                    </a>
                </li>     
        </ul>
    </div>
</nav>
