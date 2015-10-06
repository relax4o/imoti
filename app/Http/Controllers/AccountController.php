<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Input, Auth;

class AccountController extends Controller
{

    public function getLogin() {
        if ( Auth::check() )
            return redirect('/');

        return view('pages.login');
    }

    public function postLogin() {

        // if we are already logged in - we prevent to proceed this again
        if ( Auth::check() ) 
            return redirect('/');

        // check whether the user is using username or email to login
        $field = filter_var(Input::get('username'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        
        $user = [
            $field => Input::get('username'),
            'password' => Input::get('password'),
            'active' => 1
        ];

        $remember = Input::get('remember');

        if  ( Auth::attempt($user, $remember) ) {

            // Log in success - set the current account as online status
            $user = User::find(Auth::user()->id);
            $user->online = 1;
            $user->save();

            return redirect('/')->with(['status' => 'success', 'message' => 'Вие влязохте успешно в акаунта си!']);
        }

        // failed login - redirecting to login page with error message
        return redirect('/login')
                ->with(['hstatus' => 'danger', 'message' => 'Грешни потребителко име или парола. Моля, опитайте отново!'])
                ->withInput();
    }

    public function getLogout() {

        // Set the current account as offline status
        $user = User::find(Auth::user()->id);
        $user->online = 0;
        $user->save();

        // Logout proceed
        Auth::logout();

        return redirect('/');
    }

    public function getRegister() {
        if  ( Auth::check() )
            return redirect()->intended('profile');

        return view('pages.register');
    }

    public function postRegister() {
        
    }
}
