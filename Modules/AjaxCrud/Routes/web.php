<?php
use Modules\AjaxCrud\Http\Controllers\AjaxCrudController;
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

Route::prefix('ajaxcrud')->group(function() {
    Route::get('/', [AjaxCrudController::class, 'index'])->name('ajaxCrud.index');
    Route::get('/insert', [AjaxCrudController::class, 'create'])->name('ajaxCrud.insert');
    Route::post('insert/save', [AjaxCrudController::class, 'store'])->name('ajaxCrud.store');
    Route::put('update', [AjaxCrudController::class, 'update'])->name('ajaxCrud.update');

});
