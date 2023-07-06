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
Route::get('/eleves/{id}delete', [EleveController::class, 'delete'])->name('eleve.delete');


Route::put('/eleves/{id}', [EleveController::class, 'update'])->name('eleves.update');
Route::get('/layouts/{id}edit', [EleveController::class, 'edit'])->name('eleves.edit');
// Route::get('/layouts/{eleve}', [EleveController::class, 'show'])->name('eleve.show');
