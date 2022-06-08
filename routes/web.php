<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// use App\Http\Controllers\BoardController;

Route::get('/', [
	'uses' => 'FrontendController@index',
	'as' => 'index'
]);
Route::get('/about', function () {
	return view('front.about');
})->name('about');

Route::get('/service', function () {
	return view('front.service');
})->name('service');

Route::get('/contact', function () {
	return view('front.contact');
})->name('contact');

Route::get('/board', [
	'uses' => 'FrontendController@board',
	'as' => 'board'
]);

Route::get('/gallery', [
	'uses' => 'FrontendController@gallery',
	'as' => 'gallery'
]);

Route::get('/events', [
	'uses' => 'FrontendController@events',
	'as' => 'events'
]);

Route::get('single/events/{id}', [
	'uses' => 'FrontendController@singleevents',
	'as' => 'singleevent'
]);

Route::get('/saving', [
	'uses' => 'FrontendController@saving',
	'as' => 'saving'
]);

Route::get('/loan', [
	'uses' => 'FrontendController@loan',
	'as' => 'loan'
]);

Route::get('boardmember', [
	'uses' => 'FrontendController@boardmember',
	'as' => 'boardmember'
]);

Route::get('/accountmember', [
	'uses' => 'FrontendController@accountmember',
	'as' => 'accountmember'
]);

Route::get('/loanmember', [
	'uses' => 'FrontendController@loanmember',
	'as' => 'loanmember'
]);

Route::get('/othermember', [
	'uses' => 'FrontendController@othermember',
	'as' => 'othermember'
]);

Route::get('/membership', [
	'uses' => 'FrontendController@membership',
	'as' => 'membership'
]);



// Route::get('/gallery', [
// 	'uses' => 'GalleryController@gallery',
// 	'as' => 'gallery'
// ]);



Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

	Route::get('/dashboard', [
		'uses' => 'HomeController@index',
		'as' => 'home'
	]);


	Route::get('/posts', [
		'uses' => 'PostsController@index',
		'as' => 'posts'
	]);

	Route::get('/post/create', [
		'uses' => 'PostsController@create',
		'as' => 'post.create'
	]);

	Route::post('/post/store', [
		'uses' => 'PostsController@store',
		'as' => 'post.store'
	]);

	Route::get('/post/edit/{id}', [
		'uses' => 'PostsController@edit',
		'as' => 'post.edit'
	]);

	Route::post('/post/update/{id}', [
		'uses' => 'PostsController@update',
		'as' => 'post.update'
	]);

	Route::get('/post/delete/{id}', [
		'uses' => 'PostsController@destroy',
		'as' => 'post.delete'
	]);

	Route::get('/posts/trashed', [
		'uses' => 'PostsController@trashed',
		'as' => 'posts.trashed'
	]);

	Route::get('/post/kill/{id}', [
		'uses' => 'PostsController@kill',
		'as' => 'post.kill'
	]);

	Route::get('/post/restore/{id}', [
		'uses' => 'PostsController@restore',
		'as' => 'post.restore'
	]);



	Route::get('/categories', [
		'uses' => 'CategoriesController@index',
		'as' => 'categories'
	]);

	Route::get('/category/create', [
		'uses' => 'CategoriesController@create',
		'as' => 'category.create'
	]);

	Route::post('/category/store', [
		'uses' => 'CategoriesController@store',
		'as' => 'category.store'
	]);

	Route::get('/category/edit/{id}', [
		'uses' => 'CategoriesController@edit',
		'as' => 'category.edit'
	]);

	Route::post('/category/update/{id}', [
		'uses' => 'CategoriesController@update',
		'as' => 'category.update'
	]);

	Route::get('/category/delete/{id}', [
		'uses' => 'CategoriesController@destroy',
		'as' => 'category.delete'
	]);





	Route::get('/features', [
		'uses' => 'FeaturesController@index',
		'as' => 'features'
	]);

	Route::get('/features/create', [
		'uses' => 'FeaturesController@create',
		'as' => 'features.create'
	]);

	Route::post('/features/store', [
		'uses' => 'FeaturesController@store',
		'as' => 'features.store'
	]);

	Route::get('/features/edit/{id}', [
		'uses' => 'FeaturesController@edit',
		'as' => 'features.edit'
	]);

	Route::post('/features/update/{id}', [
		'uses' => 'FeaturesController@update',
		'as' => 'features.update'
	]);

	Route::get('/features/delete/{id}', [
		'uses' => 'FeaturesController@destroy',
		'as' => 'features.delete'
	]);




	Route::get('/users', [
		'uses' => 'UsersController@index',
		'as' => 'users'
	]);

	Route::get('/user/create', [
		'uses' => 'UsersController@create',
		'as' => 'user.create'
	]);

	Route::post('/user/store', [
		'uses' => 'UsersController@store',
		'as' => 'user.store'
	]);

	Route::get('/user/admin/{id}', [
		'uses' => 'UsersController@admin',
		'as' => 'user.admin'
	]);

	Route::get('/user/not-admin/{id}', [
		'uses' => 'UsersController@not_admin',
		'as' => 'user.not.admin'

	]);

	Route::get('/user/profile', [
		'uses' => 'ProfilesController@index',
		'as' => 'user.profile'
	]);

	Route::get('/user/delete/{id}', [
		'uses' => 'UsersController@destroy',
		'as' => 'user.delete'
	]);

	Route::post('/user/profile/update', [
		'uses' => 'ProfilesController@update',
		'as' => 'user.profile.update'
	]);

	Route::get('change-password', 'ChangepasswordController@index')->name('password.form');

	Route::post('change-password', 'ChangepasswordController@update')->name('password.update');


	Route::get('/settings', [
		'uses' => 'SettingsController@index',
		'as' => 'settings'
	]);

	Route::post('/settings/update', [
		'uses' => 'SettingsController@update',
		'as' => 'settings.update'
	]);
});
