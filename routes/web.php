<?php

use App\Http\Controllers\TrainingController;
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
    return view('welcome');
});

Route::get('training', [TrainingController::class, 'index'])->name('training');
Route::get('profile', [TrainingController::class, 'profile'])->name('profile');
Route::get('contactus', [TrainingController::class, 'contactus'])->name('contactus');
Route::get('blog', [TrainingController::class, 'blog'])->name('blog');
Route::get('aboutus', [TrainingController::class, 'aboutus'])->name('aboutus');
