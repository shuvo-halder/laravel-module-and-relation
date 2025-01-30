<?php
use Illuminate\Support\Facades\Route;
use Modules\Blogs\Http\Controllers\BlogsController;
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

Route::prefix('blogs')->group(function() {
    Route::get('/', 'BlogsController@index');
    Route::get('/create', 'BlogsController@create');
    Route::post('/create/submit', 'BlogsController@store')->name('blogs.store');
});
