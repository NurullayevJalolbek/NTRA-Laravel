<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\Bookmarked;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdController::class, 'index'])->name("home");
Route::resource("ads", AdController::class);

Route::post('/bookmark/save',[Bookmarked::class, 'save']);

Route::post("/bookmark/delete", [Bookmarked::class, 'delete']);

Route::get('/search',[\App\Http\Controllers\AdController::class ,'find']);

Route::get('/user/profile', [\App\Http\Controllers\ProfileController::class, 'profile'])->name("user.profile");

Route::get('/user/profile/setting', [\App\Http\Controllers\ProfileController::class, 'edit'])->name("user.setting");

Route::patch('/profile/update', [\App\Http\Controllers\ProfileController::class, 'update'])->name("profile.updates");

Route::post('/profile/ad/delete', [\App\Http\Controllers\AdController::class, 'delete']);

Route::view('/lock-screen', 'ads.lock-screen');


Route::get('/logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect("/");
})->name("logout");




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/dashboard/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/dashboard/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
