<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TermPolicyController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function term()
    {
        
        return view('term_condition');
       
        
    }
     public function privacy()
    {
        
        return view('privacy_policy');
       
        
    }
    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
   
}
