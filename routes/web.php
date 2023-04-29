<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserBlogController;

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
    return view('index');
})->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/pricing', function () {
    return view('guest.pricing');
})->name('pricing');

Route::get('/careers', function () {
    return view('guest.careers');
})->name('careers');

Route::get('/about', function () {
    return view('guest.about');
})->name('about');

Route::middleware('auth')->group(function () {
    Route::get('/my-blogs', [UserBlogController::class, 'index'])->name('myblog.index');
    Route::get('/my-blogs/create', [UserBlogController::class, 'create'])->name('myblog.create');
    Route::post('/my-blogs/store', [UserBlogController::class, 'store'])->name('myblog.store');
    Route::get('/my-blogs/edit/{id}', [UserBlogController::class, 'edit'])->name('myblog.edit');
    Route::post('/my-blogs/update/{id}', [UserBlogController::class, 'update'])->name('myblog.update');
    Route::get('/my-blogs/destroy/{id}', [UserBlogController::class, 'destroy'])->name('myblog.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/2fa', [ProfileController::class, 'qr'])->name('profile.qr');
});

require __DIR__.'/auth.php';
