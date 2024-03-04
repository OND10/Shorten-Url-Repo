<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UrlBrieflyController;
use Illuminate\Support\Facades\App;
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

Route::get('/docs',function(){
    return view('dashboard.docs.doc');
})->name('docs');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/',[LoginController::class, 'logout'])->name('logout');
Route::get('/urls',[UrlBrieflyController::class,'index'])->name('dashboard.urls.index');
Route::post('/generate-shorten-links',[UrlBrieflyController::class,'create'])->name('generate.shorten.links');
Route::get('/{code}',[UrlBrieflyController::class,'show'])->name('show.shorten.url');

Route::get('/', function () {
    return view('welcome');
});
