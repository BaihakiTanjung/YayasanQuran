<?php

use Illuminate\Support\Facades\Route;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

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
    return view('pages.main');
});
Route::get('/admin', function () {
    return view('admin.pages.dashboard');
});
Route::get('/admin/slider', function () {
    return view('admin.pages.slider');
});
Route::get('/admin/about', function () {
    return view('admin.pages.about');
});
Route::get('/admin/qoutes', function () {
    return view('admin.pages.qoutes');
});
Route::get('/admin/blog', function () {
    return view('admin.pages.blog');
});
