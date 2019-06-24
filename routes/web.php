<?php

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/listruser','AdminController@listruser');
Route::get('/listcompany','AdminController@listcompany');
Route::get('/listrexhi','AdminController@listrexhi');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sighnup', function () {
    return view('sighnup');
});
Route::get('/userreg', function () {
    return view('userreg');
});
Route::get('/usersignup', function () {
    return view('user.registration');
});
Route::get('/Approve/{id}','ApprooveController@Approve');
Route::get('/exaprove/{id}','ApprooveController@ApproveExhibitor');
Route::get('/comaprove/{id}','ApprooveController@ApproveCompany');
Route::get('/view','UserviewController@index');
Route::get('/viewprofile', function () {
    return view('viewprofile.view');
});
Route::get('/profile', function () {
    return view('admintest.profile');
});
Route::get('/profile','UserviewController@index');
Route::get('/contact', function () {
    return view('ex.contact');
});
Route::get('/pricing', function () {
    return view('ex.pricing');
});
Route::get('/about', function () {
    return view('ex.about');
});
Route::get('/addexpo', function () {
    return view('admin.login.addexpo');
});
Route::get('/homee', function () {
    return view('company.cmcontent');
});
Route::post('/store','AddController@store');


Route::get('/expoview','ViewController@index');     
Route::get('/addpro', function () {
    return view('company.addproduct');
});
Route::post('/action','AddproController@store');
Route::get('/productview', function () {
    return view('users.productview');
});
Route::get('/products', 'ProductsController@index');
 
Route::get('cart', 'ProductsController@cart');
 
Route::get('add-to-cart/{id}', 'ProductsController@addToCart');
Route::patch('update-cart', 'ProductsController@update');
 
Route::delete('remove-from-cart', 'ProductsController@remove');
//Route::get('/addcatogory', function () {
    //return view('admintest.addcatogory');
//});
Route::get('/addsubcatogorys', function () {
    return view('admintest.addsubcatogory');
});
Route::get('/addcatogory', 'CatogoryController@store');
Route::get('/addsubcatogory', 'SubCatogoryController@store');
Route::get('/addcatogorys', function () {
    return view('admintest.addcatogory');
});
Route::get('/productview', 'ProductviewController@index');
Route::get('/comproductview', 'CompviewController@index');
Route::get('/destroy', 'CompviewController@destroy')->name('destroy');
Route::get('/update', 'CompviewController@update')->name('update');
Route::get('/edit', 'CompviewController@edit')->name('edit');
Route::get('/addexpoview', 'ExpoaddviewController@index');
Route::post('/ticket', 'TicketController@store');
//Route::get('/addticket', function () {
    //return view('Exhibitor.addticket');
//});
Route::get('/addticket', 'AddTicketController@index');
Route::get('/fetch', 'AddTicketController@fetch');
Route::get('/bookk', 'AddTicketController@book');
Route::get('/cat', 'AddcatogoryController@index');
Route::get('/payy', 'PaymentController@index');
Route::get('/transaction', 'TransactionController@store');
Route::get('/request', 'RequestController@index');
Route::get('/addrequest', 'RequestController@request');
Route::get('/requestaction', 'RequestController@store');
Route::get('/requestview', 'RequestController@requestview');
Route::get('/allocate', 'AllocationController@store');
Route::get('/destroys', 'RequestController@destroy')->name('destroy');
Route::get('/exhomee', function () {
    return view('exhibitor.excontent');
});
Route::get('/userhomee', function () {
    return view('users.user');
});
Route::any('/invoice', function () {
    return view('user.invoice');
});
