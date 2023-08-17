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
Route::get('/news', [FrontEndController::class,'news'])->name('news');
Route::get('/about', [FrontEndController::class,'about'])->name('about');
Route::get('/services', [FrontEndController::class,'services'])->name('services');
Route::get('/activities', [FrontEndController::class,'activities'])->name('activities');
Route::get('/contact', [FrontEndController::class,'contact'])->name('contact');
Route::get('/post/{slug}', [FrontEndController::class,'post'])->name('blog.details');
Route::get('/members', [FrontEndController::class,'members'])->name('members');
Route::get('/governing_body', [FrontEndController::class,'governingBody'])->name('governing_body');
//Route::get('/become-member', [FrontEndController::class,'becomeMember'])->name('become-member');
Route::get('/membership-info', [FrontEndController::class,'membershipInfo'])->name('website.membership-info');
Route::get('/photo-gallery', [FrontEndController::class,'photogallery'])->name('website.photogallery');
Route::get('/faq', [FrontEndController::class,'faq'])->name('website.faq');
Route::get('/resources', [FrontEndController::class,'resources'])->name('website.resources');

Route::post('send_message',[FrontEndController::class,'send_message'] )->name('send_message');

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
    Route::resource('member',\App\Http\Controllers\MemberController::class);
    Route::resource('faq', \App\Http\Controllers\FaqController::class);

    Route::get('profile/', [\App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
    Route::post('profile/update', [\App\Http\Controllers\UserController::class, 'profile_update'])->name('user.profile.update');
    Route::get('setting', [\App\Http\Controllers\SettingController::class, 'edit'])->name('setting.index');
    Route::post('setting', [\App\Http\Controllers\SettingController::class, 'update'])->name('setting.update');
    Route::get('contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
    Route::get('contact/{id}', [\App\Http\Controllers\ContactController::class, 'show'])->name('contact.show');
    Route::delete('contact/{id}', [\App\Http\Controllers\ContactController::class, 'destroy'])->name('contact.destroy');
});

/*
Route::get('/test', function (){
   $posts = \App\Models\Post::all();
   $id = 1;
   foreach($posts as $post){
       $post->image = "https://picsum.photos/id/".$id."/200/300.jpg";
       $post->save();
       $id++;
   }
   return $posts;
});*/
