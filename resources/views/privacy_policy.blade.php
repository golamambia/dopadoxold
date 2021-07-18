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
        <div class="privacy">
            <div class="container">
                <h1>PRIVACY <br><span>POLICY</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <p>Ut wisi enim ad minim veniam, quis nos- trud exerci tation ullamcorper suscipit lob- ortis nisl ut aliquip ex ea commodo conse- quat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore
                    eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te</p>
                <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore </p>
                <p>Ut wisi enim ad minim veniam, quis nos- trud exerci tation ullamcorper suscipit lob- ortis nisl ut aliquip ex ea commodo conse- quat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore
                    eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te</p>
                <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh</p>
            </div>
        </div>
    </div>
@include('inc.footer')
@endsection
