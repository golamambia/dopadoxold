<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function index()
    {
        
        return view('contact');
       
        
    }
    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
   
}
