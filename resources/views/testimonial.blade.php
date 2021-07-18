@extends('layouts.app')

@section('content')
@include('inc.header')
 <div class="service-banner testimonial-banner" style="background: url({{ asset('public') }}/img/banner.png) no-repeat center;">
        <div class="container">
            <div class="txt">
                <h1>LOREM IPSUM</h1>
                <p>-lorem ipsum lorem ipsum</p>
            </div>
            <div class="bottom-txt"><span class="line"></span></div>
        </div>
    </div>
    <div class="rating">
        <div class="container">
            <h2>OUR RATING</h2>
            <div class="clear-fix"></div>
            <div class="circle">
                <span class="test">4</span>.<span class="test1">8</span>
            </div>
        </div>
    </div>
    <div class="reviwe">
        <div class="container">
            <h1>Our Reviews</h1>
            <p>Fill the form below and reach us with your idea/ question/ suggestion</p>
            <ul>
                <li>
                    <div class="img-hldr wow fadeInLeft" data-wow-deuration="2s" data-wow-delay=".2s">
                        <img src="{{ asset('public') }}/img/banner.png" alt="">
                    </div>
                    <div class="txt wow fadeInRight  justify-content-center  d-flex flex-column" data-wow-deuration="2s" data-wow-delay=".2s">
                        <h3>Full Name</h3>
                        <h4>Company/ Position</h4>
                        <p>Lorem ipsum dolor sit 
                            amet, consectetuer 
                            adipiscing elit, sed </p>
                    </div>
                </li>
                <li>
                    <div class="img-hldr wow fadeInLeft" data-wow-deuration="2s" data-wow-delay=".2s">
                        <img src="{{ asset('public') }}/img/banner.png" alt="">
                    </div>
                    <div class="txt  wow fadeInRight  justify-content-center  d-flex flex-column" data-wow-deuration="2s" data-wow-delay=".2s">
                        <h3>Full Name</h3>
                        <h4>Company/ Position</h4>
                        <p>Lorem ipsum dolor sit 
                            amet, consectetuer 
                            adipiscing elit, sed </p>
                    </div>
                </li>
                <li>
                    <div class="img-hldr wow fadeInLeft" data-wow-deuration="2s " data-wow-delay=".2s ">
                        <img src="{{ asset('public') }}/img/banner.png" alt="">
                    </div>
                    <div class="txt wow wow fadeInRight  justify-content-center  d-flex flex-column" data-wow-deuration="2s" data-wow-delay=".2s">
                        <h3>Full Name</h3>
                        <h4>Company/ Position</h4>
                        <p>Lorem ipsum dolor sit 
                            amet, consectetuer 
                            adipiscing elit, sed </p>
                    </div>
                </li>
                <li>
                    <div class="img-hldr wow fadeInLeft" data-wow-deuration="2s " data-wow-delay=".2s ">
                        <img src="{{ asset('public') }}/img/banner.png" alt="">
                    </div>
                    <div class="txt wow fadeInRight  justify-content-center  d-flex flex-column" data-wow-deuration="2s" data-wow-delay=".2s">
                        <h3>Full Name</h3>
                        <h4>Company/ Position</h4>
                        <p>Lorem ipsum dolor sit 
                            amet, consectetuer 
                            adipiscing elit, sed </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="testimonial-slider">
        <div class="container">
            <div class="owl-carousel owl-theme testimonial-sliders">
                    
                        <div class="item">      
                            <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                            <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                            <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>     
                        </div>
                    
                        <div class="item">      
                            <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                            <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                            <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>     
                        </div>
                        <div class="item">      
                            <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                            <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                            <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>     
                        </div>
                        <div class="item">      
                            <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                            <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                            <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>     
                        </div>
                        <div class="item">      
                            <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                            <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                            <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>     
                        </div>
                        <div class="item">      
                            <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                            <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>
                            <div class="img-hldr"><img src="{{ asset('public') }}/img/banner.png" alt=""></div>     
                        </div>
                </div>
            </div>
        </div>
    </div>
@include('inc.footer')
@endsection
