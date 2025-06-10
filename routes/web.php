<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\Banner1Controller;
use App\Http\Controllers\Banner2Controller;
use App\Http\Controllers\Banner3Controller;
use App\Http\Controllers\NamazController;
use App\Http\Controllers\NextOroshController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\BoardMemberController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WebInfoController;


Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/index', function () {
        return view('index');
    })->name('index');

});

Route::get('/user', [AdminController::class, 'index']);


Route::get('/admin', [AdminController::class, 'admin'])
    ->name('backend.index')
    ->middleware(['auth', 'admin']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/table', function () {
        return view('backend.tables-basic');
    })->name('backend.tables-basic');

    Route::get('/buttons', function () {
        return view('backend.ui-buttons');
    })->name('backend.ui-buttons');

    Route::get('/form', function () {
        return view('backend.form-layouts');
    })->name('backend.form-layouts');

    Route::get('/backend.index', function () {
        return view('backend.index');
    })->name('backend.index');


    Route::get('/backend/index', function () {
        return view('backend.index');
    })->name('backend.index');
    Route::get('/admin/history', [HistoryController::class, 'index'])->name('admin.history.index');
    Route::post('/admin/history', [HistoryController::class, 'update'])->name('admin.history.update');

    // Show all events
    Route::get('/next-orosh', [NextOroshController::class, 'index'])->name('nextorosh.index');

    // Show create form
    Route::get('/next-orosh/create', [NextOroshController::class, 'create'])->name('nextorosh.create');

    // Store data
    Route::post('/next-orosh', [NextOroshController::class, 'store'])->name('nextorosh.store');
    Route::get('/frontend/next-orosh', [NextOroshController::class, 'showFrontend'])->name('frontend.nextorosh');

    Route::get('/admin/web-info', [WebInfoController::class, 'index'])->name('admin.web_info.index');
    Route::post('/admin/web-info/{id}', [WebInfoController::class, 'update'])->name('admin.web_info.update');

    Route::prefix('admin/blog')->name('admin.blog.')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('index');
        Route::get('/create', [BlogController::class, 'create'])->name('create');
        Route::post('/store', [BlogController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [BlogController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [BlogController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('admin/board-members')->name('admin.board-members.')->group(function () {
        Route::get('/', [BoardMemberController::class, 'index'])->name('index');
        Route::get('/create', [BoardMemberController::class, 'create'])->name('create');
        Route::post('/store', [BoardMemberController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [BoardMemberController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [BoardMemberController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [BoardMemberController::class, 'destroy'])->name('destroy');
    });

    Route::get('/admin/namaz/edit', [NamazController::class, 'edit'])->name('namaz.edit');
    Route::post('/admin/namaz/update', [NamazController::class, 'update'])->name('namaz.update');

    // Banner 1
    Route::get('/admin/banner1', [Banner1Controller::class, 'create'])->name('banner1.create');
    Route::post('/admin/banner1', [Banner1Controller::class, 'store'])->name('banner1.store');

    // Banner 2
    Route::get('/admin/banner2', [Banner2Controller::class, 'create'])->name('banner2.create');
    Route::post('/admin/banner2', [Banner2Controller::class, 'store'])->name('banner2.store');

    // Banner 3
    Route::get('/admin/banner3', [Banner3Controller::class, 'create'])->name('banner3.create');
    Route::post('/admin/banner3', [Banner3Controller::class, 'store'])->name('banner3.store');

    // Combined banner
    Route::get('/admin/banner', [BannerController::class, 'create'])->name('banner.create');
    Route::post('/admin/banner', [BannerController::class, 'store'])->name('banner.store');
});












// Homepage with Namaz times from DB
Route::get('/', [NamazController::class, 'index'])->name('home');
Route::get('/about', [HistoryController::class, 'about'])->name('about');
// Admin panel routes


// Static pages
Route::view('/contact', 'contact')->name('contact');
Route::view('/course-details', 'course-details')->name('course-details');
Route::view('/our-courses', 'our-courses')->name('our-courses');
Route::view('/our-events', 'our-events')->name('our-events');
Route::view('/event-single', 'event-single')->name('event-single');
Route::view('/our-blog', 'our-blog')->name('our-blog');





