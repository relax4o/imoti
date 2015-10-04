
<?php


Route::get('/', 'HomeController@index');

Route::get('/login', 'AccountController@getLogin');
Route::post('/login', 'AccountController@postLogin');
Route::get('/logout', 'AccountController@getLogout');

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