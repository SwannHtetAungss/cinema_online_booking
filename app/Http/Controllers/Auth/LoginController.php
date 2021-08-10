<?php

namespace App\Http\Controllers\Auth;

// use session;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

use Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;
<<<<<<< HEAD
    
=======
    // protected function redirectTo(){
    //     return Request::session()->get('url.intended') ?? '/homepage';
    // }

    // public function showLoginForm()
    // {
    //     // $roles = Auth::user()->getRoleNames();
    //     // if($roles[0] == 'customer'){
    //         // dd('url.intended');
    //     if(!session()->has('url.intended'))
    //     {
    //         session(['url.intended' => url()->previous()]);
    //     }
    //     return view('auth.login');
    //     // }
    // }

>>>>>>> d680a8d6973f8d8fa86c273c5cd0938fcb8acd18
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        // $this->redirectTo = url()->previous();
    }

    protected function authenticated($user){
        $roles = Auth::user()->getRoleNames();;
        if($roles[0] == 'admin'){
            return redirect()->route('hall.index');
        }else{
            return redirect($user->uri);
        }
    }
}
