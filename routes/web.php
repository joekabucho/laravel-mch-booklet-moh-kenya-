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
Auth::routes();
Route::get('/home', 'MCHController@home')->name('home');
Route::get('/maternal', 'MCHController@maternal')->name('maternal');
Route::get('/maternalreport', 'MCHController@maternalreport')->name('maternalreport');
Route::post('/maternal_post', 'MCHController@maternal_post')->name('maternal_post');

Route::post('/maternal_delete/{id_number}','MCHController@maternal_delete')->name('maternal_delete');
Route::post('/previous_delete/{id_number}','MCHController@previous_delete')->name('previous_delete');
Route::post('/surgical_delete/{id_number}','MCHController@surgical_delete')->name('surgical_delete');
Route::post('/physicalexamination_delete/{id_number}','MCHController@physicalexamination_delete')->name('physicalexamination_delete');
Route::post('/childhealthcard_delete/{id_number}','MCHController@childhealthcard_delete')->name('childhealthcard_delete');
Route::post('/childhealthcard1_delete/{id_number}','MCHController@childhealthcard1_delete')->name('childhealthcard1_delete');
Route::post('/childhealthcard2_delete/{id_number}','MCHController@childhealthcard2_delete')->name('childhealthcard2_delete');
Route::post('/childhealthcard3_delete/{id_number}','MCHController@childhealthcard3_delete')->name('childhealthcard3_delete');
Route::post('/childhealthcard4_delete/{id_number}','MCHController@childhealthcard4_delete')->name('childhealthcard4_delete');
Route::post('/childhealthcard5_delete/{id_number}','MCHController@childhealthcard5_delete')->name('childhealthcardl5_delete');
Route::post('/childhealthcard6_delete/{id_number}','MCHController@childhealthcard6_delete')->name('childhealthcard6_delete');
Route::post('/create_child_delete/{id_number}','MCHController@create_child_delete')->name('create_child_delete_delete');

Route::get('/mch_booklet', 'MCHController@mch_booklet')->name('mch_booklet');

Route::get('/medicalsurgical_post', 'MCHController@medicalsurgical_post')->name('medicalsurgical_post');
Route::get('/previous', 'MCHController@previous')->name('previous');
Route::get('/previousreport', 'MCHController@previousreport')->name('previousreport');
Route::get('/surgical', 'MCHController@surgical')->name('surgical');
Route::get('/surgicalreport', 'MCHController@surgicalreport')->name('surgicalreport');
Route::get('/physicalexamination', 'MCHController@physicalexamination')->name('physicalexamination');
Route::get('/physicalexaminationreport', 'MCHController@physicalexaminationreport')->name('physicalexaminationreport');
Route::get('/weight', 'MCHController@weight')->name('weight');
Route::get('/childmonitoring', 'MCHController@childmonitoring')->name('childmonitoring');
Route::get('/childmonitemp', 'MCHController@childmonitemp')->name('childmonitemp');
Route::get('/mothersbp', 'MCHController@mothersbp')->name('mothersbp');
Route::get('/motherstemp', 'MCHController@motherstemp')->name('motherstemp');
Route::get('/mothersweight', 'MCHController@mothersweight')->name('mothersweight');
Route::post('/weight_post', 'MCHController@weight_post')->name('weight_post');
Route::post('/childmonitoring_post', 'MCHController@childmonitoring_post')->name('childmonitoring_post');
Route::post('/childmonitemp_post', 'MCHController@childmonitemp_post')->name('childmonitemp_post');
Route::post('/mothersbp_post', 'MCHController@mothersbp_post')->name('mothersbp_post');
Route::post('/motherstemp_post', 'MCHController@motherstemp_post')->name('motherstemp_post');
Route::post('/mothersweight_post', 'MCHController@mothersweight_post')->name('mothersweight_post');
Route::get('/bmi', 'MCHController@bmi')->name('bmi');
Route::post('/bmi_post', 'MCHController@bmi_post')->name('bmi_post');

Route::get('/childhealthcard', 'MCHController@childhealthcard')->name('childhealthcard');
Route::get('/childhealthcardreport', 'MCHController@childhealthcardreport')->name('childhealthcardreport');
Route::get('/childhealthcard1report', 'MCHController@childhealthcard1report')->name('childhealthcard1report');
Route::get('/childhealthcard2report', 'MCHController@childhealthcard2report')->name('childhealthcard2report');
Route::get('/childhealthcard3report', 'MCHController@childhealthcard3report')->name('childhealthcard3report');
Route::get('/childhealthcard4report', 'MCHController@childhealthcard4report')->name('childhealthcard4report');
Route::get('/childhealthcard5report', 'MCHController@childhealthcard5report')->name('childhealthcard5report');
Route::get('/childhealthcard6report', 'MCHController@childhealthcard6report')->name('childhealthcard6report');
Route::post('/childhealthcard_post', 'MCHController@childhealthcard_post')->name('childhealthcard_post');
Route::get('/childhealthcard1', 'MCHController@childhealthcard1')->name('childhealthcard1');
Route::get('/childhealthcard2', 'MCHController@childhealthcard2')->name('childhealthcard2');
Route::get('/childhealthcard3', 'MCHController@childhealthcard3')->name('childhealthcard3');
Route::get('/childhealthcard4', 'MCHController@childhealthcard4')->name('childhealthcard4');
Route::get('/childhealthcard5', 'MCHController@childhealthcard5')->name('childhealthcard5');
Route::get('/childhealthcard6', 'MCHController@childhealthcard6')->name('childhealthcard6');
Route::post('/previous_post', 'MCHController@previous_post')->name('previous_post');
Route::post('/surgical_post', 'MCHController@surgical_post')->name('surgical_post');
Route::post('/physicalexamination_post', 'MCHController@physicalexamination_post')->name('physicalexamination_post');
Route::GET('/child_home', 'MCHController@child_home')->name('child_home');
Route::GET('/create_child', 'MCHController@create_child')->name('create_child');
Route::GET('/mother', 'MCHController@mother')->name('mother');
Route::GET('/not_allowed', 'MCHController@not_allowed')->name('not_allowed');
Route::GET('/admin', 'MCHController@admin')->name('admin');
Route::post('/create_child_post', 'MCHController@create_child_post')->name('create_child_post');
Route::get('/create_child_report', 'MCHController@create_child_report')->name('create_child_report');
Route::GET('/maternal_home', 'MCHController@maternal_home')->name('maternal_home');
Route::post('/childmonitoring_post', 'MCHController@childmonitoring_post')->name('childmonitoring_post');
Route::post('/childhealthcard_post', 'MCHController@childhealthcard_post')->name('childhealthcard_post');
Route::post('/childhealthcard1_post', 'MCHController@childhealthcard1_post')->name('childhealthcard1_post');
Route::post('/childhealthcard2_post', 'MCHController@childhealthcard2_post')->name('childhealthcard2_post');
Route::post('/childhealthcard3_post', 'MCHController@childhealthcard3_post')->name('childhealthcard3_post');
Route::post('/childhealthcard4_post', 'MCHController@childhealthcard4_post')->name('childhealthcard4_post');
Route::post('/childhealthcard5_post', 'MCHController@childhealthcard5_post')->name('childhealthcard5_post');
Route::post('/childhealthcard6_post', 'MCHController@childhealthcard6_post')->name('childhealthcard6_post');





