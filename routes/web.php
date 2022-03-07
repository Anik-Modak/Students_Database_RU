<?php
use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::class, 'index'])->name('students.index');
Route::get('/create', [StudentController::class, 'create'])->name('students.create');
Route::post('', [StudentController::class, 'store'])->name('students.store');
Route::get('/{student}/show', [StudentController::class, 'show'])->name('students.show');
Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/{id}', [StudentController::class, 'destroy'])->name('students.destroy');