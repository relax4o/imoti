<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Input;
use Auth;
use Validator;

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
            $user->set('online', 1);
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
        $user->set('online', 0);
        $user->save();

        // Logout proceed
        Auth::logout();

        return redirect('/');
    }


    /** GET REGISTER */
    public function getRegister() {
        if  ( Auth::check() )
            return redirect()->intended('profile');

        return view('pages.register');
    }

    /** POST REGISTER */
    public function postRegister(Request $request) {

        // if we're logged in we dismiss this action
        if ( Auth::check() )
            return redirect('/');
      
        $validator = Validator::make($request->all(), [
                'username' => 'required|max:50|unique:accounts',
                'display_name' => 'required|max:50',
                'email' => 'required|email|max:60|unique:accounts',
                'password' => 'required|min:6|max:20',
                'confirm_password' => 'same:password'
        ]);

        if ( $validator->fails() ) {
            return redirect('/register')
                    ->withErrors($validator->messages())
                    ->withInput($request->except('password', 'confirm_password'));
        }


        $user = new User();
        $user->set([
            'username' => $request->get('username'),
            'password' => bcrypt($request->get('password')),
            'email' => $request->get('email'),
            'display_name' => $request->get('display_name')
        ]);
        $user->save();

        return redirect('/login')
                ->withInput($request->only('username'))
                ->with([
                    'hstatus' => 'success',
                    'message' => 'Вие се регистрирахте успешно! Можете да влезете в акаунта си!'
                ]);
    }
}
