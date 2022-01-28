<?php

use App\Http\Controllers\MainHumanResource;
use App\Http\Controllers\UpdateController;
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

Route::get('/offline', function () {
    return view('home.index');
});

/**Route::get('/', function () {
    return view('home.index');
});*/

Route::post('UpdateLogic', [UpdateController::class, 'UpdateLogic'])->name('UpdateLogic')->middleware("auth");

Route::get('dashboard', [MainHumanResource::class, 'MgtEmp'])->name('dashboard')->middleware("auth");

Route::get('/', [MainHumanResource::class, 'MgtEmp'])->middleware("auth");

require __DIR__ . '/hr.php';
require __DIR__ . '/proj.php';
require __DIR__ . '/auth.php';
require __DIR__ . '/inv.php';
