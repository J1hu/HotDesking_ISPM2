<nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color: #27231E;">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images/hot-desk-icon.png') }}" width="30" height="30" alt="">
          ホットデスク Hot Desk
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarNavDropdown" style="">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Book a desk
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Reservation</a>
                    <a class="dropdown-item bg-warning" href="#">Calendar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Get help
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Privacy Disclaimer</a>
                    <a class="dropdown-item" href="#">User Guide</a>
                    <a class="dropdown-item" href="#">FAQs</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('images/hot-desk-icon.png') }}" width="30" height="30" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-right col-md" aria-labelledby="navbarDropdownMenuLink">
                    <div class="container">
                        <div class="row mb-3 mx-auto">
                            <img src="{{ asset('images/hot-desk-icon.png') }}" alt="..." class="rounded-circle" width="100" height="100">
                        </div>
                        <div class="row">
                            <p class="username mb-0 text-center" id="username">Rengoku Kyoujiro</p>
                            <p class="email text-warning text-center" id="email">ISPM - Group 1</p>
                        </div>
                    </div>
                    
                    <button type="button" class="btn btn-danger btn-block">Logout</button>
                </div>
            </li>
        </ul>
    </div>
</nav>