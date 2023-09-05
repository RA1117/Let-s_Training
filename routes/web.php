<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\GraphController;
use App\Http\Controllers\TrainingController;
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
    return view('welcome');
});


Route::controller(GraphController::class)->middleware(['auth'])->group(function(){
    Route::get('/records/graphs/weight_graph', 'weight_index')->name('graph_weight_index');
    Route::get('/records/graphs/diet_graph', 'diet_index')->name('graph_diet_index');
    Route::get('/records/graphs/training_graph', 'graph_training_top')->name('graph_training_top');
    Route::get('/records/graphs/training_graph/{training}', 'graph_training_index')->name('graph_training_index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(RecordController::class)->middleware(['auth'])->group(function(){
    Route::post('/records/create', 'new_store')->name('record.new_store');
    Route::get('/records/new_create', 'new_create')->name('record.new_create');
    Route::get('/records', 'index')->name('record.index');
    Route::post('/records', 'store')->name('record.store');
    Route::get('/records/create', 'create')->name('record.create');
    Route::get('/records/{record}', 'show')->name('record.show');
    //Route::get('/records/new_create', 'index')->name('record.new_create');
    //Route::post('/records/create', 'new_store')->name('record.new_store');
});

Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/posts', 'store')->name('store');
    Route::get('/posts/create', 'create')->name('create');
    Route::get('/posts/{post}', 'show')->name('show');
    Route::put('/posts/{post}', 'update')->name('update');
    Route::delete('/posts/{post}', 'delete')->name('delete');
    Route::get('/posts/{post}/edit', 'edit')->name('edit');
});

Route::controller(TrainingController::class)->middleware(['auth'])->group(function(){
    Route::get('/trainings', 'index')->name('training_index');
    //Route::get('records/graphs/diet_graph', 'diet_index')->name('graph_diet_index');
});

Route::get('/users/{user}', [UserController::class,'index'])->middleware("auth");

require __DIR__.'/auth.php';
