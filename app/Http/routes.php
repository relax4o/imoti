
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
Route::get('/profile', function() {
	return redirect('/profile/dashboard');
});
Route::get('/profile/dashboard', ['middleware' => 'auth', 'uses' => 'ProfileController@index']);


Route::get('lang/{locale}', function ( $locale ) {
	App::setLocale($locale);

	return back();
});