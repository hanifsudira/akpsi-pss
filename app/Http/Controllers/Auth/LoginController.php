<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
     * @var string
     */
//   protected $redirectTo = '/home';
    protected $redirectTo;

    protected function redirectTo()
    {
        if(auth()->user()->role == 1){
            $this->redirectTo = '/user/homepage';
        }
        if(auth()->user()->role == 2){
            $this->redirectTo = '/delivery/homepage';
        }
        if(auth()->user()->role == 3){
            $this->redirectTo = '/partner/homepage';
        }
        if(auth()->user()->role == 4){
            $this->redirectTo = '/settlement/homepage';
        }
        if(auth()->user()->role == 5){
            $this->redirectTo = '/admin/homepage';
        }
        return $this->redirectTo;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    
}
