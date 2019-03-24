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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/master',function()
{
   return view ('layouts.master');
});
Route::get('/','ClientController@index')->name('dashbord');

Route::get('/add-client',function()

{
	return view('Dashbord.add-client');
});
Route::post('add_client','ClientController@add_client')->name('add_client');
Route::get('/new-commande',function()

{
	return view('Dashbord.new-commande');
});
Route::get('show-commande/{id}','DashbordController@commandes_client');
Route::get('/test-form',function(){

	return view ('Dashbord.Fournisseur.index');
});
Route::get('create_commande/{id}','CommandeController@GetCommande');
Route::get('test',function(){
    	return view ('Dashbord.new-commande');
}

);
