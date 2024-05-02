<?php


use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/home', function () {
    return view('homepage');
});

Route::get('/post',[PostController::class,'index'])->name('posts.index');
Route::get('/post/create',[PostController::class,'create'])->name('posts.create');
Route::post('/post',[PostController::class,'store'])->name('posts.store');
Route::get('/post/{username}',[PostController::class,'show'])->name('posts.show');
Route::get('/posts/{username}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{username}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/post/{username}',[PostController::class,'destroy'])->name('posts.destroy');



Route::get('/comment',[CommentController::class,'index']);
Route::get('post/{username}/comment',[CommentController::class,'show'])->name('comments.show');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
