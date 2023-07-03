<?php
use App\http\Controllers\henriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\createController;
use App\Http\Controllers\EleveController;
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
    return view('welcome');
});

route::get('/formulaire', [henriController::class, 'method1']);
 
// Route::post('/post/create', [createController::class, 'create']);
// Route::get('/post/liste', [createController::class, 'liste']);

Route::post('/eleves/create', [EleveController::class, 'create'])->name('eleves.create');
Route::get('/eleves/liste', [EleveController::class, 'liste'])->name('eleves.liste');


