<?php

use App\Weight;
/*
|--------------------------------------------------------------------------
| Web Routes for hf-weighttracker
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/weights', 'WeightsController');


/* tutorial route to insert data
----------------------------------------
Application route
----------------------------------------
*/
/*
Route::get('/insert', function(){
    DB::insert('insert into weights(weight) values(?)', ['135']);
});
*/



/* tutorial route to read data
----------------------------------------
Application route
----------------------------------------
*/
/*
Route::get('/read', function(){


$result = DB::select('select * from weights where id = ?', [1]);

   foreach($result as $item) {
        return $item->weight;
}

//return "you got here";

});

Route::get('/insert', function(){

DB::insert('insert into weights(weight, title) values(?, ?)', ["333", "This is the new title"]);


});


Route::get('/findmore', function(){

    $weights = Weight::findOrFail(4);
    return $weights;

});

Route::get('/delete', function(){

DB::delete('delete from weights where id = ?', [2]);

});

Route::get('/create', function(){

    $created = Weight::create(['weight'=>'555.1']);
    return $created->weight;

});


Route::get('/', function () {
    return view('landing');
});

Route::resource('weights', 'WeightsController'); 

Route::get('/contact', 'WeightsController@contact');

Route::get('/weight/{number}', 'WeightsController@show_weight');
*/

/*
Route::get('/about', function () {
    return "This is the about page";
});

Route::get('/contact', function () {
    return "This is the contact page";
});

Route::get('/post/{id}', function($id) {
    return "You entered the number " . $id;
});
*/
