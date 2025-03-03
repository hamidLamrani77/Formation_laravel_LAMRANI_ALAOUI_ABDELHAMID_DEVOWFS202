<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});
Route::view('/about','about');
Route::view('/contact','contact');
Route::view('/posts','posts');

Route::get('/posts/{id}', [HomeController::class, 'article']);

Route::get('/Layouts', function () {
    return view('Layouts');
});

// Route::get('/posts/{id}/{livre}', function ($id, $livre) {
//     $posts = [
//         1 => ['title' => 'Laravel'],
//         2 => ['title' => 'ReactJS']
//     ];

//     return view('posts.show', [
//         'title' => $posts[$id]['title'] ?? 'Unknown Post',
//         'livre' => $livre
//     ]);
// });