<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/example',function() 
{
    return view('example');  
})->name('example');

Route::get('/second',function() 
{
    return view('second');  
})->name('second');

Route::get('/js',function() 
{
    return view('js_in_blade');  
})->name('js');

Route::get('/routetoview',function() 
{
    $userName='Pollob Ray';

    return view('pass_data_route_to_view',['userName'=>$userName]);  

})->name('routetoview');

Route::get('/add',function() 
{
    return view('add_student');  
})->name('add');


//        >>>>>>>>>>>> Conrolller Route <<<<<<<<<<<<<<<<<<<<<<<<<<
// ------------------------------------------------------------------
Route::get('/usercontroller',[UserController::class,'show'])->name('show_student');  // show is method
Route::get('/usercontroller/query/{id}',[UserController::class,'my_query'])->name('my_query')->whereNumber('id');  
Route::post('/add_student',[UserController::class,'add_student'])->name('add_student');  

Route::post('/customer',[CustomerController::class,'indext'])->name('acustomer');  

//    >>> Making 'localhost/about'  route <<<
Route::get('/about',function()  // It is 'localhost/about' route
{
    return view('about');   // It is about page
})->name('about');
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
    return '<h1>It is Post page with named route</h1>';
})->name('post_page');    // i.e  <a href="{{route('post_page')}}">post</a>



// ************************************************************
//            <<  Route Redirect >>
// ************************************************************
//Route::redirect('/about','/post',301);   // old_route, new_route, 301 means permanet



// ************************************************************
//            <<  Route Group>>
// ************************************************************
// It will work for 'localhost/page/about' and 'localhost/page/post'
/*
Route::prefix('page')->group(function(){
    Route::get('/post',function(){

    });
    Route::get('/about',function(){
        
    });
});
*/