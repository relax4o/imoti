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

        if ( Auth::check() ) 
            return redirect('/');

        $field = filter_var(Input::get('username'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        
        $user = [
            $field => Input::get('username'),
            'password' => Input::get('password'),
            'active' => 1
        ];

        $remember = Input::get('remember');

        if  ( Auth::attempt($user, $remember) ) {
            return redirect('/')->with(['status' => 'success', 'message' => 'Вие влязохте успешно в акаунта си!']);
        }

        return redirect('/login')->with(['hstatus' => 'danger', 'message' => 'Грешни потребителко име или парола. Моля, опитайте отново!']);
    }

    public function getLogout() {
        Auth::logout();

        return redirect('/');
    }
}
