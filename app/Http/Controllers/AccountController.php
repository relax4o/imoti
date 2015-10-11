<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Profile;
use Auth;
use Validator;

class AccountController extends Controller
{

    public function getLogin() {
        if ( Auth::check() )
            return redirect('/');

        return view('pages.login');
    }

    public function postLogin(Request $req) {

        // if we are already logged in - we prevent to proceed this again
        if ( Auth::check() ) 
            return redirect('/');

        // check whether the user is using username or email to login
        $field = filter_var($req->get('username'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        
        $user = [
            $field => $req->get('username'),
            'password' => $req->get('password'),
            'active' => 1
        ];

        $remember = $req->get('remember');

        if  ( Auth::attempt($user, $remember) ) {

            // Log in success - set the current account as online status
            $user = User::find(Auth::user()->account_id);
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
        $user = User::find(Auth::user()->account_id);
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
    public function postRegister(Request $req) {

        // if we're logged in we dismiss this action
        if ( Auth::check() )
            return redirect('/');
      
        $validator = Validator::make($req->all(), [
                'username' => 'required|max:50|unique:accounts',
                'display_name' => 'required|max:50',
                'email' => 'required|email|max:60|unique:accounts',
                'password' => 'required|min:6|max:20|different:username',
                'confirm_password' => 'required|same:password',
                'entity_type' => 'required'
        ]);

        if ( $validator->fails() ) {
            return redirect('/register')
                    ->withErrors($validator->messages())
                    ->withInput($req->except('password', 'confirm_password'));
        }


        $user = new User();
        $user->set([
            'username' => $req->get('username'),
            'password' => $req->get('password'),
            'email' => $req->get('email'),
            'is_agency' => $req->get('entity_type')
        ]);
        $user->save();

        $profile = new Profile();
        $profile->display_name = $req->get('display_name');
        $user->profiles()->save($profile);

        return redirect('/login')
                ->withInput($req->only('username'))
                ->with([
                    'hstatus' => 'success',
                    'message' => 'Вие се регистрирахте успешно! Можете да влезете в акаунта си!'
                ]);
    }
}
