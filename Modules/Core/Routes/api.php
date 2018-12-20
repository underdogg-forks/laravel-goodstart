<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/core', function (Request $request) {





	Route::get('core/activitylogs', 'Core\ActivitylogAPIController@index');
	Route::post('core/activitylogs', 'Core\ActivitylogAPIController@store');
	Route::get('core/activitylogs/{activitylogs}', 'Core\ActivitylogAPIController@show');
	Route::put('core/activitylogs/{activitylogs}', 'Core\ActivitylogAPIController@update');
	Route::patch('core/activitylogs/{activitylogs}', 'Core\ActivitylogAPIController@update');
	Route::delete('core/activitylogs/{activitylogs}', 'Core\ActivitylogAPIController@destroy');


	Route::get('core/announcements', 'Core\AnnouncementAPIController@index');
	Route::post('core/announcements', 'Core\AnnouncementAPIController@store');
	Route::get('core/announcements/{announcements}', 'Core\AnnouncementAPIController@show');
	Route::put('core/announcements/{announcements}', 'Core\AnnouncementAPIController@update');
	Route::patch('core/announcements/{announcements}', 'Core\AnnouncementAPIController@update');
	Route::delete('core/announcements/{announcements}', 'Core\AnnouncementAPIController@destroy');


	Route::get('core/calendar_items', 'Core\CalendarItemAPIController@index');
	Route::post('core/calendar_items', 'Core\CalendarItemAPIController@store');
	Route::get('core/calendar_items/{calendar_items}', 'Core\CalendarItemAPIController@show');
	Route::put('core/calendar_items/{calendar_items}', 'Core\CalendarItemAPIController@update');
	Route::patch('core/calendar_items/{calendar_items}', 'Core\CalendarItemAPIController@update');
	Route::delete('core/calendar_items/{calendar_items}', 'Core\CalendarItemAPIController@destroy');


	Route::get('core/countries', 'Core\CountryAPIController@index');
	Route::post('core/countries', 'Core\CountryAPIController@store');
	Route::get('core/countries/{countries}', 'Core\CountryAPIController@show');
	Route::put('core/countries/{countries}', 'Core\CountryAPIController@update');
	Route::patch('core/countries/{countries}', 'Core\CountryAPIController@update');
	Route::delete('core/countries/{countries}', 'Core\CountryAPIController@destroy');


	Route::get('core/currencies', 'Core\CurrencyAPIController@index');
	Route::post('core/currencies', 'Core\CurrencyAPIController@store');
	Route::get('core/currencies/{currencies}', 'Core\CurrencyAPIController@show');
	Route::put('core/currencies/{currencies}', 'Core\CurrencyAPIController@update');
	Route::patch('core/currencies/{currencies}', 'Core\CurrencyAPIController@update');
	Route::delete('core/currencies/{currencies}', 'Core\CurrencyAPIController@destroy');


	Route::get('core/departments', 'Core\DepartmentAPIController@index');
	Route::post('core/departments', 'Core\DepartmentAPIController@store');
	Route::get('core/departments/{departments}', 'Core\DepartmentAPIController@show');
	Route::put('core/departments/{departments}', 'Core\DepartmentAPIController@update');
	Route::patch('core/departments/{departments}', 'Core\DepartmentAPIController@update');
	Route::delete('core/departments/{departments}', 'Core\DepartmentAPIController@destroy');


	Route::get('core/features', 'Core\FeatureAPIController@index');
	Route::post('core/features', 'Core\FeatureAPIController@store');
	Route::get('core/features/{features}', 'Core\FeatureAPIController@show');
	Route::put('core/features/{features}', 'Core\FeatureAPIController@update');
	Route::patch('core/features/{features}', 'Core\FeatureAPIController@update');
	Route::delete('core/features/{features}', 'Core\FeatureAPIController@destroy');




	Route::get('core/notes', 'Core\NoteAPIController@index');
	Route::post('core/notes', 'Core\NoteAPIController@store');
	Route::get('core/notes/{notes}', 'Core\NoteAPIController@show');
	Route::put('core/notes/{notes}', 'Core\NoteAPIController@update');
	Route::patch('core/notes/{notes}', 'Core\NoteAPIController@update');
	Route::delete('core/notes/{notes}', 'Core\NoteAPIController@destroy');


	Route::get('core/notifications', 'Core\NotificationAPIController@index');
	Route::post('core/notifications', 'Core\NotificationAPIController@store');
	Route::get('core/notifications/{notifications}', 'Core\NotificationAPIController@show');
	Route::put('core/notifications/{notifications}', 'Core\NotificationAPIController@update');
	Route::patch('core/notifications/{notifications}', 'Core\NotificationAPIController@update');
	Route::delete('core/notifications/{notifications}', 'Core\NotificationAPIController@destroy');


	Route::get('core/staff', 'Core\StaffAPIController@index');
	Route::post('core/staff', 'Core\StaffAPIController@store');
	Route::get('core/staff/{staff}', 'Core\StaffAPIController@show');
	Route::put('core/staff/{staff}', 'Core\StaffAPIController@update');
	Route::patch('core/staff/{staff}', 'Core\StaffAPIController@update');
	Route::delete('core/staff/{staff}', 'Core\StaffAPIController@destroy');







	Route::get('core/core/taxes', 'Core\TaxAPIController@index');
	Route::post('core/core/taxes', 'Core\TaxAPIController@store');
	Route::get('core/core/taxes/{taxes}', 'Core\TaxAPIController@show');
	Route::put('core/core/taxes/{taxes}', 'Core\TaxAPIController@update');
	Route::patch('core/core/taxes/{taxes}', 'Core\TaxAPIController@update');
	Route::delete('core/core/taxes/{taxes}', 'Core\TaxAPIController@destroy');


	Route::get('core/core/tags', 'Core\TagAPIController@index');
	Route::post('core/core/tags', 'Core\TagAPIController@store');
	Route::get('core/core/tags/{tags}', 'Core\TagAPIController@show');
	Route::put('core/core/tags/{tags}', 'Core\TagAPIController@update');
	Route::patch('core/core/tags/{tags}', 'Core\TagAPIController@update');
	Route::delete('core/core/tags/{tags}', 'Core\TagAPIController@destroy');


	Route::get('core/core/companies', 'Core\CompanyAPIController@index');
	Route::post('core/core/companies', 'Core\CompanyAPIController@store');
	Route::get('core/core/companies/{companies}', 'Core\CompanyAPIController@show');
	Route::put('core/core/companies/{companies}', 'Core\CompanyAPIController@update');
	Route::patch('core/core/companies/{companies}', 'Core\CompanyAPIController@update');
	Route::delete('core/core/companies/{companies}', 'Core\CompanyAPIController@destroy');


    Route::get('core/companies', 'Core\CompanyAPIController@index');
    Route::post('core/companies', 'Core\CompanyAPIController@store');
    Route::get('core/companies/{companies}', 'Core\CompanyAPIController@show');
    Route::put('core/companies/{companies}', 'Core\CompanyAPIController@update');
    Route::patch('core/companies/{companies}', 'Core\CompanyAPIController@update');
    Route::delete('core/companies/{companies}', 'Core\CompanyAPIController@destroy');




	Route::get('core/core/services', 'Core\ServiceAPIController@index');
	Route::post('core/core/services', 'Core\ServiceAPIController@store');
	Route::get('core/core/services/{services}', 'Core\ServiceAPIController@show');
	Route::put('core/core/services/{services}', 'Core\ServiceAPIController@update');
	Route::patch('core/core/services/{services}', 'Core\ServiceAPIController@update');
	Route::delete('core/core/services/{services}', 'Core\ServiceAPIController@destroy');


	Route::get('core/core/taxes', 'Core\TaxAPIController@index');
	Route::post('core/core/taxes', 'Core\TaxAPIController@store');
	Route::get('core/core/taxes/{taxes}', 'Core\TaxAPIController@show');
	Route::put('core/core/taxes/{taxes}', 'Core\TaxAPIController@update');
	Route::patch('core/core/taxes/{taxes}', 'Core\TaxAPIController@update');
	Route::delete('core/core/taxes/{taxes}', 'Core\TaxAPIController@destroy');



	Route::get('core/core/tags', 'Core\TagAPIController@index');
	Route::post('core/core/tags', 'Core\TagAPIController@store');
	Route::get('core/core/tags/{tags}', 'Core\TagAPIController@show');
	Route::put('core/core/tags/{tags}', 'Core\TagAPIController@update');
	Route::patch('core/core/tags/{tags}', 'Core\TagAPIController@update');
	Route::delete('core/core/tags/{tags}', 'Core\TagAPIController@destroy');








Route::get('core/services', 'Core\ServiceAPIController@index');
Route::post('core/services', 'Core\ServiceAPIController@store');
Route::get('core/services/{services}', 'Core\ServiceAPIController@show');
Route::put('core/services/{services}', 'Core\ServiceAPIController@update');
Route::patch('core/services/{services}', 'Core\ServiceAPIController@update');
Route::delete('core/services/{services}', 'Core\ServiceAPIController@destroy');


Route::get('core/tags', 'Core\TagAPIController@index');
Route::post('core/tags', 'Core\TagAPIController@store');
Route::get('core/tags/{tags}', 'Core\TagAPIController@show');
Route::put('core/tags/{tags}', 'Core\TagAPIController@update');
Route::patch('core/tags/{tags}', 'Core\TagAPIController@update');
Route::delete('core/tags/{tags}', 'Core\TagAPIController@destroy');


Route::get('core/taxes', 'Core\TaxAPIController@index');
Route::post('core/taxes', 'Core\TaxAPIController@store');
Route::get('core/taxes/{taxes}', 'Core\TaxAPIController@show');
Route::put('core/taxes/{taxes}', 'Core\TaxAPIController@update');
Route::patch('core/taxes/{taxes}', 'Core\TaxAPIController@update');
Route::delete('core/taxes/{taxes}', 'Core\TaxAPIController@destroy');



});
