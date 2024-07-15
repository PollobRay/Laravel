<?php

use Illuminate\Support\Facades\Route;

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


//              <-----------  Making Routes  ----------------> 


//    >>> Making 'localhost/about'  route <<<
Route::get('/about',function()  // It is 'localhost/about' route
{
    return view('about');   // It is about page
});
// same as
//Route::view('about','/about'); // First about is file name second about is route


//            <<  Route Parameter   >>
//      >>> Making 'localhost/post/10' route
Route::get('/post/{id}',function(int $id){
        //  when '<id? >' means $id=null also valid
    return 'User '.$id;
})-> whereNumber('id');

//  (Multiple Parameter)  >>> Making 'localhost/post/10/comment/helloworld' route 
Route::get('/post/{id}/comments/{comment?}',function(int $id, string $comment=null){
    //  when '<id? >' means $id=null also valid
return 'User '.$id.' '.$comment;
})-> whereNumber('id')->whereAlpha('comment');
