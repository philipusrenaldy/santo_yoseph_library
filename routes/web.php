<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('sites/index/index');
});
Route::get('/about', function () {
    return view('sites/about/aboutus');
});
Route::get('/enroll', function () {
    return view('sites/enroll');
});
Route::get('/about/sambutan', function () {
    return view('sites/about/sambutan');
});
Route::get('/about/sejarah', function () {
    return view('sites/about/sejarah');
});
Route::get('/about/mars', function () {
    return view('sites/about/mars');
});
Route::get('/about/kebijakan', function () {
    return view('sites/about/kebijakan');
});
Route::get('/about/siapa-santo-yoseph', function () {
    return view('sites/about/whoissanyo');
});
Route::get('/about/visi-misi', function () {
    return view('sites/about/visi_misi');
});
Route::get('/about/filosofis', function () {
    return view('sites/about/filosofis');
});
Route::get('/about/pedoman', function () {
    return view('sites/about/pedoman');
});

Route::get('/home/educational', function () {
    return view('sites/index/educational');
});
Route::get('/home/teacher', function () {
    return view('sites/index/teacher');
});
Route::get('/home/ekskul', function () {
    return view('sites/index/ekskul');
});
Route::get('/home/live_in', function () {
    return view('sites/index/live_in');
});

Route::get('/login', function () {
    return view('sites/login');
});

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('logout', [UserController::class, 'logout']);
    Route::get('/dashboard', [UserController::class, 'home']);

    Route::get('/library', [BookController::class, 'index']);
    Route::get('/book_detail/{schoolBook}', [BookController::class, 'show']);
    Route::get('/book', function () {
        return view('sites/dashboard/full_search_page');
    });
    Route::get('/book_read/{id}', [BookController::class, 'book_read']);
    Route::get('/library_form_page', [BookController::class, 'form_page']);
    Route::get('/library_form_page/{schoolBook}', [BookController::class, 'form_page_edit']);


    Route::post('/book-create', [BookController::class, 'store']);
    Route::put('/book-update/{schoolBook}', [BookController::class, 'update']);
    Route::get('/book-delete/{schoolBook}', [BookController::class, 'destroy']);

    Route::get('/student', [UserController::class, 'index']);
    Route::get('/student_form_page', [UserController::class, 'form_page']);
    Route::get('/student_form_page/{student}', [UserController::class, 'form_page_edit']);

    Route::post('/student', [UserController::class, 'store']);
    Route::put('/student-update/{student}', [UserController::class, 'update']);
    Route::get('/student-delete/{student}', [UserController::class, 'destroy']);
});