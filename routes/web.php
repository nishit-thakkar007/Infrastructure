<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});



Route::get('/signup',[\App\Http\Controllers\SignUpController::class,'index']);
// Route::post('store', 'YourController@store')->name('store');


Route::post('/index',[\App\Http\Controllers\SignUpController::class,'store'])->name('store');
Route::post('/',[\App\Http\Controllers\SignUpController::class,'index'])->name('index');


Route::get('/home2', function () {
    return view('home2');
});

Route::get('/dashboard',[\App\Http\Controllers\SignUpController::class,'dashboard']);

Route::get('/log', function () {
    return view('login');
});
Route::get('/login', [\App\Http\Controllers\SignUpcontroller::class,'log']);
Route::post('/login',[\App\Http\Controllers\SignUpController::class,'login']);


Route::get('/logout', [\App\Http\Controllers\SignUpController::class, 'logout']);
Route::get('/organogram', [App\Http\Controllers\OrganogramController ::class,'org']);

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');



// ADmin

Route::get('/', function () {
    return view('login');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('manager');
});

Route::post('/register',[AdminController::class,'store'])->name('register');

Route::get('/civil-register', function () {
    return view('civil');
});

Route::post('/civil-register',[CivilController::class,'store'])->name('civil-register');

Route::get('/admin-login',[AdminController::class,'login_form']);
Route::post('/admin-login',[AdminController::class,'login'])->name('admin-login');
Route::get('/admin-logout',[AdminController::class,'logout']);

Route::get('/task',[TaskController::class,'index']);
Route::post('/task',[TaskController::class,'store'])->name('task');

Route::get('/material', function () {
    return view('material');
});
