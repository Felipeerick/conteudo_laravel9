<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
         UserController,
         viacepController,
         PostController,
};

require __DIR__.'/auth.php';

Route::get("/", function(){
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//Rota do middleware(Filtro do que pode passar)
Route::middleware(['auth'])->group(function(){

//Rotas dos usuários
Route::get("/users", [UserController::class, 'index']) -> name('users.index');

Route::get('/users/created', [UserController::class, 'created']) -> name('users.created');

Route::post('/users/created',[UserController::class, 'store']) -> name('users.store');

Route::get('/users/{id}/edit', [UserController::class, 'editUsers'])->name('users.edit');

Route::get('/users/{id}/posts', [PostController::class, 'show'])->name('posts.show');

Route::delete('/users/{id}', [UserController::class, 'remove'])->name('users.delete');

Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

Route::get('/users/{id}', [UserController::class, 'idGet']) -> name('users.idGet');

 //********************************************************************************//

//Posts 
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');



//**********************************************************************************//
// WEB SERVICE 
Route::get('/viacep', [viacepController::class, 'index']) -> name('viacep.index');

Route::post('/viacep', [viacepController::class, 'index']) -> name('viacep.index.post');

Route::get('/viacep/{cep}', [viacepController::class, 'show'])->name('viacep.show');

});