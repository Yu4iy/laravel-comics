<?php

use Hamcrest\Type\IsNumeric;
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


//MAIN
Route::get('/', function () {
    return view('layouts.layouts');
});

// SHOP COMICS 
Route::get('/comics', function () {
    
$comics = config('comics-data'); //<<<<PORTA ARRAY DA config/comics-data.php

    return view('comics', ['comics' => $comics]);
})-> name('comics');

// NEWS 
Route::get('/news', function () {
    return view('news');
})-> name('news');


// COMICS-PAGE
Route::get('/comics/{id}', function ($id) {
    $comics = config('comics-data');

    if( is_numeric($id) && $id >= 0 && $id < count($comics)){
        $comics_info = $comics[$id];

    }else{
        abort(404);
    }  

    return view('page',[
        'comics_info' => $comics_info,  
    ]);
})-> name('page');

