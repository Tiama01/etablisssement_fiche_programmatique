<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\ModuleController;
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

    return view('home');

});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/enseignts/index', [EnseignantController::class, 'index'])->name('enseignant.index');
Route::post('/enseignants/store', [EnseignantController::class, 'store'])->name('enseignant.store');
Route::get('/enseigants/create', [EnseignantController::class, 'create'])->name('enseignant.create');
Route::get('/enseigants/cours', [EnseignantController::class, 'cours'])->name('enseignant.cours');
Route::delete('/enseigants/delete/{id}', [EnseignantController::class, 'delete'])->name('enseignant.delete');
Route::get('/enseigants/edit/{id}', [EnseignantController::class, 'edit'])->name('enseignant.edit');
Route::put('/enseigants/update/{id}', [EnseignantController::class, 'update'])->name('enseignant.update');

Route::get('/modules/create', [ModuleController::class, 'create'])->name('module.create');
Route::post('/modules/store', [ModuleController::class, 'store'])->name('module.store');
Route::get('/modules/index', [ModuleController::class, 'index'])->name('module.index');
Route::get('/modules/fiche', [ModuleController::class, 'fiche'])->name('module.fiche');


// Auth::routes();



// /*------------------------------------------

// --------------------------------------------

// All Normal Users Routes List

// --------------------------------------------

// --------------------------------------------*/

// Route::middleware(['auth', 'user-access:user'])->group(function () {


// Route::get('/enseigants/index', [EnseignantController::class, 'index'])->name('enseignant.index');
// Route::get('/enseigants/create', [EnseignantController::class, 'create'])->name('enseignant.create');
// Route::get('/enseigants/cours', [EnseignantController::class, 'cours'])->name('enseignant.cours');


//     // Route::get('/home', [HomeController::class, 'index'])->name('home');

// });






// /*------------------------------------------

// --------------------------------------------

// All Admin Routes List

// --------------------------------------------

// --------------------------------------------*/

// Route::middleware(['auth', 'user-access:admin'])->group(function () {


//     Route::get('/enseigants/index', [EnseignantController::class, 'index'])->name('enseignant.index');
//     Route::get('/enseigants/create', [EnseignantController::class, 'create'])->name('enseignant.create');
//     Route::get('/enseigants/cours', [EnseignantController::class, 'cours'])->name('enseignant.cours');

//     // Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

// });



// /*------------------------------------------

// --------------------------------------------

// All Admin Routes List

// --------------------------------------------

// --------------------------------------------*/

// Route::middleware(['auth', 'user-access:manager'])->group(function () {



//     Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('enseignant.create');

// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\EnseignantController::class, 'index'])->name('enseignant.index');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\EnseignantController::class, 'index'])->name('enseignant.index');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\EnseignantController::class, 'index'])->name('enseignant.index');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
