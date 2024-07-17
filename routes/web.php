<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Home\HomeHeaderController;
use App\Http\Controllers\Home\HomeServiceController;
use App\Http\Controllers\Home\HomeVisionController;
use App\Http\Controllers\Home\HomeMessageController;
use App\Http\Controllers\Home\HomeFooterController;
use App\Http\Controllers\Home\BlogCategoryController;
use App\Http\Controllers\Home\BlogController;


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/test', function () {
    return view('admin.blogs.test');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'HomeMain')->name('home');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware(['auth'])->group(function () {

    //Admin All Routes
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
        Route::get('/admin/profile', 'profile')->name('admin.profile');
        Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
        Route::post('/store/profile', 'StoreProfile')->name('store.profile');
        Route::get('/change/password', 'ChangePassword')->name('change.password');
        Route::post('/update/password', 'UpdatePassword')->name('update.password');
    });


    //Home Header All Routes
    Route::controller(HomeHeaderController::class)->group(function () {
        Route::get('/home/header', 'HomeHeader')->name('home.header');
        Route::post('/update/header', 'UpdateHeader')->name('update.header');
    });

    //Home Service All Routes
    Route::controller(HomeServiceController::class)->group(function () {
        Route::get('/home/service', 'HomeService')->name('home.service');
        Route::post('/update/service', 'UpdateService')->name('update.service');
    });


    //Home Footer All Routes
    Route::controller(HomeFooterController::class)->group(function () {
        Route::get('/home/footer', 'HomeFooter')->name('home.footer');
        Route::post('/update/footer', 'UpdateFooter')->name('update.footer');
    });

    //Home Blog Category All Routes
    Route::controller(BlogCategoryController::class)->group(function () {
        Route::get('/all/blog/category', 'AllBlogCategory')->name('all.blog.category');
        Route::get('/add/blog/category', 'AddBlogCategory')->name('add.blog.category');
        Route::post('/store/blog/category', 'StoreBlogCategory')->name('store.blog.category');
        Route::get('/edit/blog/category/{id}', 'EditBlogCategory')->name('edit.blog.category');
        Route::post('/update/blog/category/{id}', 'UpdateBlogCategory')->name('update.blog.category');
        Route::get('/delete/blog/category/{id}', 'DeleteBlogCategory')->name('delete.blog.category');
    });
});

//Messages All Routes
Route::controller(MessageController::class)->group(function () {
    Route::get('/all/messages', 'AllMessages')->name('all.messages')->middleware('auth');
    Route::get('/delete/message/{id}', 'DeleteMessage')->name('delete.message')->middleware('auth');
    Route::get('/read/message/{id}', 'ReadMessage')->name('read.message')->middleware('auth');
    Route::post('/store/message', 'StoreMessage')->name('store.message');
});

//Home Message All Routes -- Contact
Route::controller(HomeMessageController::class)->group(function () {
    Route::get('/home/message', 'HomeMessage')->name('home.message')->middleware('auth');
    Route::post('/update/message', 'UpdateMessage')->name('update.message')->middleware('auth');
    Route::get('/contact', 'HomeContact')->name('home.contact');
});

//Home Vision All Routes -- About
Route::controller(HomeVisionController::class)->group(function () {
    Route::get('/home/vision', 'HomeVision')->name('home.vision')->middleware('auth');
    Route::post('/update/vision', 'UpdateVision')->name('update.vision')->middleware('auth');
    Route::get('/about', 'HomeAbout')->name('home.about');
});



// Blog All Route 
Route::controller(BlogController::class)->group(function () {
    Route::get('/all/blog', 'AllBlog')->name('all.blog')->middleware('auth');
    Route::get('/add/blog', 'AddBlog')->name('add.blog')->middleware('auth');
    Route::post('/store/blog', 'StoreBlog')->name('store.blog')->middleware('auth');
    Route::get('/edit/blog/{id}', 'EditBlog')->name('edit.blog')->middleware('auth');
    Route::post('/update/blog', 'UpdateBlog')->name('update.blog')->middleware('auth');
    Route::get('/delete/blog/{id}', 'DeleteBlog')->name('delete.blog')->middleware('auth');
    Route::get('/blog', 'HomeBlog')->name('home.blog');
    Route::get('/blog/details/{id}', 'BlogDetails')->name('blog.details');
    Route::get('/category/blog/{id}', 'CategoryBlog')->name('category.blog');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
