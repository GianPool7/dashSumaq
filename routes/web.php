<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/',[HomeController::class,'home']);

// Route::get('/', function () {
//     return view('inicio');
// });

Route::get('/a', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

// para poner restriciones en back end y dirigir a pagina solo de ellos
route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);

//categorias
//en el admin controller , se agrega las clases para poner funciones
//
//
route::get('view_category',[AdminController::class,'view_category'])->middleware(['auth','admin']);
route::post('add_category',[AdminController::class,'add_category'])->middleware(['auth','admin']);
route::get('tcategory',[AdminController::class,'tcategory'])->middleware(['auth','admin']);
route::get('cdelete/{id}',[AdminController::class,'cdelete'])->middleware(['auth','admin']);
route::get('cedit/{id}',[AdminController::class,'cedit'])->middleware(['auth','admin']);
route::post('update_category/{id}',[AdminController::class,'update_category'])->middleware(['auth','admin']);

//proveedor
//
//
route::get('add_proveedor',[AdminController::class,'add_proveedor'])->middleware(['auth','admin']);
route::post('insert_proveedor',[AdminController::class,'insert_proveedor'])->middleware(['auth','admin']);
route::get('tproveedor',[AdminController::class,'tproveedor'])->middleware(['auth','admin']);


//Productos
//
//

route::get('add_producto',[AdminController::class,'add_producto'])->middleware(['auth','admin']);
route::post('agregar_producto',[AdminController::class,'agregar_producto'])->middleware(['auth','admin']);
route::get('tproducto',[AdminController::class,'tproducto'])->middleware(['auth','admin']);
route::get('pdelete/{id}',[AdminController::class,'pdelete'])->middleware(['auth','admin']);


//PRUEBA

route::get('prueba',[AdminController::class,'prueba'])->middleware(['auth','admin']);




