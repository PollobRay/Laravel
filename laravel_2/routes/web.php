<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;


Route::get('/',[MemberController::class,'index'])->name('home'); 
Route::get('/home',[MemberController::class,'index'])->name('home'); 
Route::get('/add',[MemberController::class,'create'])->name('add');  
Route::post('/add_member',[MemberController::class,'store'])->name('add_member');  
Route::get('/view_member/{id}',[MemberController::class,'show'])->name('view_member');  
Route::get('/update/{id}',[MemberController::class,'edit'])->name('update');  
Route::put('/update_member/{id}',[MemberController::class,'update'])->name('update_member');  
Route::put('/update_member/{id}',[MemberController::class,'update'])->name('update_member');  
Route::delete('/delete_member',[MemberController::class,'destroy'])->name('delete_member');  