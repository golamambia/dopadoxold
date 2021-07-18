@extends('layouts.admin')
@section('content')
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">{{ __('Footer Details') }}</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">{{ __('Home') }}</a></li>
      <li class="breadcrumb-item active">{{ __('Dashboard') }}</li>
    </ol>
  </div>
</div>
</div>
</div>
<section class="content">
<div class="container-fluid">
<div class="row">

@include('admin.message') 

<div class="col-md-12">
<div class="card card-primary">
<div class="card-header">
  <h3 class="card-title">Footer content</h3>
</div>
<form role="form" action="{{URL::to('admin/footer-details-post')}}" enctype="multipart/form-data" method="POST">
  @csrf
  <div class="card-body">
    <div class="row">

                  <div class="col-md-6">
    <div class="form-group">
      <label for="Name">About</label>
      
      <Textarea class="form-control" id="fd_about" name="fd_about" placeholder="About">{{ $footer_data->fd_about }}</Textarea>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="Email">Address title</label>
       <input type="text" class="form-control" id="fd_address_title" name="fd_address_title" placeholder="Address title" value="{{ $footer_data->fd_address_title }}">
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="Email">Address icon</label>
       <input type="file" class="form-control" id="address_icon" name="address_icon" placeholder="Address title">
    </div>
  </div>
  <div class="col-md-2">
    <div class="form-group" style="text-align: center; padding-top: 10px;padding-bottom: 10px;background: currentColor;">
      <label for="Email"></label>
       <img src="{{ asset('public/upload/'.$footer_data->fd_address_icon) }}" width="50" height="50">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="Email">Address</label>
       <Textarea class="form-control" id="fd_address_details" name="fd_address_details" placeholder="Address details">{{ $footer_data->fd_address_details }}</Textarea>
    </div>
  </div>
<div class="col-md-6">
    <div class="form-group">
      <label for="Email">Facebook link</label>
       <input type="text" class="form-control" id="fd_facebook" name="fd_facebook" placeholder="Facebook link" value="{{ $footer_data->fd_facebook }}">
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="Email">Facebook icon</label>
       <input type="file" class="form-control" id="facebook_icon" name="facebook_icon" placeholder="Facebook link">
    </div>
  </div>
 <div class="col-md-2">
    <div class="form-group" style="text-align: center; padding-top: 10px;padding-bottom: 10px;background: currentColor;">
      <label for="Email"></label>
       <img src="{{ asset('public/upload/'.$footer_data->fd_facebook_icon) }}" width="50" height="50">
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="Email">Instagram link</label>
       <input type="text" class="form-control" id="fd_instagram" name="fd_instagram" placeholder="Instagram link" value="{{ $footer_data->fd_instagram }}">
    </div>
  </div>
   <div class="col-md-4">
    <div class="form-group">
      <label for="Email">Instagram icon</label>
       <input type="file" class="form-control" id="instagram_icon" name="instagram_icon" placeholder="Facebook link">
    </div>
  </div>
  <div class="col-md-2">
    <div class="form-group" style="text-align: center; padding-top: 10px;padding-bottom: 10px;background: currentColor;">
      <label for="Email"></label>
       <img src="{{ asset('public/upload/'.$footer_data->fd_instagram_icon) }}" width="50" height="50">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="Email">Linkedin link</label>
       <input type="text" class="form-control" id="fd_linkedin" name="fd_linkedin" placeholder="Linkedin link" value="{{ $footer_data->fd_linkedin }}">
    </div>
  </div>
   <div class="col-md-4">
    <div class="form-group">
      <label for="Email">Linkedin icon</label>
       <input type="file" class="form-control" id="linkedin_icon" name="linkedin_icon" placeholder="Facebook link">
    </div>
  </div>
<div class="col-md-2">
    <div class="form-group" style="text-align: center; padding-top: 10px;padding-bottom: 10px;background: currentColor;">
      <label for="Email"></label>
       <img src="{{ asset('public/upload/'.$footer_data->fd_linkedin_icon) }}" width="50" height="50">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="Email">Email id</label>
       <input type="text" class="form-control" id="fd_email" name="fd_email" placeholder="Email id" value="{{ $footer_data->fd_email }}">
    </div>
  </div>
   <div class="col-md-4">
    <div class="form-group">
      <label for="Email">Email icon</label>
       <input type="file" class="form-control" id="email_icon" name="email_icon" placeholder="Facebook link">
    </div>
  </div>
  <div class="col-md-2">
    <div class="form-group" style="text-align: center; padding-top: 10px;padding-bottom: 10px;background: currentColor;">
      <label for="Email"></label>
       <img src="{{ asset('public/upload/'.$footer_data->fd_email_icon) }}" width="50" height="50">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="Email">Contact no</label>
       <input type="text" class="form-control" id="fd_contact" name="fd_contact" placeholder="Contact no" value="{{ $footer_data->fd_contact }}">
    </div>
  </div>
 <div class="col-md-4">
    <div class="form-group">
      <label for="Email">Contact icon</label>
       <input type="file" class="form-control" id="contact_icon" name="contact_icon" placeholder="Facebook link">
    </div>
  </div>
<div class="col-md-2">
    <div class="form-group" style="text-align: center; padding-top: 10px;padding-bottom: 10px;background: currentColor;">
      <label for="Email"></label>
       <img src="{{ asset('public/upload/'.$footer_data->fd_contact_icon) }}" width="50" height="50">
    </div>
  </div>

 <div class="col-md-4">
    <div class="form-group">
      <label for="Email">Footer logo</label>
       <input type="file" class="form-control" id="footer_logo" name="footer_logo" placeholder="Facebook link">
    </div>
  </div>
<div class="col-md-2">
    <div class="form-group" style="text-align: center; padding-top: 10px;padding-bottom: 10px;background: currentColor;">
      <label for="Email"></label>
       <img src="{{ asset('public/upload/'.$footer_data->fd_footer_logo) }}" width="100" height="50">
    </div>
  </div>


  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>


</div>
</div>
</section>
@endsection
