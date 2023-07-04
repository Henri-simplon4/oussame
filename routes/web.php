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

Route::post('/layouts/create', [EleveController::class, 'create'])->name('eleves.create');
Route::get('/layouts/liste', [EleveController::class, 'liste'])->name('eleves.liste');
Route::delete('/layouts/{eleve}', [EleveController::class, 'destroy'])->name('eleve.delete');

Route::put('/layouts/{eleve}', [EleveController::class, 'update'])->name('eleve.update');
Route::get('/layouts/edit', [EleveController::class, 'edit'])->name('eleve.edit');
// Route::get('/layouts/{eleve}', [EleveController::class, 'show'])->name('eleve.show');


