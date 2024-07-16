<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;






/** To login and Registation

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

require __DIR__.'/auth.php';
*/


Route::get('/',[MemberController::class,'index'])->name('home'); 
Route::get('/home',[MemberController::class,'index'])->name('home'); 
Route::get('/add',[MemberController::class,'create'])->name('add');  
Route::post('/add_member',[MemberController::class,'store'])->name('add_member');  
Route::get('/view_member/{id}',[MemberController::class,'show'])->name('view_member');  
Route::get('/update/{id}',[MemberController::class,'edit'])->name('update');  
Route::put('/update_member/{id}',[MemberController::class,'update'])->name('update_member');  
Route::put('/update_member/{id}',[MemberController::class,'update'])->name('update_member');  
Route::delete('/delete_member',[MemberController::class,'destroy'])->name('delete_member');  
