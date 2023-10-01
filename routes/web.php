<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\PaymentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

require __DIR__ . '/auth.php';

// Route::get('/', function () {
//     return view('index');
// })->middleware(['auth'])->name('index');
Route::get('/', [Controller::class, 'index'])->middleware(['auth'])->name('dashboard');



Route::get('/form_participant', function () {
    return view('Form.participant');
})->middleware(['auth']);
Route::post('/form_participant', [ParticipantController::class, 'store'])->middleware(['auth'])->name('participant_add');
Route::get('/view_participant', [ParticipantController::class, 'index'])->middleware(['auth'])->name('participant_view');
Route::post('/view_participant/{id}', [ParticipantController::class, 'store'])->middleware(['auth'])->name('participant_edit');
Route::get('/show_participant', [ParticipantController::class, 'show'])->middleware(['auth'])->name('participant_show');
Route::post('/delete_participant', [ParticipantController::class, 'destroy'])->middleware(['auth'])->name('participant_delete');
// Route::resource('Form', ParticipantController::class)->middleware(['auth']);

Route::get('/form_group', function () {
    return view('Form.group');
})->middleware(['auth']);
Route::post('/form_group', [GroupController::class, 'store'])->middleware(['auth'])->name('group_add');
Route::get('/view_group', [GroupController::class, 'index'])->middleware(['auth'])->name('group_view');
Route::post('/view_group/{id}', [GroupController::class, 'store'])->middleware(['auth'])->name('group_edit');
Route::get('/show_group', [GroupController::class, 'show'])->middleware(['auth'])->name('group_show');
Route::post('/delete_group', [GroupController::class, 'destroy'])->middleware(['auth'])->name('group_delete');

Route::get('/form_payment', function () {
    return view('Form.payment');
})->middleware(['auth']);
Route::post('/form_payment', [PaymentController::class, 'store'])->middleware(['auth'])->name('payment_add');
Route::get('/view_payment', [PaymentController::class, 'index'])->middleware(['auth'])->name('payment_view');
Route::get('/form_payment', [PaymentController::class, 'get_data'])->middleware(['auth'])->name('get_group');
// Route::get('/form_payment', [PaymentController::class, 'show_data'])->middleware(['auth'])->name('show_group');
Route::post('/view_payment/{id}', [PaymentController::class, 'store'])->middleware(['auth'])->name('payment_edit');
Route::get('/show_payment', [PaymentController::class, 'show'])->middleware(['auth'])->name('payment_show');
Route::post('/delete_payment', [PaymentController::class, 'destroy'])->middleware(['auth'])->name('payment_delete');



// // Route::post('/form_participant', function () {
// //     return view('View.participant');
// // }, [ParticipantController::class, 'store'])->middleware(['auth'])->name('participant_add');
// Route::get('/form_participant', [ParticipantController::class, 'index'])->middleware(['auth'])->name('participant_index');
// Route::post('/form_participant/save', [ParticipantController::class, 'store'])->middleware(['auth'])->name('participant_add');






// Route::get('/view_group', function () {
//     return view('View.group');
// });

// Route::get('/view_payment', function () {
//     return view('View.payment');
// });