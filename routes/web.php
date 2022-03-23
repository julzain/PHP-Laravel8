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
        "name" => "Julkarnain Lubis",
        "email" => "julkarnainlubis277@gmail.com",
        "image" => "julkarnain.jpg"
    ]);
});









Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "test blog",
            "slug" => "test-blog",
            "author" => "sandi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur aliquid aperiam est aliquam quae maxime autem natus distinctio itaque voluptatum odit odio fuga quisquam debitis fugit ullam molestiae veritatis dolor, consequatur sed. Repudiandae molestias velit aliquid! Quod maxime commodi eum? Dolorem praesentium, tempora, assumenda deserunt amet quia vero, aliquid temporibus velit inventore dolorum quasi mollitia voluptates? Nam perferendis rerum aliquid, deleniti similique quas numquam maxime, libero fuga et iste ipsa neque? Debitis atque earum voluptatem rerum pariatur nostrum. Eos, quasi!"
        ],
        [
            "title" => "test blog 2",
            "slug" => "test-blog-2",
            "author" => "sandi 2",
            "body" => "Lorem ipsum 2 dolor, sit amet consectetur adipisicing elit. Consequuntur aliquid aperiam est aliquam quae maxime autem natus distinctio itaque voluptatum odit odio fuga quisquam debitis fugit ullam molestiae veritatis dolor, consequatur sed. Repudiandae molestias velit aliquid! Quod maxime commodi eum? Dolorem praesentium, tempora, assumenda deserunt amet quia vero, aliquid temporibus velit inventore dolorum quasi mollitia voluptates? Nam perferendis rerum aliquid, deleniti similique quas numquam maxime, libero fuga et iste ipsa neque? Debitis atque earum voluptatem rerum pariatur nostrum. Eos, quasi!"
        ]
    ]; 

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "test blog",
            "slug" => "test-blog",
            "author" => "sandi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur aliquid aperiam est aliquam quae maxime autem natus distinctio itaque voluptatum odit odio fuga quisquam debitis fugit ullam molestiae veritatis dolor, consequatur sed. Repudiandae molestias velit aliquid! Quod maxime commodi eum? Dolorem praesentium, tempora, assumenda deserunt amet quia vero, aliquid temporibus velit inventore dolorum quasi mollitia voluptates? Nam perferendis rerum aliquid, deleniti similique quas numquam maxime, libero fuga et iste ipsa neque? Debitis atque earum voluptatem rerum pariatur nostrum. Eos, quasi!"
        ],
        [
            "title" => "test blog 2",
            "slug" => "test-blog-2",
            "author" => "sandi 2",
            "body" => "Lorem ipsum 2 dolor, sit amet consectetur adipisicing elit. Consequuntur aliquid aperiam est aliquam quae maxime autem natus distinctio itaque voluptatum odit odio fuga quisquam debitis fugit ullam molestiae veritatis dolor, consequatur sed. Repudiandae molestias velit aliquid! Quod maxime commodi eum? Dolorem praesentium, tempora, assumenda deserunt amet quia vero, aliquid temporibus velit inventore dolorum quasi mollitia voluptates? Nam perferendis rerum aliquid, deleniti similique quas numquam maxime, libero fuga et iste ipsa neque? Debitis atque earum voluptatem rerum pariatur nostrum. Eos, quasi!"
        ]
    ]; 

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
