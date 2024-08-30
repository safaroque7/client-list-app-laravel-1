<?php

use App\Models\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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
    $client = Client::all();
    return view('welcome', [
        'clients'=> $client,
    ]);
});

Route::get('/back-hand', [ClientController::class, 'backHand']);
Route::post('/store', [ClientController::class, 'ourFileStore'])->name('store');
Route::get('/edit/{id}', [ClientController::class, 'editFile'])->name('edit');
Route::post('/update/{id}', [ClientController::class, 'updateFile'])->name('update');
Route::get('/delete/{id}', [ClientController::class, 'deleteFile'])->name('delete');
Route::get('/single-view/{id}', [ClientController::class, 'singleView'])->name('single');