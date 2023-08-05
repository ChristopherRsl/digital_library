<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Book;

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
//get all
Route::get('/', [BookController::class, 'index'] );

//create book
Route::get('/books/create', [BookController::class, 'create'] )->middleware('auth');

//store book
Route::post('/books/create', [BookController::class, 'store'])->middleware('auth');

//get edit form
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->middleware('auth');

//update form
Route::put('/books/{book}', [BookController::class, 'update'])->middleware('auth');

//delete book
Route::delete('/books/{book}', [BookController::class, 'delete'])->middleware('auth');


//manage book
Route::get('/books/manage', [BookController::class, 'manage'])->middleware('auth');

//get specific
Route::get('/books/{book}', [BookController::class, 'show']);

//get export
Route::get('/books/{book}/download', [BookController::class, 'exportpdf'])->middleware('auth');

//show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//create register user
Route::post('/users', [UserController::class, 'register']);

//user logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//user login
Route::post('/users/auth', [UserController::class, 'auth']);