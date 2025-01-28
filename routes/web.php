<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShinobiController;

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

Route::get('/iot', function () {
    return view('porto/mikrocontroller');
});
Route::get('/mikrotik', function () {
    return view('porto/mikrotik');
});

Route::get('/wordpress', function () {
    return view('porto/wordpress');
});

Route::get('/laravelreact', function () {
    return view('porto/laravelreact');
});

Route::get('/photoshop', function () {
    return view('porto/photoshop');
});

Route::get('/premiereae', function () {
    return view('porto/premiereae');
});

Route::get('/nodejs', function () {
    return view('porto/nodejs');
});

Route::get('/', function () {
    return view('dashboard');
});

 Route::get('tombol', function () {
     return view('tombol');
 });

Route::get('bacarelay', function () {
    return view('bacarelay');
});


Route::get('mycv', function () {
    return view('tampilpdf');
});

// Route::middleware(['guest'])->group(function(){
//     Route::get('/login', [SesiController::class,'index'])->name('login');
//     Route::post('/login', [SesiController::class,'login']);
// });



Route::get('/home',function(){
    return redirect('/admin');
});


// Route::middleware(['auth'])->group(function(){
//     Route::get('/admin',[AdminController::class,'index']);
//     Route::get('/controller',[AdminController::class, 'admin'])->middleware('userAkses:admin');
//     Route::get('/logout',[SesiController::class,'logout']);
// });

// Route::get('shinobi',[ShinobiController::class,'index']);
// Route::get('create',[ShinobiController::class,'create']);

