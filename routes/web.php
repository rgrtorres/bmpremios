<?php

use App\Http\Controllers\admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\admin\NomineeController;
use App\Http\Controllers\admin\SiteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NominessController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\PagesController;
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

Route::get('/', [CategoryController::class, 'index']);
Route::get('/poll/{idcategory}/{name}', [NominessController::class, 'index']);
Route::post('/poll/vote', [VoteController::class, 'store']);

//admin
Route::prefix('/admin')->group(function () {
    Route::prefix('/login')->group(function () {
        Route::get('/', [UserController::class, 'login'])->name('admin.login');
        Route::post('/verify', [UserController::class, 'auth'])->name('admin.auth');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.index');
        Route::get('/site', [SiteController::class, 'index'])->name('admin.site');
        Route::post('/site/update', [SiteController::class, 'update'])->name('admin.site.update');

        Route::prefix('/categories')->group(function () {
            Route::get('/', [AdminCategoryController::class, 'index'])->name('admin.categories');

            Route::get('/add', [AdminCategoryController::class, 'add'])->name('admin.categories.add');
            Route::post('/add/store', [AdminCategoryController::class, 'store'])->name('admin.add.category.store');

            Route::get('/edit/{idcategory}', [AdminCategoryController::class, 'edit'])->name('admin.category.edit');
            Route::post('/edit/update', [AdminCategoryController::class, 'update'])->name('admin.category.update');
            Route::delete('/delete/{idcategory}', [AdminCategoryController::class, 'delete'])->name('admin.category.delete');
        });

        Route::prefix('/nominess')->group(function () {
            Route::get('/', [NomineeController::class, 'index'])->name('admin.nominess');

            Route::get('/add', [NomineeController::class, 'add'])->name('admin.nominess.add');
            Route::post('/add/store', [NomineeController::class, 'store'])->name('admin.add.nominess.store');

            Route::get('/edit/{idnominee}', [NomineeController::class, 'edit'])->name('admin.nominess.edit');
            Route::post('/edit/update', [NomineeController::class, 'update'])->name('admin.nominess.update');
        });

        Route::get('/logout', [UserController::class, 'logout'])->name('admin.logout');
    });
});


// olha o wpp kakakka cai nesse erro ai tentando fazer essa poha, e nao consegui achar, nao sei de onde esta puxando esse site.
// o erro é na rota


Route::get('/premio', [PagesController::class, 'index'])->name('site.premio');
Route::get('/edicoes', [PagesController::class, 'index'])->name('site.edicoes');
Route::get('/redes_sociais', [PagesController::class, 'index'])->name('site.redes_sociais');
Route::get('/criador', [PagesController::class, 'index'])->name('site.criador');
Route::get('/patrocinadores', [PagesController::class, 'index'])->name('site.patrocinadores');
