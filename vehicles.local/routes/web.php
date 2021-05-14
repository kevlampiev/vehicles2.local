<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\VehicleTypesController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::group([
    'prefix'=>'admin',
    'namespace'=>'Admin'
],
function() {
    Route::get('/',[IndexController::class, 'index']);
    Route::get('/types',[VehicleTypesController::class, 'index'])->name('admin.vehicleTypes');
    Route::match(['post', 'get'],'/types/add',[VehicleTypesController::class, 'addType'])->name('admin.addType');
    Route::match(['post', 'get'],'/types/{type}/edit',[VehicleTypesController::class, 'editType'])->name('admin.editType');
    Route::match(['post', 'get'], '/types/{type}/delete',[VehicleTypesController::class, 'deleteType'])->name('admin.deleteType');
});

