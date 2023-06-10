<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PborrowingController;

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
    return view('LandingPage');
});

Route::get('/', [AuthController::class, 'landingpage'])->name('routeLP.landing');

Route::get('/login', [AuthController::class, 'login'])->name('route.login');
Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');

Route::get('/register', [AuthController::class, 'register'])->name('route.register');
Route::post('register', [AuthController::class, 'storeRegister'])->name('store.register');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('IsLogin')->group(function () {

    // dashboard
    Route::prefix('')->name('masyarakat.')->middleware(['auth:petugas,masyarakat'])->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });

    // User
    Route::get('/masyarakat', [MasyarakatController::class, 'index'])->name('routeM.index');
    Route::get('/masyarakat/detail/{id_masyarakat}', [MasyarakatController::class, 'show'])->name('routeM.show');
    Route::get('/masyarakat/destroy/{id_masyarakat}', [MasyarakatController::class, 'destroy'])->name('routeM.destroy');
    Route::post('/masyarakat/search', [MasyarakatController::class, 'search'])->name('routeM.search');

    // book
    Route::get('/book', [BookController::class, 'index'])->name('routeB.index');
    Route::post('/book', [BookController::class, 'store'])->name('routeB.store');
    Route::get('/book/detail/{id_book}', [BookController::class, 'show'])->name('routeB.show');
    Route::patch('/book/{id_book}', [BookController::class, 'update'])->name('routeB.update');
    Route::post('/book/search', [BookController::class, 'search'])->name('routeB.search');
    Route::get('/book/destroy/{id_book}', [BookController::class, 'destphproy'])->name('routeB.destroy');
    // Route::put('/book/detail/{id}', [BookController::class, 'verif'])->name('verif');

    // borrowing
    Route::get('/borrowing', [BorrowingController::class, 'index'])->name('routeBR.index');
    Route::put('/borrowing/{id_borrowing}', [BorrowingController::class, 'store'])->name('routeBR.store');
    Route::get('/borrowing/detail/{id_borrowing}', [BorrowingController::class, 'show'])->name('routeBR.show');
    Route::post('/borrowing/search', [BorrowingController::class, 'search'])->name('routeBR.search');

    // PetugasBorrowing
    Route::get('/pborrowing', [PborrowingController::class, 'index'])->name('routePB.index');
    Route::put('/pborrowing/{id_pborrowing}', [PborrowingController::class, 'store'])->name('routePB.store');
    Route::get('/pborrowing/detail/{id_pborrowing}', [PborrowingController::class, 'show'])->name('routePB.show');
});

