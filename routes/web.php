<?php
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/data', function () {
    return view('data');
});

Route::get('/contact', function () {
    return view('contact');
});

 Route::get('/data/alldata', [App\Http\Controllers\DataController::class, 'showalldata']);


 Route::get('data/alldata_telpas', [App\Http\Controllers\DataController::class, 'showalltelpas']);


// Route::get('/data/alldata', function () {
//     return view('alldata');
// });
Route::get('/data/all/{id}/delete', [App\Http\Controllers\DataController::class, 'delete']);

Route::get('/data/sigma/{id}/delete', [App\Http\Controllers\DataController::class, 'deletetelpas']);


Route::get('/data/all/{id}', [App\Http\Controllers\DataController::class, 'details']);

Route::get('/data/sigma/{id}', [App\Http\Controllers\DataController::class, 'detailstelpas']);

//create telpas
Route::post('/data/alldata_telpas/newtelpa', 'App\Http\Controllers\DataController@newTelpa');

Route::post('data/alldata_telpas/storetelpas', [App\Http\Controllers\DataController::class, 'storeTelpas']);

Route::get('/data/alldata_telpas/createtelpas', function () {
    return view('createtelpas');
});

Route::get('data/alldata_telpas/edittelpas/{id}', [App\Http\Controllers\DataController::class, 'edittelpas'])->name('edittelpas');

Route::put('data/alldata_telpas/update/{id}', [App\Http\Controllers\DataController::class, 'updatetelpas']);

//TABULA KATEGORIJAS

   Route::get('data/alldata_kategorijas', [App\Http\Controllers\DataController::class, 'showallkategorijas']);      
   Route::get('/data/alldata_kategorijas/sigma/{id}', [App\Http\Controllers\DataController::class, 'detailskategorijas']);
