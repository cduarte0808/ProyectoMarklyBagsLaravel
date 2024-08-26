<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get("productos/create", "App\Http\Controllers\ProductosController@create")->name("productos.create");
    Route::post("productos/store", "App\Http\Controllers\ProductosController@store")->name("productos.store");
    Route::get("productos/index", "App\Http\Controllers\ProductosController@index")->name("productos.index");
    Route::put("productos/update/{id}", "App\Http\Controllers\ProductosController@update")->name("productos.update");
    Route::get("productos/{id}", "App\Http\Controllers\ProductosController@edit")->name("producto.edit");
    Route::delete("productos/eliminar/{id}", "App\Http\Controllers\ProductosController@delete")->name("producto.delete");

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/tokens/create', function (Request $request) {
        $token = $request->user()->createToken($request->token_name);
     
        return ['token' => $token->plainTextToken];
    });
});

Route::get("marklybags/home", "App\Http\Controllers\HomeController@home")->name("marklybags.home");
Route::get("marklybags/bags", "App\Http\Controllers\BagsController@home")->name("marklybags.bags");
Route::get("marklybags/accesories", "App\Http\Controllers\AccesoriesController@home")->name("marklybags.accesories");
Route::get("marklybags/blog", "App\Http\Controllers\BlogController@home")->name("marklybags.blog");
Route::get("marklybags/contacto", "App\Http\Controllers\ContactoController@home")->name("marklybags.contacto");

require __DIR__.'/auth.php';


