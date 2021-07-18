 <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="{{ url('/') }}" class="logo-img"><img src="{{ asset('public') }}/img/logo.png" alt="logo"> </a>
                        <a href="{{ url('/') }}" class="scroll-logo"><img src="{{ asset('public') }}/img/scroll-logo.png" alt="logo"> </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/service') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/team') }}">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/testimonial') }}">Testimonial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="search"><input type="text" placeholder="Search">
                    </div>
                </div>
            </div>
        </div>
    </div>