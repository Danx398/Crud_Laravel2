<?php

use App\Http\Controllers\animals;
use App\Models\animal;
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

/* Route::get('/', function () {
    return view('welcome');
});
 */
/* Rutas que van por la URL */
Route::get('/',[animals::class,'index'])->name('animales.index');
Route::get('/agregar',[animals::class,'create'])->name('animales.create');
Route::get('/edit/{id}',[animals::class,'edit'])->name('animales.edit');

/* Rutas que van a enviar datos de manera segura */
Route::post('/store',[animals::class,'store'])->name('animales.store');

/* Rutas que van a actualizar */
Route::put('/update/{id}',[animals::class, 'update'])->name('animales.update');

/* Rutas que van a eliminar */
Route::delete('/destroy/{id}',[animals::class, 'destroy'])->name('animales.destroy');