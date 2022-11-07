<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Jonathan Felim Jhon",
        "email" => "jonathan.jhon@binus.ac.id",
        "image" => "foto_jonathan.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Jonathan Felim Jhon",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio aliquam fuga delectus nulla modi nisi harum incidunt maxime? Expedita reiciendis facilis sapiente porro in accusamus blanditiis ad obcaecati, tempore veniam?"
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "David",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio aliquam fuga delectus nulla modi nisi harum incidunt maxime? Expedita reiciendis facilis sapiente porro in accusamus blanditiis ad obcaecati, tempore veniam?WKWKKWKWKKWKWK"
        ],
    ];

    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Jonathan Felim Jhon",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio aliquam fuga delectus nulla modi nisi harum incidunt maxime? Expedita reiciendis facilis sapiente porro in accusamus blanditiis ad obcaecati, tempore veniam?",
            "is_verified" => true
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "David",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio aliquam fuga delectus nulla modi nisi harum incidunt maxime? Expedita reiciendis facilis sapiente porro in accusamus blanditiis ad obcaecati, tempore veniam?WKWKKWKWKKWKWK",
            "is_verified" => false
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post',[
        "title"=> "Single Post",
        "post" => $new_post
    ]);
});
