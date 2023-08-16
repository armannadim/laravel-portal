<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FrontEndController;
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

/*Route::get('/', function () {
    return view('template.index');
});*/

/**
 * FRONTEND ROUTES
 */

Route::get('/', [FrontEndController::class, 'home'])->name('home');
Route::get('/blog', [FrontEndController::class,'blog'])->name('blog');
Route::get('/about', [FrontEndController::class,'about'])->name('about');
Route::get('/services', [FrontEndController::class,'services'])->name('services');
Route::get('/portfolio', [FrontEndController::class,'portfolio'])->name('portfolio');
Route::get('/contact', [FrontEndController::class,'contact'])->name('contact');
Route::get('/post/{slug}', [FrontEndController::class,'post'])->name('blog.details');

Auth::routes();

/**
 * ADMIN PANEL ROUTES
 */


Route::group(['prefix'=> 'admin', 'middleware' => ['auth']], function (){
//Route::group(['prefix'=> 'admin'], function (){
    Route::get('/dashboard', function (){
        return view('admin.dashboard.index');
    });

    Route::resource('category',\App\Http\Controllers\CategoryController::class);
    Route::resource('tag',\App\Http\Controllers\TagController::class);
    Route::resource('post',\App\Http\Controllers\PostController::class);
    Route::resource('user',\App\Http\Controllers\UserController::class);
    Route::get('profile/', '\App\Http\Controllers\UserController@profile')->name('user.profile');
    Route::post('profile/update', '\App\Http\Controllers\UserController@profile_update')->name('user.profile.update');
});


Route::get('/test', function (){
   $posts = \App\Models\Post::all();
   $id = 1;
   foreach($posts as $post){
       $post->image = "https://picsum.photos/id/".$id."/200/300.jpg";
       $post->save();
       $id++;
   }
   return $posts;
});
