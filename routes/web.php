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

Route::get('/', 'SummaryController@home');
Route::get('/review/{id}', 'SummaryController@getReview');
Route::get('/summary/{id}', 'SummaryController@getSummary');
Route::get('/app-review', 'SummaryController@viewSummary');
Route::get('/summary', 'SummaryController@viewSummary1');
Route::get('/summary2', 'SummaryController@viewSummary2');