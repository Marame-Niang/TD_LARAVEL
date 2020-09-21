<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

                    // Client salarié

Route::get('/clientSalarie/add', 'ClientSalarieController@add')->name('addclientsalarie');
Route::get('/clientSalarie/edit/{$id}', 'ClientSalarieController@edit')->name('editclientsalarie');
Route::get('/clientSalarie/update', 'ClientSalarieController@update')->name('updateclientsalarie');
Route::get('/clientSalarie/delete/{$id}', 'ClientSalarieController@delete')->name('deleteclientsalarie');
Route::get('/clientSalarie/getAll', 'ClientSalarieController@getAll')->name('getallclientsalarie');

                    // Client non salarié

Route::get('/clientnonSalarie/add', 'ClientNonSalarieController@add')->name('addclientnonsalarie');
Route::get('/clientnonSalarie/edit/{$id}', 'ClientNonSalarieController@edit')->name('editclientnonsalarie');
Route::get('/clientnonSalarie/update', 'ClientNonSalarieController@update')->name('updateclientnonsalarie');
Route::get('/clientnonSalarie/delete/{$id}', 'ClientNonSalarieController@delete')->name('deleteclientnonsalarie');
Route::get('/clientnonSalarie/getAll', 'ClientNonSalarieController@getAll')->name('getallclientnonsalarie');
Route::post('/clientnonSalarie/persist', 'ClientNonSalarieController@persist')->name('persistclientNS');

                    // Entreprise

Route::get('/entreprise/add', 'EntrepriseController@add')->name('addentreprise');
Route::get('/entreprise/edit/{$id}', 'EntrepriseController@edit')->name('editentreprise');
Route::get('/entreprise/update', 'EntrepriseController@update')->name('updateentreprise');
Route::get('/entreprise/delete/{$id}', 'EntrepriseController@delete')->name('deleteentreprise');
Route::get('/entreprise/getAll', 'EntrepriseController@getAll')->name('getallentreprise');

                    // Compte Simple

Route::get('/compteSimple/add', 'CompteSimpleController@add')->name('addcomptesimple');
Route::get('/compteSimple/edit/{$id}', 'CompteSimpleController@edit')->name('editcomptesimple');
Route::get('/compteSimple/update', 'CompteSimpleController@update')->name('updatecomptesimple');
Route::get('/compteSimple/delete/{$id}', 'CompteSimpleController@delete')->name('deletecomptesimple');
Route::get('/compteSimple/getAll', 'CompteSimpleController@getAll')->name('getallcomptesimple');
Route::post('/comptesimple/persist', 'CompteSimpleController@persist')->name('persistcomptesimple');

                    // Compte Courant

Route::get('/compteCourant/add', 'CompteCourantController@add')->name('addcomptecourant');
Route::get('/compteCourant/edit/{$id}', 'CompteCourantController@edit')->name('editcomptecourant');
Route::get('/compteCourant/update', 'CompteCourantController@update')->name('updatecomptecourant');
Route::get('/compteCourant/delete/{$id}', 'CompteCourantController@delete')->name('deletecomptecourant');
Route::get('/compteCourant/getAll', 'CompteCourantController@getAll')->name('getallcomptecourant');

                      // Compte Bloqué

Route::get('/compteBloque/add', 'CompteBloqueController@add')->name('addcomptebloque');
Route::get('/compteBloque/edit/{$id}', 'CompteBloqueController@edit')->name('editcomptebloque');
Route::get('/compteBloque/update', 'CompteBloqueController@update')->name('updatecomptebloque');
Route::get('/compteBloque/delete/{$id}', 'CompteBloqueController@delete')->name('deletecomptebloque');
Route::get('/compteBloque/getAll', 'CompteBloqueController@getAll')->name('getallcomptebloque');
