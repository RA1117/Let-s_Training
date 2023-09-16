<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\GraphController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\BodyController;
use App\Http\Controllers\MusicController;
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

Route::controller(BodyController::class)->middleware(['auth'])->group(function(){
    Route::get('/bodies', 'index')->name('body_index');
    Route::get('/bodies/{body}', 'show')->name('body_show');
});

Route::controller(GraphController::class)->middleware(['auth'])->group(function(){
    Route::get('/records/graphs/weight_graph', 'weight_index')->name('graph_weight_index');
    Route::get('/records/graphs/diet_graph', 'diet_index')->name('graph_diet_index');
    Route::get('/records/graphs/run_graph', 'run_index')->name('graph_run_index');
    Route::get('/records/graphs/training_graph', 'graph_training_top')->name('graph_training_top');
    Route::get('/records/graphs/training_graph/{training}', 'graph_training_index')->name('graph_training_index');
});

Route::controller(MusicController::class)->middleware(['auth'])->group(function(){
    Route::get('/music', 'index')->name('music_index');
    Route::post('/music', 'store')->name('music_store');
    Route::get('/music/create', 'create')->name('music_create');
    Route::get('/music/{music}', 'show')->name('music_show');
    Route::post('/music/{music}', 'store_2')->name('music_store_2');
    Route::get('/music/{music}/register', 'register')->name('music_register');
    Route::get('/music/{music}/{comment}', 'detail')->name('music_detail');
    Route::post('/music/{comment}/nice', 'nice')->name('music_nice');
    Route::post('/music/{comment}/unnice', 'unnice')->name('music_unnice');
    Route::put('/music/{music}', 'update')->name('update');
});

Route::controller(PartController::class)->middleware(['auth'])->group(function(){
    Route::get('/parts/{part}', 'index')->name('part_index');
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
    Route::get('/trainings/{training}', 'show')->name('training_show');
    //Route::get('records/graphs/diet_graph', 'diet_index')->name('graph_diet_index');
});

Route::get('/users/{user}', [UserController::class,'index'])->middleware("auth");

require __DIR__.'/auth.php';
