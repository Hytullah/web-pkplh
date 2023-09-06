<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;
use Faker\Guesser\Name;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

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

// Route::get('/', function () {
//     return view('landing.index');
// });
// Route::resource('/', AdminController::class);

Route::middleware(['guest'])->group(function () {

// LANDING CONTROLLER
Route::resource('/', LandingController::class);

Route::get('pengaduan', [LandingController::class, 'pengaduan'])->name('landing.pengaduan');

Route::get('kegiatan', [LandingController::class, 'kegiatan'])->name('landing.kegiatan');

Route::get('rencana', [LandingController::class, 'rencana'])->name('landing.rencana');

Route::post('kirim', [LandingController::class, 'store'])->name('kirim');

// Route::get('formlogin', [LandingController::class, 'formlogin'])->name('admin.formlogin');


// SESSION CONTROLLER
Route::get('formlogin', [SessionController::class, 'index'])->name('admin.formlogin');

Route::post('formlogin', [SessionController::class, 'login'])->name('formlogin');


});


Route::middleware(['auth'])->group(function () {

Route::post('logout', [SessionController::class, 'logout'])->name('logout');

//ADMIN CONTROLLER
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

Route::get('datarencana', [AdminController::class, 'datarencana'])->name('datarencana');

Route::get('datakegiatan', [AdminController::class, 'datakegiatan'])->name('datakegiatan');

Route::get('datapengaduan', [AdminController::class, 'datapengaduan'])->name('datapengaduan');

Route::get('pengaduanpdf', [AdminController::class, 'pengaduanpdf'])->name('pengaduanpdf');

Route::get('deletepengaduan/{id}', [AdminController::class, 'destroyP'])->name('deletepengaduan');



//Rencana

Route::get('tambahrencana', [AdminController::class, 'create'])->name('tambahrencana');

Route::get('editrencana/{id}', [AdminController::class, 'edit'])->name('editrencana');

Route::post('simpandata', [AdminController::class, 'store'])->name('simpandata');

Route::post('updaterencana/{id}', [AdminController::class, 'update'])->name('updaterencana');

Route::get('deleterencana/{id}', [AdminController::class, 'destroy'])->name('deleterencana');

});
