<?php
use App\Article;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    
    return view('about', ['articles' => Article::take(3)->latest()->get()]);
});

Route::get('articles', 'ArticlesController@index')->name('articles.index');
Route::post('/articles', 'ArticlesController@store')->name('articles.store');
Route::get('/articles/create', 'ArticlesController@create')->name('articles.create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::put('/articles/{article}', 'ArticlesController@update')->name('articles.update');
Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');

// Route::get('/posts/{slug}', 'PostController@show');

Route::get('/tags/{tag}', 'TagsController@show')->name('tags.show');

Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');

Route::get('/payment/create', 'PaymentsController@create')->middleware('auth');
Route::post('/payment', 'PaymentsController@store')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/notifications','NotificationController@show')->middleware('auth');