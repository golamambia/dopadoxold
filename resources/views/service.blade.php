@extends('layouts.app')

@section('content')
@include('inc.header')
<div class="service-banner" style="background: url({{ asset('public') }}/img/banner.png) no-repeat center;">
        <div class="container">
            <div class="txt">
                <h1>OUR SERVICES</h1>
                <p>-lorem ipsum lorem ipsum</p>
            </div>
            <div class="bottom-txt"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh 
                euismod tincidunt ut laoreet dolore magna </p></div>
        </div>
    </div>
    <div class="services">
        <div class="container">
            <h2>Services</h2>
            <ul class="row">
                <li class="col-lg-4 col-md-4 wow fadeInUp" data-wow-deuration="2s " data-wow-delay=".2s ">
                    <div class="icon">
                        <img src="{{ asset('public') }}/img/service1.png" alt="">
                    </div>
                    <div class="txt">
                        <h3>Custom Software</h3>
                        <h4>Development</h4>
                        <p>Lorem ipsum dolor sit 
                            amet, consectetuer 
                            adipiscing elit, sed </p>
                    </div>
                </li>
                <li class="col-lg-4 col-md-4 wow fadeInUp" data-wow-deuration="2s " data-wow-delay=".2s ">
                    <div class="icon">
                        <img src="{{ asset('public') }}/img/service2.png" alt="">
                    </div>
                    <div class="txt">
                        <h3>Mobile Apps</h3>
                        <h4>Development</h4>
                        <p>Lorem ipsum dolor sit 
                            amet, consectetuer 
                            adipiscing elit, sed </p>
                    </div>
                </li>
                <li class="col-lg-4 col-md-4 wow fadeInUp" data-wow-deuration="2s " data-wow-delay=".2s ">
                    <div class="icon">
                        <img src="{{ asset('public') }}/img/service1.png" alt="">
                    </div>
                    <div class="txt">
                        <h3>Website</h3>
                        <h4>Development</h4>
                        <p>Lorem ipsum dolor sit 
                            amet, consectetuer 
                            adipiscing elit, sed </p>
                    </div>
                </li>
                <li class="col-lg-4 col-md-4 wow fadeInUp" data-wow-deuration="2s " data-wow-delay=".2s ">
                    <div class="icon">
                        <img src="{{ asset('public') }}/img/iot_icon-blk.png" alt="">
                    </div>
                    <div class="txt">
                        <h3>IOT</h3>
                        <h4>Development</h4>
                        <p>Lorem ipsum dolor sit 
                            amet, consectetuer 
                            adipiscing elit, sed </p>
                    </div>
                </li>
                <li class="col-lg-4 col-md-4 wow fadeInUp" data-wow-deuration="2s " data-wow-delay=".2s ">
                    <div  class="icon">
                        <img src="{{ asset('public') }}/img/machine_learning_icon-blk.png" alt="">
                    </div>
                    <div class="txt">
                        <h3>Machine Learning</h3>
                        <h4>And Data Science</h4>
                        <p>Lorem ipsum dolor sit 
                            amet, consectetuer 
                            adipiscing elit, sed </p>
                    </div>
                </li>
                <li class="col-lg-4 col-md-4 wow fadeInUp" data-wow-deuration="2s " data-wow-delay=".2s ">
                    <div class="icon">
                        <img src="{{ asset('public') }}/img/ux_ui_icon.png" alt="">
                    </div>
                    <div class="txt">
                        <h3>UX & UI</h3>
                        <h4>Design</h4>
                        <p>Lorem ipsum dolor sit 
                            amet, consectetuer 
                            adipiscing elit, sed </p>
                    </div>
                </li>
                <li class="col-lg-4 col-md-4 wow fadeInUp" data-wow-deuration="2s " data-wow-delay=".2s ">
                    <div class="icon">
                        <img src="{{ asset('public') }}/img/graphics_icon.png" alt="">
                    </div>
                    <div class="txt">
                        <h3>Graphic</h3>
                        <h4>Design</h4>
                        <p>Lorem ipsum dolor sit 
                            amet, consectetuer 
                            adipiscing elit, sed </p>
                    </div>
                </li>
                <li class="col-lg-4 col-md-4 wow fadeInUp" data-wow-deuration="2s " data-wow-delay=".2s ">
                    <div  class="icon">
                        <img src="{{ asset('public') }}/img/motion_icon-blk.png" alt="">
                    </div>
                    <div class="txt">
                        <h3>Motion</h3>
                        <h4>Graphics</h4>
                        <p>Lorem ipsum dolor sit 
                            amet, consectetuer 
                            adipiscing elit, sed </p>
                    </div>
                </li>
                <li class="col-lg-4 col-md-4 wow fadeInUp" data-wow-deuration="2s " data-wow-delay=".2s ">
                    <div class="icon">
                        <img src="{{ asset('public') }}/img/mvp_icon-blk.png" alt="">
                    </div>
                    <div class="txt">
                        <h3>MVP</h3>
                        <h4>For start ups</h4>
                        <p>Lorem ipsum dolor sit 
                            amet, consectetuer 
                            adipiscing elit, sed </p>
                    </div>
                </li>
                <li class="col-lg-4 col-md-4 wow fadeInUp" data-wow-deuration="2s " data-wow-delay=".2s ">
                    <div class="icon">
                        <img src="{{ asset('public') }}/img/business_icon.png" alt="">
                    </div>
                    <div class="txt">
                        <h3>Business</h3>
                        <h4>Analysis</h4>
                        <p>Lorem ipsum dolor sit 
                            amet, consectetuer 
                            adipiscing elit, sed </p>
                    </div>
                </li>
                <li class="col-lg-4 col-md-4 wow fadeInUp" data-wow-deuration="2s " data-wow-delay=".2s ">
                    <div  class="icon">
                        <img src="{{ asset('public') }}/img/it_icon.png" alt="">
                    </div>
                    <div class="txt">
                        <h3>IT</h3>
                        <h4>Consulting</h4>
                        <p>Lorem ipsum dolor sit 
                            amet, consectetuer 
                            adipiscing elit, sed </p>
                    </div>
                </li>
                <li class="col-lg-4 col-md-4 wow fadeInUp" data-wow-deuration="2s " data-wow-delay=".2s ">
                    <div  class="icon">
                        <img src="{{ asset('public') }}/img/technical_icon-blk.png" alt="">
                    </div>
                    <div class="txt">
                        <h3>Technical</h3>
                        <h4>Seo</h4>
                        <p>Lorem ipsum dolor sit 
                            amet, consectetuer 
                            adipiscing elit, sed </p>
                    </div>
                </li>
                <li class="col-lg-4 col-md-4 wow fadeInUp" data-wow-deuration="2s " data-wow-delay=".2s ">
                    <div  class="icon">
                        <img src="{{ asset('public') }}/img/digital_icon.png" alt="">
                    </div>
                    <div class="txt">
                        <h3>Digital</h3>
                        <h4>Marketing</h4>
                        <p>Lorem ipsum dolor sit 
                            amet, consectetuer 
                            adipiscing elit, sed </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="how-do">
        <div class="container">
            <h3>How do we Work?</h3>
            <p>Fill the form below and reach us with your idea/ question/ suggestion</p>
            <ul class="how-do-list">
                <li>
                    <div class="icon-hldr justify-content-center d-flex flex-column align-items-center">
                        <span>1</span>
                        <img src="{{ asset('public') }}/img/introduction_icon.png" alt="">
                    </div>
                    <h5>INTRODUCTION
                        MEETING</h5>
                </li>
                <li>
                    <div class="icon-hldr justify-content-center d-flex flex-column align-items-center">
                        <img src="{{ asset('public') }}/img/preparation_icon.png" alt="">
                        <span>2</span>
                    </div>
                    <h5>PREPARATION OF
                        TECHNICAL SPECIFICATION</h5>
                </li>
                <li>
                    <div class="icon-hldr justify-content-center d-flex flex-column align-items-center">
                        <img src="{{ asset('public') }}/img/project_estimation_icon.png" alt="">
                        <span>3</span>
                    </div>
                    <h5>PROJECT
                        ESTIMATION</h5>
                </li>
                <li>
                    <div class="icon-hldr justify-content-center d-flex flex-column align-items-center">
                        <img src="{{ asset('public') }}/img/project_plan_icon.png" alt="">
                        <span>4</span>
                    </div>
                    <h5>PROJECT
                        PLAN</h5>
                </li>
                <li>
                    <div class="icon-hldr justify-content-center d-flex flex-column align-items-center">
                        <img src="{{ asset('public') }}/img/ui_ux_design_icon.png" alt="">
                        <span>5</span>
                    </div>
                    <h5>UI/ UX
                        DESIGN</h5>
                </li>
                <li>
                    <div class="icon-hldr justify-content-center d-flex flex-column align-items-center">
                        <img src="{{ asset('public') }}/img/development_icon.png" alt="">
                        <span>6</span>
                    </div>
                    <h5>DEVELOPMENT</h5>
                </li>
                <li>
                    <div class="icon-hldr justify-content-center d-flex flex-column align-items-center">
                        <img src="{{ asset('public') }}/img/qa_qc_icon.png" alt="">
                        <span>7</span>
                    </div>
                    <h5>QA/ QC
                        TESTING</h5>
                </li>
                <li>
                    <div class="icon-hldr justify-content-center d-flex flex-column align-items-center">
                        <img src="{{ asset('public') }}/img/launching_icon.png" alt="">
                        <span>8</span>
                    </div>
                    <h5>LAUNCHING</h5>
                </li>
                <li>
                    <div class="icon-hldr justify-content-center d-flex flex-column align-items-center">
                        <img src="{{ asset('public') }}/img/support_icon.png" alt="">
                        <span>9</span>
                    </div>
                    <h5>SUPPORT</h5>
                </li>
            </ul>
            <div class="clear-fix"></div>
            <a href="#" class="view-mr">View More</a>
        </div>
    </div>
    <div class="service-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft " data-wow-deuration="2s " data-wow-delay=".2s ">
                    <h2>HAVE <br>
                        AN <br>
                        IDEA?</h2>
                        <a href="#" class="click">CLICK HERE</a>
                </div>
                <div class="col-lg-8 wow fadeInRight " data-wow-deuration="2s " data-wow-delay=".2s ">
                    <div class="hldr">
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
    </div>
@include('inc.footer')
@endsection
