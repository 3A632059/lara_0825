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
    /*$post=new\App\Post();
           $post->title='testtitle';
           $post->content='testcontent';
           $post->save();*/

    //練習3-2
    /*$posts=\App\Post::all();
    dd($posts);*/

    //練習3-3
    /*$post=\App\Post::find(1);
    dd($post);*/

    //練習3-4
    /*$posts=\App\Post::where('id','<',10)->orderBy('id','DESC')->get();
dd($posts);*/

    //練習4-1
    /*$post=\App\Post::find(1);
    $post->update([
        'title'=>'updatedtitle',
        'content'=>'updatedcontent',
    ]);*/

    //練習4-3
    /*$post=\App\Post::find(2);
    $post->title='savedtitle';
    $post->content='savedcontent';
    $post->save();*/

    //練習5-1
    /*$post=\App\Post::find(1);
    $post->delete();*/

    //練習5-3
    //\App\Post::destroy(2);

    //練習5-5
    /*\App\Post::destroy(3,5,7);*/

    //練習6-1-1.2
    /*$allPosts=\App\Post::all();
     dd($allPosts);*/

    //練習6-1-3.4
    /*$featuredPosts=\App\Post::where('is_feature',1)->get();
    dd($featuredPosts);*/

    //練習6-2-1.2
    /*$fourthPost=\App\Post::find(4);
    dd($fourthPost);*/

    //練習6-2-3.4
    /*$lastPost=\App\Post::orderBy('id','DESC')->first();
    dd($lastPost);*/

    //練習7-1 b, d, f
    $comment = new\App\Comment();
    $comment->content = 'test content2';
    $comment->post_id = '8';
    $comment->save();

    //練習7-4
    /*$post=\App\Post::find(1);
    foreach($post->comments as $comment){
        echo $comment->content.'<br>';
    }*/




    //return view('welcome');
});

Route::get('posts', ['as' => 'posts.index', 'uses' =>    'PostsController@index']);
Route::get('post', ['as' => 'posts.show', 'uses' => 'PostsController@show']);
Route::get('about', ['as' => 'posts.about', 'uses' =>    'PostsController@about']);
Route::get('contact', ['as' => 'posts.contact', 'uses' =>    'PostsController@contact']);
