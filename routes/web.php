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
Route::get('create_commande/{id}','CommandeController@GetCommande')->name('create.commande');
Route::get('test',function(){
    	return view ('Dashbord.new-commande');
}

);
<<<<<<< HEAD
<<<<<<< HEAD
=======

=======
Route::get('dashbord/liste_commande/{id}','CommandeController@liste_comande')->name('liste.commande');
Route::get('dashbord/show_commande/{id}','CommandeController@show_commande')->name('show.commande');
>>>>>>> dev
Route::post('passe-commande','CommandeController@PasseCommande')->name('passe.commande');
>>>>>>> dev
