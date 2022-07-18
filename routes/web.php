<?php

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

Route::get('/', function () { return view('sites/index/index'); });
Route::get('/about', function (){ return view('sites/about/aboutus'); });
Route::get('/enroll', function (){ return view('sites/enroll'); });
Route::get('/about/sambutan', function (){ return view('sites/about/sambutan'); });
Route::get('/about/sejarah', function (){ return view('sites/about/sejarah'); });
Route::get('/about/mars', function (){ return view('sites/about/mars'); });
Route::get('/about/kebijakan', function (){ return view('sites/about/kebijakan'); });
Route::get('/about/siapa-santo-yoseph', function (){ return view('sites/about/whoissanyo'); });
Route::get('/about/visi-misi', function (){ return view('sites/about/visi_misi'); });
Route::get('/about/filosofis', function (){ return view('sites/about/filosofis'); });
Route::get('/about/pedoman', function (){ return view('sites/about/pedoman'); });

Route::get('/home/educational', function (){ return view('sites/index/educational'); });
Route::get('/home/teacher', function (){ return view('sites/index/teacher'); });
Route::get('/home/ekskul', function (){ return view('sites/index/ekskul'); });
Route::get('/home/live_in', function (){ return view('sites/index/live_in'); });

Route::get('/login', function (){ return view('sites/login'); });
