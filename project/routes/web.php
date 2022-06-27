<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
         UserController,
         viacepController
};

Route::get("/", function(){
    return view('welcome');
});

Route::get("/users", [UserController::class, 'index']) -> name('users.index');

Route::get('/users/{$id}', [Usercontroller::class, 'idGet']) -> name('users.idGet');

Route::get('/viacep', [viacepController::class, 'index']) -> name('viacep.index');

Route::post('/viacep', [viacepController::class, 'index']) -> name('viacep.index.post');

Route::get('/viacep/{cep}', [viacepController::class, 'show'])->name('viacep.show');