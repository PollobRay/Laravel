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


// ************************************************************
//            <<  Route Parameter   >>
// ************************************************************
//      >>> Making 'localhost/post/10' route
Route::get('/post/{id}',function(int $id){
        //  when '<id? >' means $id=null also valid
    return 'User '.$id;
})-> whereNumber('id');
/*
//  (Multiple Parameter)  >>> Making 'localhost/post/10/comment/helloworld' route 
Route::get('/post/{id}/comments/{comment?}',function(int $id, string $comment=null){
    //  when '<id? >' means $id=null also valid
return 'User '.$id.' '.$comment;
})-> whereNumber('id')->whereAlpha('comment');

// (constant Parameter)  >>> Making 'localhost/post/category' route  -> category must be within ['movie','song']
Route::get('/post/{category}',function(string $category){
    //  when '<id? >' means $id=null also valid
return 'You like to watch '.$category;
})-> whereIn('category',['movie','song']);

// (constant Parameter)  >>> Making 'localhost/post/@number' route  -> must number apperars after @
Route::get('/post/{at_num}',function(string $at_num){
return '@ num is: '.$at_num;
})-> where('at_num','[@0-9]+');
*/



// ************************************************************
//            <<  Route Name  >>
// ************************************************************

Route::get('/post', function()
{
    return "It is Post page with named route";
})->name('post_page');    // i.e  <a href="{{route('post_page')}}">post</a>



// ************************************************************
//            <<  Route Redirect >>
// ************************************************************
//Route::redirect('/about','/post',301);   // old_route, new_route, 301 means permanet

// ************************************************************
//            <<  Route Group>>
// ************************************************************