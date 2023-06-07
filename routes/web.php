<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Utilisateurs;



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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/pass', function () {
//     $pass=bcrypt('uriel');
//     return $pass;
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    "middleware" => ["auth", "auth.admin"],
    'as' => 'admin.'
], function(){

    Route::group([
        "prefix" => "habilitations",
        'as' => 'habilitations.'
    ], function(){

        Route::get("/utilisateurs", Utilisateurs::class)->name("users.index");
        //Route::get("/rolesetpermissions", [UserController::class, "index"])->name("rolespermissions.index");
        //

    });
});
// Route::get('/habilitations/utilisateurs', [App\Http\Controllers\UserController::class, 'index'])
// ->name('utilisateurs')
// ->name('auth.admin');

