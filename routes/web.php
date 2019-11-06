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

Route::get('/', function () {

    //練習2-2
    /*\App\Post::create([
        'title'=>'testtitle',
        'content'=>'testcontent',
    ]);*/

    //練習2-5
    $post=new\App\Post();
    $post->title='testtitle';
    $post->content='testcontent';
    $post->save();

    return view('welcome');
});

Route::get('posts', ['as' => 'posts.index', 'uses' =>    'PostsController@index']);
Route::get('post', ['as' => 'posts.show', 'uses' => 'PostsController@show']);
Route::get('about', ['as' => 'posts.about', 'uses' =>    'PostsController@about']);
Route::get('contact', ['as' => 'posts.contact', 'uses' =>    'PostsController@contact']);