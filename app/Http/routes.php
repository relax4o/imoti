
<?php


Route::get('/', 'HomeController@index');

Route::get('/login', 'AccountController@getLogin');
Route::post('/login', 'AccountController@postLogin');
Route::get('/logout', 'AccountController@getLogout');

Route::get('/profile', ['middleware' => 'auth', 'uses' => 'ProfileController@index']);

Route::get('/insert', function () {
	$user = App\User::find(1);
	$user->password = bcrypt('armani9202');
	$user->save();
});