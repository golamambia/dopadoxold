@extends('layouts.app')

@section('content')
@include('inc.header')
 <div class="contact-banner " style="background: url({{ asset('public') }}/img/banner.png) no-repeat center top; ">
        <div class="container ">
            <div class="txt wow fadeInRight " data-wow-deuration="2s " data-wow-delay=".2s ">
                <h1>HAVE AN IDEA?</h1>
                <p>Reach out to us... </p>
            </div>
        </div>
            <div class="txt-hldr"><h2>CONTACT US</h2>
            <p><marquee width="100%" direction="left" height="100px">reach us by email- ouremailid@gmil.com, call us at +91 1234567890, ﬁnd us at social media- @faceb reach us by email- ouremailid@gmil.com, call us at +91 1234567890, ﬁnd us at social media- @faceb reach us by email- ouremailid@gmil.com, call us at +91 1234567890, ﬁnd us at social media- @faceb</marquee></p></div>
    </div>
    <div class="contact">
        <div class="container">
            <h3>Have an Idea?</h3>
            <p>Fill the form below and reach us with your idea/ question/ suggestion</p>
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
@include('inc.footer')
@endsection
