<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home',[
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "nama" => "Dwina",
        "email" => "dwina@gmail.com",
        "image" => "biner.png"
    ]);
});


Route::get('/blog', function () {
    $blog_posts =[
        [
            "title" => "Judul post 1",
            "slug" => "Judul post pertama",
            "author" => "Dwina",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga ducimus molestiae doloribus earum at non quis? A sint architecto, culpa dicta dolore quas dolor hic dignissimos eveniet libero soluta consectetur error voluptatum exercitationem, placeat cumque aliquid! Qui iste pariatur dolorum reiciendis, a aperiam quibusdam ex odit quod voluptatum suscipit natus illo iure nostrum molestiae. Minus soluta, et, consequatur ad illo ea sit deserunt voluptates ducimus sed, non laudantium dicta blanditiis modi natus? Ipsum, at. Ducimus corporis qui facilis voluptatibus deleniti!"
        ],
        [
            "title" => "Judul post 2",
            "slug" => "Judul post kedua",
            "author" => "putri",
            "body" => "Lorem ipsum jknkenieeifefi, dolor sit amet consectetur adipisicing elit. Fuga ducimus molestiae doloribus earum at non quis? A sint architecto, culpa dicta dolore quas dolor hic dignissimos eveniet libero soluta consectetur error voluptatum exercitationem, placeat cumque aliquid! Qui iste pariatur dolorum reiciendis, a aperiam quibusdam ex odit quod voluptatum suscipit natus illo iure nostrum molestiae. Minus soluta, et, consequatur ad illo ea sit deserunt voluptates ducimus sed, non laudantium dicta blanditiis modi natus? Ipsum, at. Ducimus corporis qui facilis voluptatibus deleniti!"
        ],
    ];

    return view('blog',[
        "title" => "blog",
        "post" => $blog_posts
    ]);
});

Route::get('post/{slug}', function(){
    return view('post', [
        "title" => "single post"
    ]);
});



