@extends('layouts.app')

@section('content')
@include('inc.header')
 <div class=" banner " style="background: url({{ asset('public') }}/img/banner.png) no-repeat center top; ">
        <div class="container ">
            <div class="banner-txt wow fadeInRight " data-wow-deuration="2s " data-wow-delay=".2s ">
                <h1>LOREM IPSUM </h1>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing nonummy nibheuismod tincidunt ut laoreet dolore magna aliquam erat </p>
            </div>
           
        </div>
    </div>
    <div class="hm-trasted ">
        <div class="container ">
            <h2 class=" wow zoomIn " data-wow-deuration="2s " data-wow-delay=".2s ">Trusted
                <span>By</span> </h2>
            <div class="owl-carousel company-logo owl-theme wow fadeInUp " data-wow-deuration="2s " data-wow-delay=".2s ">
                <div class="item ">
                    <div class="img-hldr ">
                        <img src="{{ asset('public') }}/img/DesignEvo-6f330ebd82a94aebad9e1546cf6bf992.png " alt=" ">
                    </div>
                </div>
                <div class="item ">
                    <div class="img-hldr ">
                        <img src="{{ asset('public') }}/img/images.png " alt=" ">
                    </div>
                </div>
                <div class="item ">
                    <div class="img-hldr ">
                        <img src="{{ asset('public') }}/img/DesignEvo-6f330ebd82a94aebad9e1546cf6bf992.png " alt=" ">
                    </div>
                </div>
                <div class="item ">
                    <div class="img-hldr ">
                        <img src="{{ asset('public') }}/img/images.png " alt=" ">
                    </div>
                </div>
                <div class="item ">
                    <div class="img-hldr ">
                        <img src="{{ asset('public') }}/img/DesignEvo-6f330ebd82a94aebad9e1546cf6bf992.png " alt=" ">
                    </div>
                </div>
                <div class="item ">
                    <div class="img-hldr ">
                        <img src="{{ asset('public') }}/img/images.png " alt=" ">
                    </div>
                </div>
                <div class="item ">
                    <div class="img-hldr ">
                        <img src="{{ asset('public') }}/img/DesignEvo-6f330ebd82a94aebad9e1546cf6bf992.png " alt=" ">
                    </div>
                </div>
                <div class="item ">
                    <div class="img-hldr ">
                        <img src="{{ asset('public') }}/img/images.png " alt=" ">
                    </div>
                </div>
                <div class="item ">
                    <div class="img-hldr ">
                        <img src="{{ asset('public') }}/img/DesignEvo-6f330ebd82a94aebad9e1546cf6bf992.png " alt=" ">
                    </div>
                </div>
                <div class="item ">
                    <div class="img-hldr ">
                        <img src="{{ asset('public') }}/img/images.png " alt=" ">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hm-services ">
        <div class="container ">
            <h2 class=" wow zoomIn " data-wow-deuration="2s " data-wow-delay=".2s ">Services</h2>
            <p class=" wow zoomIn " data-wow-deuration="2s " data-wow-delay=".2s ">Lorem ipsum dolor sit amet, consectetuer adip Lorem ipsum dolor sit amet, consectetuer adipi</p>
            <ul class="service-li wow fadeInUp " data-wow-deuration="2s " data-wow-delay=".2s ">
                <li>
                    <a href="# ">
                        <div class="icn "><img src="{{ asset('public') }}/img/custom_software.png " alt=" "> </div>
                        <h4>Custom Software</h4>
                        <p>Development</p>
                    </a>
                </li>
                <li>
                    <a href="# ">
                        <div class="icn "><img src="{{ asset('public') }}/img/mobile_app.png " alt=" "> </div>
                        <h4>Mobile Apps</h4>
                        <p>Development</p>
                    </a>
                </li>

                <li>
                    <a href="# ">
                        <div class="icn "><img src="{{ asset('public') }}/img/iot_icon.png " alt=" "> </div>
                        <h4>IOT </h4>
                        <p>Development</p>
                    </a>
                </li>
                <li>
                    <a href="# ">
                        <div class="icn "><img src="{{ asset('public') }}/img/website_icon.png " alt=" "> </div>
                        <h4>Website </h4>
                        <p>Development</p>
                    </a>
                </li>
                <li>
                    <a href="# ">
                        <div class="icn "><img src="{{ asset('public') }}/img/machine_learning_icon.png " alt=" "> </div>
                        <h4>Machine Learning </h4>
                        <p>And Data Science</p>
                    </a>
                </li>
                <li>
                    <a href="# ">
                        <div class="icn "><img src="{{ asset('public') }}/img/ux_ui_icon.png " alt=" "> </div>
                        <h4>UX & UI</h4>
                        <p>Design</p>
                    </a>
                </li>
                <li>
                    <a href="# ">
                        <div class="icn "><img src="{{ asset('public') }}/img/motion_icon.png " alt=" "> </div>
                        <h4>Motion</h4>
                        <p>Graphics</p>
                    </a>
                </li>
                <li>
                    <a href="# ">
                        <div class="icn "><img src="{{ asset('public') }}/img/graphics_icon.png " alt=" "> </div>
                        <h4>Graphic</h4>
                        <p>Design</p>
                    </a>
                </li>
                <li>
                    <a href="# ">
                        <div class="icn "><img src="{{ asset('public') }}/img/graphics_icon.png " alt=" "> </div>
                        <h4>Graphic</h4>
                        <p>Design</p>
                    </a>
                </li>
            </ul>
            <div class="clear-fix "></div> <button id="loadMore">View More</button>
        </div>
    </div>
    <div class="hm-idea ">
        <div class="container ">
            <h2 class=" wow fadeInRight " data-wow-deuration="2s " data-wow-delay=".2s ">DO YOU HAVE <br>AN IDEA?</h2>
            <div class="img-hldr wow fadeInUp " data-wow-deuration="2s " data-wow-delay=".2s "><img src="{{ asset('public') }}/img/lady_cartoon.png " alt=" "> </div>
        </div>
    </div>
    <div class="hm-contact ">
        <div class="container ">
            <div class="hldr wow fadeInUp " data-wow-deuration="2s " data-wow-delay=".2s ">
                <div class="hm-contact-logo ">
                    <img src="{{ asset('public') }}/img/form-logo.png " alt=" ">
                </div>
                <form>
                    <div class="form-group ">
                        <label>Full Name</label>
                        <input type="text " class="form-control " placeholder="Lorem ipsum dolor mod tincidunt ">
                    </div>
                    <div class="form-group ">
                        <label>Email Id</label>
                        <input type="text " class="form-control " placeholder="Lorem ipsum dolor mod tincidunt ">
                    </div>
                    <div class="form-group ">
                        <label>Type your Message</label>
                        <textarea class="form-control " placeholder="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euis- mod tincidunt ut laoreet dolore magna ali- "></textarea>
                    </div>
                    <div class="form-group ">
                        <label class="check "><input type="checkbox"><span class="checkmark "></span> Need NDA?</label>
                    </div>
                    <div class="form-group "><input type="submit" value="Send "></div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="floating-div ">
        <div class="container"><h1>Our Values</h1></div>
        <div class="hldr ">
            <div class="list latched-holder ">
                <div class="container ">
                    <div class="img-hldr wow fadeInLeft  justify-content-center align-items-center d-flex flex-column" data-wow-deuration="2s " data-wow-delay=".2s "><img src="{{ asset('public') }}/img/cat.png " alt=" "> </div>
                    <div class="txt wow fadeInRight " data-wow-deuration="2s " data-wow-delay=".2s ">
                        <h2>FRIENDLY <br>BUT NOT <br>UNPROFESSIONAL!
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="hldr ">
            <div class="list latched-holder ">
                <div class="container ">
                    <div class="img-hldr wow fadeInLeft  justify-content-center align-items-center d-flex flex-column" data-wow-deuration="2s " data-wow-delay=".2s "><img src="{{ asset('public') }}/img/time_bomb.png " alt=" "> </div>
                    <div class="txt wow fadeInRight " data-wow-deuration="2s " data-wow-delay=".2s ">
                        <h2>URGENT<br> BUT<br> NOT RUSHED!
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="hldr ">
            <div class="list latched-holder ">
                <div class="container ">
                    <div class="img-hldr wow fadeInLeft justify-content-center align-items-center d-flex flex-column" data-wow-deuration="2s " data-wow-delay=".2s "><img src="{{ asset('public') }}/img/wolf_pack.png " alt=" "> </div>
                    <div class="txt wow fadeInRight " data-wow-deuration="2s " data-wow-delay=".2s ">
                        <h2>INITIATIVE <br>BUT NOT<br> A LONE WOLF</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="hldr ">
            <div class="list latched-holder ">
                <div class="container ">
                    <div class="img-hldr wow fadeInLeft  justify-content-center align-items-center d-flex flex-column" data-wow-deuration="2s " data-wow-delay=".2s "><img src="{{ asset('public') }}/img/microscope.png " alt=" "> </div>
                    <div class="txt wow fadeInRight " data-wow-deuration="2s " data-wow-delay=".2s ">
                        <h2>SCIENTIFIC<br> BUT
                            <br>NOT INHUMANE!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('inc.footer')
<div class="popup-hldr fadeInLeft" data-wow-deuration="2s " data-wow-delay=".2s ">
        <div class="hldr"><h2>LOREM IPSUM DOLOR SITTETU</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adiscing elit, sed diam </p>
        <a href="javascript:void(0)" class="book">Book Now</a>
        <div class="close"><a href="javascript:void(0)"><i class="fa fa-times-circle"></i></a></div></div>
    </div>
@endsection
