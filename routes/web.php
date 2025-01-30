<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    Artisan::call('route:clear');
    Artisan::call('route:cache');

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


Route::get('/user-details', [HomeController::class, 'index']);
// Route::get('dump-add', function(){
//     \App\Models\Location::create([
//         'uid' => 1,
//         'country_name' => 'india'
//     ]);
//     \App\Models\Location::create([
//         'uid' => 2,
//         'country_name' => 'usa'
//     ]);
//     \App\Models\Location::create([
//         'uid' => 3,
//         'country_name' => 'uk'
//     ]);
//     \App\Models\Location::create([
//         'uid' => 4,
//         'country_name' => 'russia'
//     ]);
//     \App\Models\Location::create([
//         'uid' => 5,
//         'country_name' => 'ama'
//     ]);
// });

// Route::get('add-location', function(){
//     $user = \factory(\App\Models\User::class)->create();
//     $user->location()->create([
//         'country_name' => 'india'
//     ]);
// });

Route::get('location', [HomeController::class, 'location']);

Route::get('/user-loc', [HomeController::class, 'locationes']);

// Route::get('/user-address', function(){
//     $users = \App\Models\User::with('location')->get();

//     return view('user.locationes',[
//         'users' => $users
//     ]);
// });

Route::get('/posts', [HomeController::class, 'Posts']);
// Route::get('tags/create', function(){
//     \App\Models\Tag::create([
//         'name' => 'Laravel3'
//     ]);
//     \App\Models\Tag::create([
//         'name' => 'PHP3'
//     ]);
//     \App\Models\Tag::create([
//         'name' => 'VUE3'
//     ]);
//     \App\Models\Tag::create([
//         'name' => 'Bootstrap3'
//     ]);
// });


require __DIR__.'/auth.php';



