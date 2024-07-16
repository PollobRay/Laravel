<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',[MemberController::class,'index'])->name('home'); 
Route::get('/add',[MemberController::class,'create'])->name('add');  
Route::post('/add_member',[MemberController::class,'store'])->name('add_member');  