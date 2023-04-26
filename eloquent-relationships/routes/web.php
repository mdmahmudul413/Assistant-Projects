<?php

use App\Models\Category;
use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    // get phone from user model
    // $user = User::find(1);
    // $phone = User::find(1)->phone;
    // $phone = User::find(2)->phone;
    // return $phone;

    // get phone from user model
    // $phone = Phone::find(1);
    // $user = Phone::find(1)->user;
    // $user = Phone::find(2)->user;
    // return $user;

    // get comments from post model
    // $post = Post::find(1);
    // $comments = Post::find(1)->comments;
    // $comments = Post::find(2)->comments;
    // $comments = Post::find(3)->comments;
    // return $comments;

     // get post from comment model
    // $comment = Comment::find(1);
    // $post = Comment::find(1)->post;
    // $post = Comment::find(2)->post;
    // $post = Comment::find(3)->post;
    // $post = Comment::find(4)->post;
    // $post = Comment::find(5)->post;
    // $post = Comment::find(6)->post;
    // return $post;

    // get all posts with comments 
    // $posts = Post::with('comments')->get();
    // return $posts;

    // To get categories using post model
    // $categories = Post::find(1)->categories;
    // $categories = Post::find(2)->categories;
    // $categories = Post::find(3)->categories;
    // $posts = Post::with('categories')->get();
    // return $categories;

    // To get posts using category model
    $posts = Category::find(1)->posts;
    $posts = Category::find(2)->posts;

    $categories = Category::with('posts')->get();
    return $categories;

    return view('welcome');
});
