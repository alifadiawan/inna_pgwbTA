<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MadminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\daftarController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\tabelmasterController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\futsalController;
use App\Http\Controllers\danceController;
use App\Http\Controllers\pmrController;
use App\Http\Controllers\basketController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\InboxController;

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
route::resource('daftar', daftarController::class);
route::resource('customer_service', serviceController::class);
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('logout', [loginController::class, 'logout']);

route::resource('/', welcomeController::class);


route::middleware('auth')->group(function ()  {
    route::resource('admin', MadminController::class);
    route::resource('siswa', siswaController::class);
    route::resource('futsal', futsalController::class);
    route::resource('basket', basketController::class);
    route::resource('pmr', pmrController::class);
    route::resource('dance', danceController::class);
    route::resource('tabelmaster', tabelmasterController::class);
    route::resource('inbox', InboxController::class);
    Route::get('preview', [adminController::class, 'preview'])->name('admin.preview');
    Route::get('/admin/{id}/detail', [adminController::class, 'tambah_deskripsi'])->name('admin.tambahdeskripsi');

    Route::get('/futsal/{id}/hapus', [futsalController::class, 'hapus'])->name('futsal.hapus');
    Route::get('/basket/{id}/hapus', [basketController::class, 'hapus'])->name('basket.hapus');
    Route::get('/dance/{id}/hapus', [danceController::class, 'hapus'])->name('dance.hapus');
    Route::get('/pmr/{id}/hapus', [pmrController::class, 'hapus'])->name('pmr.hapus');
});

Route::get('/editview', function(){
    return view('editview');

});

Route::get('/customer_service', function(){
    return view('customer_service');

});
Route::get('/masteradmin', function(){
    return view('masteradmin');

});
Route::get('/inbox', function(){
    return view('inbox');

});
