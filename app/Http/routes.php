
<?php

/** Home route, individual action */
Route::get('/', 'HomeController@index');


/** Login and Logout routes */
Route::get('/login', 'AccountController@getLogin');
Route::post('/login', 'AccountController@postLogin');
Route::get('/logout', 'AccountController@getLogout');

/** Register routes */
Route::get('/register', 'AccountController@getRegister');
Route::post('/register', 'AccountController@postRegister');

/** Profile routes */
Route::get('/profile', ['middleware' => 'auth', 'uses' => 'ProfileController@index']);


// просто си вкарвам данни докато си направя регистрацията
Route::get('/insert', function () {
	$user = new App\User();
	$user->username = 'test';
	$user->password = bcrypt('test');
	$user->email = 'test@test.bg';
	$user->display_name = 'Test Display Name';
	$user->save();
});