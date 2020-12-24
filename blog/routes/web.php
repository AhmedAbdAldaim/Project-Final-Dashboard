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
Route::get('/nav', function () {
    return view('includes.newnav');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//sspecialty
Route::get('/spesialties' , 'speshaltiescontroller@index');
Route::get('/spesialties/create' , 'speshaltiescontroller@create');
Route::post('/spesialties' , 'speshaltiescontroller@store');
Route::get('/spesialties/{speshalty}/edit' , 'speshaltiescontroller@edit');
Route::post('/spesialties/{speshalty}' , 'speshaltiescontroller@update');
Route::get('/spesialties/{speshalty}/delete' , 'speshaltiescontroller@destroy');
//hpspitals
Route::get('/hospitals' ,'hospitalscontroller@index');
Route::get('/hospitals/create' , 'hospitalscontroller@create');
Route::post('/hospitals' , 'hospitalscontroller@store');
Route::get('/hospitals/{hospital}/edit' , 'hospitalscontroller@edit');
Route::post('/hospitals/{hospital}/update' , 'hospitalscontroller@update');
Route::get('/hospitals/{hospital}/delete' , 'hospitalscontroller@destroy');
//doctors
Route::get('/doctors','doctorscontroller@index');
Route::get('/doctors/hospitals','doctorscontroller@doctorhospitals');
Route::get('/doctors/create','doctorscontroller@create');
Route::post('/doctors','doctorscontroller@store');
Route::get('/workday','doctorscontroller@createworktime');
Route::post('/worktime','doctorscontroller@workday');
Route::get('/doctors/{user}/profile' , 'doctorscontroller@edit');
Route::post('/doctors/{user}/profile', 'doctorscontroller@update');
Route::get('/doctorsall','doctorscontroller@doctorsall');
 //interviews
 Route::get('/interviews','interviewscontroller@index');
Route::get('/interviews/create','interviewscontroller@create');
Route::post('/interviews','interviewscontroller@store');
Route::get('/interviews/{interview}','interviewscontroller@show');
Route::post('/interviews/{interview}/update','interviewscontroller@update');
Route::get('/examinations/doctor/create/{id}','interviewscontroller@addeamintaons');
Route::post('/examinations/doctor/create/{interview}','interviewscontroller@storeexamintaons');
Route::get('/pinding/interviews','interviewscontroller@pindeinginterviews');
Route::get('/medicine/create/{interview}','interviewscontroller@addmedcine');
Route::post('/medicine/store/{interview}','interviewscontroller@storemedicine');

//record
Route::get('/record/{id}','recordcontroller@record');
Route::get('/record/intreviews/{id}/show','recordcontroller@interviews');
Route::get('/record/examinations/{id}','recordcontroller@examination');
Route::get('/record/medicines/{id}','recordcontroller@medicine');
//admins
Route::get('/admins','userscontroller@index');
Route::get('/admins/create','userscontroller@addAmin');
Route::post('/admins','userscontroller@store');
Route::get('/admins/{user}/edit','userscontroller@edit');
Route::post('/admins/{user}','userscontroller@update');
Route::get('/admins/{user}/delete','userscontroller@destroy');
//lapdoctors
Route::get('/lapdoctors','lapdoctorscontroller@index');
Route::get('/lapdoctors/create','lapdoctorscontroller@create');
Route::post('/lapdoctors','lapdoctorscontroller@store');
Route::get('/lapdoctors/dahsbord','lapdoctorscontroller@examination');
Route::get('/lapdoctors/examintaons/{examination}','lapdoctorscontroller@show');
Route::post('/lapdoctors/examintaons/{examination}/update','lapdoctorscontroller@update');
//reposts 
Route::get('/allpichant','reportscontroller@allpichant');
Route::get('/allspisaltes','reportscontroller@allspishaltes');
Route::get('/allhospitals','reportscontroller@allhospitals');