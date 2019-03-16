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
    return view('welcome');
});
Route::get('Admin',function(){return view('AdminAndManger.Adminmaster');});
Route::get('Employee',function(){return view('AdminAndManger.Employeemaster');});


////////////////////////////////////////////////////////////////////////////en
Route::get('/enHome','customerController@ff');//


Route::get('/enNews','customerController@f');
Route::get('/engallery','customerController@n');
Route::get('/employeetable','employee\tableemployee@nn');
Route::get('/enAbout',function(){return view('aboutUs');});
Route::get('/enconect',function(){return view('conect');});
Route::get('/enEvents',function(){return view('Events');});
 
Route::get('/enmenu',function(){return view('menu');});
Route::get('/entabel',function(){
    $t=DB::table('foods')->get();
    $categories=DB::table('categories')->get();
    return view('tabel',compact('t','categories'));});


     



    Route::get('/{CatId}','customerController@withdetcat');
     
 
////////////////////////////////////////////////////////////////////////////ar

Route::get('/arHome',function(){return view('HomePage');});
Route::get('/arAbout',function(){return view('aboutUs');});
Route::get('/arconect',function(){return view('conect');});
Route::get('/arEvents',function(){return view('Events');});
Route::get('/argallery',function(){return view('gallery');});
Route::get('/armenu',function(){return view('menu');});
Route::get('/arNews',function(){return view('News');});
Route::get('/artabel',function(){return view('tabel');});
 
Route::post('/add','customerController@Addtabel');
Route::post('/adds','customerController@Addstabel');
Route::post('/addbestmeal','employee\job@Addbestmeal');
 