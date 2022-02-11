<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\KategoriesController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\DashboardController;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/cart', function () {
    return view('dashboard.user.cart');
});

Route::prefix('user')->name('user.')->group(function(){
    Route::middleware(['guest:web'])->group(function(){
        Route::view('/login', 'dashboard.user.login')->name('login');
        Route::view('/register', 'dashboard.user.register')->name('register');
        Route::post('/create',[UserController::class,'create'])->name('create');
        Route::post('/dologin',[UserController::class,'doLogin'])->name('dologin');
    });

    Route::middleware(['auth:web'])->group(function(){
        Route::view('/home', 'dashboard.user.home')->name('home');
        Route::post('/logout',[UserController::class,'logout'])->name('logout');
    });
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['guest:admin'])->group(function(){
        Route::view('/login', 'dashboard.admin.login')->name('login');
        Route::post('/dologin',[AdminController::class,'doLogin'])->name('dologin');
    });

    Route::middleware(['auth:admin'])->group(function(){
        Route::view('/home', 'dashboard.admin.dashboard')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
    });
});

// Routing Member
Route::prefix('member')->name('member.')->group(function(){
    Route::group(['middleware' => ['auth:admin']], function(){
        Route::get('/member',[MemberController::class,'index'])->name('index');
        Route::get('/tambah',[MemberController::class,'tambah'])->name('tambah');
        Route::post('/create',[MemberController::class,'create'])->name('create');
        Route::get('/edit/{id}', [MemberController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[MemberController::class,'update'])->name('update');
        Route::get('/delete/{id}',[MemberController::class,'delete'])->name('delete');
    });
});


// Routing Kategori
Route::prefix('kategori')->name('kategori.')->group(function(){
    Route::group(['middleware' => ['auth:admin']], function(){
        Route::get('/kategori',[KategoriesController::class,'index'])->name('index');
        Route::get('/tambah',[KategoriesController::class,'tambah'])->name('tambah');
        Route::post('/create',[KategoriesController::class,'create'])->name('create');
        Route::get('/edit/{id}', [KategoriesController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[KategoriesController::class,'update'])->name('update');
        Route::get('/delete/{id}',[KategoriesController::class,'delete'])->name('delete');
    });
});

// Routing Produk
Route::prefix('produk')->name('produk.')->group(function(){
    Route::group(['middleware' => ['auth:admin']], function(){
        Route::get('/produk',[ProdukController::class,'index'])->name('index');
        Route::get('/tambah',[ProdukController::class,'tambah'])->name('tambah');
        Route::post('/create',[ProdukController::class,'create'])->name('create');
        Route::get('/edit/{id}', [ProdukController::class,'edit'])->name('edit');
        Route::post('/update/{id}',[ProdukController::class,'update'])->name('update');
        Route::get('/delete/{id}',[ProdukController::class,'delete'])->name('delete');
    });
});
