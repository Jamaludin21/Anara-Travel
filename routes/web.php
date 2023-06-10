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

Route::get('/', function () {
    return view('index');
});

Route::get('/form_participant', function () {
    return view('Form.participant');
});

Route::get('/form_group', function () {
    return view('Form.group');
});

Route::get('/form_payment', function () {
    return view('Form.payment');
});

Route::get('/view_participant', function () {
    return view('View.participant');
});

Route::get('/view_group', function () {
    return view('View.group');
});

Route::get('/view_payment', function () {
    return view('View.payment');
});