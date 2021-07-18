<?php

namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Auth;
use DB;
use Redirect;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    /**
     * Where to redirect users after login.
     *
     * 
     */
    //protected $redirectTo = RouteServiceProvider::Dashboard;
//protected $redirectTo = RouteServiceProvider::HOME;
    //protected $redirectTo = '/home';
  //  protected $loginPath = '/admin';
    /**
     * Create a new controller instance.
     *
     *
     */
    protected $redirectTo = '/home';
    
    public function __construct()
    {
        return Redirect::to('/admin/login');
        $this->middleware('guest')->except('logout');
    }
}
