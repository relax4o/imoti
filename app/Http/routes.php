
<?php

/** Home route, individual action */
Route::get('/', 'HomeController@index');


/** Login and Logout routes */
Route::get('login', 'AccountController@getLogin');
Route::post('login', 'AccountController@postLogin');
Route::get('logout', 'AccountController@getLogout');

/** Register routes */
Route::get('register', 'AccountController@getRegister');
Route::post('register', 'AccountController@postRegister');

/** Profile group route */
Route::group(['prefix' => 'profile', 'middleware' => 'auth', 'as' => 'member::'], function () {

	Route::get('', function () {
		//abort(404);
		return redirect()->route('member::dashboard');
	});

	Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'ProfileController@index']);
	Route::get('about', ['as' => 'about', 'uses' => 'ProfileController@about']);
	Route::get('settings', ['as' => 'settings', 'uses' => 'ProfileController@settings']);
});


Route::get('lang/{locale}', function ( $locale ) {
	App::setLocale($locale);

	return back();
});

Event::listen('illuminate.query', function($query)
{
    //var_dump($query);
});

Route::get('/test', function () {

	// Fetching subaccounts for the current agency account
	/*$cur_id = 1;
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

	$user = App\Profile::find(1);

	$vals = array_pluck($user->agency, ['account_id']);

	$profiles = $user->profiles->find($vals);

	dd($profiles);*/

	$user = App\User::find(1);

	$profile = $user->profiles()->get();

	dd($profile);

});