
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
Route::get('/profile/settings', ['middleware' => 'auth', 'uses' => 'ProfileController@settings']);


Route::get('lang/{locale}', function ( $locale ) {
	App::setLocale($locale);

	return back();
});

Route::get('/test', function () {

	// Fetching subaccounts for the current agency account
	$cur_id = 1;
	$user = App\User::find($cur_id);
	$profiles = $user->load('profiles');

	$collection = collect($profiles->agency)
					->map( function ($item, $key) {
						return $item->profiles;
					});


	foreach($collection as $v) {
		echo $v->display_name . '<br>';
	}

	//foreach ( $collection as $profile ) {
		//var_dump($profile->profiles);
	//}

});