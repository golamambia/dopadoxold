@extends('layouts.app')

@section('content')
 <div class="header privacy-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('public') }}/img/form-logo.png" alt="logo"> </a>
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
<div class="inner-page">
        <div class="team-page">
            <div class="container">
                <h1>MEET<br>
                    OUR TEAM</h1>
                    <ul class="team row">
                        <li class="col-lg-3 col-md-3">
                            <div class="hldrr"><div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                            <h3>Lorem ipsum</h3>
                            <p>Lorem ipsum</p></div>
                        </li>
                        <li class="col-lg-3 col-md-3">
                            <div class="hldrr"><div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                            <h3>Lorem ipsum</h3>
                            <p>Lorem ipsum</p></div>
                        </li>
                        <li class="col-lg-3 col-md-3">
                            <div class="hldrr"><div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                            <h3>Lorem ipsum</h3>
                            <p>Lorem ipsum</p></div>
                        </li>
                        <li class="col-lg-3 col-md-3">
                            <div class="hldrr"><div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                            <h3>Lorem ipsum</h3>
                            <p>Lorem ipsum</p></div>
                        </li>
                    </ul>
            </div>
        </div>
        <div class="team-list">
            <h2><span>DEVELOPER</span></h2>
            <div class="container">
                <ul>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="team-list">
            <h2><span>UI / UX</span></h2>
            <div class="container">
                <ul>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="team-list">
            <h2><span>GRAPHIC DESIGNER</span></h2>
            <div class="container">
                <ul>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="team-list">
            <h2><span>ANIMATOR</span></h2>
            <div class="container">
                <ul>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="team-list">
            <h2><span>CONTENT WRITER</span></h2>
            <div class="container">
                <ul>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="team-list">
            <h2><span>TESTER</span></h2>
            <div class="container">
                <ul>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="team-list">
            <h2><span>DATA ENTRY EXECUIVE</span></h2>
            <div class="container">
                <ul>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                    <li>
                        <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                        <h4>Full Name</h4>
                        <p>DESIGNATION/ SKILL SET</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@include('inc.footer')
@endsection
