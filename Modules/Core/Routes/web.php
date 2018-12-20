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

Route::prefix('')->group(function() {




	Route::get('companies', ['as'=> 'core.companies.index', 'uses' => 'Core\CompanyController@index']);
	Route::post('companies', ['as'=> 'core.companies.store', 'uses' => 'Core\CompanyController@store']);
	Route::get('companies/create', ['as'=> 'core.companies.create', 'uses' => 'Core\CompanyController@create']);
	Route::put('companies/{companies}', ['as'=> 'core.companies.update', 'uses' => 'Core\CompanyController@update']);
	Route::patch('companies/{companies}', ['as'=> 'core.companies.update', 'uses' => 'Core\CompanyController@update']);
	Route::delete('companies/{companies}', ['as'=> 'core.companies.destroy', 'uses' => 'Core\CompanyController@destroy']);
	Route::get('companies/{companies}', ['as'=> 'core.companies.show', 'uses' => 'Core\CompanyController@show']);
	Route::get('companies/{companies}/edit', ['as'=> 'core.companies.edit', 'uses' => 'Core\CompanyController@edit']);

    Route::get('taxes', ['as'=> 'core.taxes.index', 'uses' => 'Core\TaxController@index']);
	Route::post('taxes', ['as'=> 'core.taxes.store', 'uses' => 'Core\TaxController@store']);
	Route::get('taxes/create', ['as'=> 'core.taxes.create', 'uses' => 'Core\TaxController@create']);
	Route::put('taxes/{taxes}', ['as'=> 'core.taxes.update', 'uses' => 'Core\TaxController@update']);
	Route::patch('taxes/{taxes}', ['as'=> 'core.taxes.update', 'uses' => 'Core\TaxController@update']);
	Route::delete('taxes/{taxes}', ['as'=> 'core.taxes.destroy', 'uses' => 'Core\TaxController@destroy']);
	Route::get('taxes/{taxes}', ['as'=> 'core.taxes.show', 'uses' => 'Core\TaxController@show']);
	Route::get('taxes/{taxes}/edit', ['as'=> 'core.taxes.edit', 'uses' => 'Core\TaxController@edit']);

	Route::get('tags', ['as'=> 'core.tags.index', 'uses' => 'Core\TagController@index']);
	Route::post('tags', ['as'=> 'core.tags.store', 'uses' => 'Core\TagController@store']);
	Route::get('tags/create', ['as'=> 'core.tags.create', 'uses' => 'Core\TagController@create']);
	Route::put('tags/{tags}', ['as'=> 'core.tags.update', 'uses' => 'Core\TagController@update']);
	Route::patch('tags/{tags}', ['as'=> 'core.tags.update', 'uses' => 'Core\TagController@update']);
	Route::delete('tags/{tags}', ['as'=> 'core.tags.destroy', 'uses' => 'Core\TagController@destroy']);
	Route::get('tags/{tags}', ['as'=> 'core.tags.show', 'uses' => 'Core\TagController@show']);
	Route::get('tags/{tags}/edit', ['as'=> 'core.tags.edit', 'uses' => 'Core\TagController@edit']);

	Route::get('activitylogs', ['as'=> 'core.activitylogs.index', 'uses' => 'Core\ActivitylogController@index']);
	Route::post('activitylogs', ['as'=> 'core.activitylogs.store', 'uses' => 'Core\ActivitylogController@store']);
	Route::get('activitylogs/create', ['as'=> 'core.activitylogs.create', 'uses' => 'Core\ActivitylogController@create']);
	Route::put('activitylogs/{activitylogs}', ['as'=> 'core.activitylogs.update', 'uses' => 'Core\ActivitylogController@update']);
	Route::patch('activitylogs/{activitylogs}', ['as'=> 'core.activitylogs.update', 'uses' => 'Core\ActivitylogController@update']);
	Route::delete('activitylogs/{activitylogs}', ['as'=> 'core.activitylogs.destroy', 'uses' => 'Core\ActivitylogController@destroy']);
	Route::get('activitylogs/{activitylogs}', ['as'=> 'core.activitylogs.show', 'uses' => 'Core\ActivitylogController@show']);
	Route::get('activitylogs/{activitylogs}/edit', ['as'=> 'core.activitylogs.edit', 'uses' => 'Core\ActivitylogController@edit']);


	Route::get('announcements', ['as'=> 'core.announcements.index', 'uses' => 'Core\AnnouncementController@index']);
	Route::post('announcements', ['as'=> 'core.announcements.store', 'uses' => 'Core\AnnouncementController@store']);
	Route::get('announcements/create', ['as'=> 'core.announcements.create', 'uses' => 'Core\AnnouncementController@create']);
	Route::put('announcements/{announcements}', ['as'=> 'core.announcements.update', 'uses' => 'Core\AnnouncementController@update']);
	Route::patch('announcements/{announcements}', ['as'=> 'core.announcements.update', 'uses' => 'Core\AnnouncementController@update']);
	Route::delete('announcements/{announcements}', ['as'=> 'core.announcements.destroy', 'uses' => 'Core\AnnouncementController@destroy']);
	Route::get('announcements/{announcements}', ['as'=> 'core.announcements.show', 'uses' => 'Core\AnnouncementController@show']);
	Route::get('announcements/{announcements}/edit', ['as'=> 'core.announcements.edit', 'uses' => 'Core\AnnouncementController@edit']);


	Route::get('calendarItems', ['as'=> 'core.calendarItems.index', 'uses' => 'Core\CalendarItemController@index']);
	Route::post('calendarItems', ['as'=> 'core.calendarItems.store', 'uses' => 'Core\CalendarItemController@store']);
	Route::get('calendarItems/create', ['as'=> 'core.calendarItems.create', 'uses' => 'Core\CalendarItemController@create']);
	Route::put('calendarItems/{calendarItems}', ['as'=> 'core.calendarItems.update', 'uses' => 'Core\CalendarItemController@update']);
	Route::patch('calendarItems/{calendarItems}', ['as'=> 'core.calendarItems.update', 'uses' => 'Core\CalendarItemController@update']);
	Route::delete('calendarItems/{calendarItems}', ['as'=> 'core.calendarItems.destroy', 'uses' => 'Core\CalendarItemController@destroy']);
	Route::get('calendarItems/{calendarItems}', ['as'=> 'core.calendarItems.show', 'uses' => 'Core\CalendarItemController@show']);
	Route::get('calendarItems/{calendarItems}/edit', ['as'=> 'core.calendarItems.edit', 'uses' => 'Core\CalendarItemController@edit']);


	Route::get('countries', ['as'=> 'core.countries.index', 'uses' => 'Core\CountryController@index']);
	Route::post('countries', ['as'=> 'core.countries.store', 'uses' => 'Core\CountryController@store']);
	Route::get('countries/create', ['as'=> 'core.countries.create', 'uses' => 'Core\CountryController@create']);
	Route::put('countries/{countries}', ['as'=> 'core.countries.update', 'uses' => 'Core\CountryController@update']);
	Route::patch('countries/{countries}', ['as'=> 'core.countries.update', 'uses' => 'Core\CountryController@update']);
	Route::delete('countries/{countries}', ['as'=> 'core.countries.destroy', 'uses' => 'Core\CountryController@destroy']);
	Route::get('countries/{countries}', ['as'=> 'core.countries.show', 'uses' => 'Core\CountryController@show']);
	Route::get('countries/{countries}/edit', ['as'=> 'core.countries.edit', 'uses' => 'Core\CountryController@edit']);


	Route::get('currencies', ['as'=> 'core.currencies.index', 'uses' => 'Core\CurrencyController@index']);
	Route::post('currencies', ['as'=> 'core.currencies.store', 'uses' => 'Core\CurrencyController@store']);
	Route::get('currencies/create', ['as'=> 'core.currencies.create', 'uses' => 'Core\CurrencyController@create']);
	Route::put('currencies/{currencies}', ['as'=> 'core.currencies.update', 'uses' => 'Core\CurrencyController@update']);
	Route::patch('currencies/{currencies}', ['as'=> 'core.currencies.update', 'uses' => 'Core\CurrencyController@update']);
	Route::delete('currencies/{currencies}', ['as'=> 'core.currencies.destroy', 'uses' => 'Core\CurrencyController@destroy']);
	Route::get('currencies/{currencies}', ['as'=> 'core.currencies.show', 'uses' => 'Core\CurrencyController@show']);
	Route::get('currencies/{currencies}/edit', ['as'=> 'core.currencies.edit', 'uses' => 'Core\CurrencyController@edit']);


	Route::get('departments', ['as'=> 'core.departments.index', 'uses' => 'Core\DepartmentController@index']);
	Route::post('departments', ['as'=> 'core.departments.store', 'uses' => 'Core\DepartmentController@store']);
	Route::get('departments/create', ['as'=> 'core.departments.create', 'uses' => 'Core\DepartmentController@create']);
	Route::put('departments/{departments}', ['as'=> 'core.departments.update', 'uses' => 'Core\DepartmentController@update']);
	Route::patch('departments/{departments}', ['as'=> 'core.departments.update', 'uses' => 'Core\DepartmentController@update']);
	Route::delete('departments/{departments}', ['as'=> 'core.departments.destroy', 'uses' => 'Core\DepartmentController@destroy']);
	Route::get('departments/{departments}', ['as'=> 'core.departments.show', 'uses' => 'Core\DepartmentController@show']);
	Route::get('departments/{departments}/edit', ['as'=> 'core.departments.edit', 'uses' => 'Core\DepartmentController@edit']);


	Route::get('features', ['as'=> 'core.features.index', 'uses' => 'Core\FeatureController@index']);
	Route::post('features', ['as'=> 'core.features.store', 'uses' => 'Core\FeatureController@store']);
	Route::get('features/create', ['as'=> 'core.features.create', 'uses' => 'Core\FeatureController@create']);
	Route::put('features/{features}', ['as'=> 'core.features.update', 'uses' => 'Core\FeatureController@update']);
	Route::patch('features/{features}', ['as'=> 'core.features.update', 'uses' => 'Core\FeatureController@update']);
	Route::delete('features/{features}', ['as'=> 'core.features.destroy', 'uses' => 'Core\FeatureController@destroy']);
	Route::get('features/{features}', ['as'=> 'core.features.show', 'uses' => 'Core\FeatureController@show']);
	Route::get('features/{features}/edit', ['as'=> 'core.features.edit', 'uses' => 'Core\FeatureController@edit']);









	Route::get('countries', ['as'=> 'core.countries.index', 'uses' => 'Core\CountryController@index']);
	Route::post('countries', ['as'=> 'core.countries.store', 'uses' => 'Core\CountryController@store']);
	Route::get('countries/create', ['as'=> 'core.countries.create', 'uses' => 'Core\CountryController@create']);
	Route::put('countries/{countries}', ['as'=> 'core.countries.update', 'uses' => 'Core\CountryController@update']);
	Route::patch('countries/{countries}', ['as'=> 'core.countries.update', 'uses' => 'Core\CountryController@update']);
	Route::delete('countries/{countries}', ['as'=> 'core.countries.destroy', 'uses' => 'Core\CountryController@destroy']);
	Route::get('countries/{countries}', ['as'=> 'core.countries.show', 'uses' => 'Core\CountryController@show']);
	Route::get('countries/{countries}/edit', ['as'=> 'core.countries.edit', 'uses' => 'Core\CountryController@edit']);


	Route::get('currencies', ['as'=> 'core.currencies.index', 'uses' => 'Core\CurrencyController@index']);
	Route::post('currencies', ['as'=> 'core.currencies.store', 'uses' => 'Core\CurrencyController@store']);
	Route::get('currencies/create', ['as'=> 'core.currencies.create', 'uses' => 'Core\CurrencyController@create']);
	Route::put('currencies/{currencies}', ['as'=> 'core.currencies.update', 'uses' => 'Core\CurrencyController@update']);
	Route::patch('currencies/{currencies}', ['as'=> 'core.currencies.update', 'uses' => 'Core\CurrencyController@update']);
	Route::delete('currencies/{currencies}', ['as'=> 'core.currencies.destroy', 'uses' => 'Core\CurrencyController@destroy']);
	Route::get('currencies/{currencies}', ['as'=> 'core.currencies.show', 'uses' => 'Core\CurrencyController@show']);
	Route::get('currencies/{currencies}/edit', ['as'=> 'core.currencies.edit', 'uses' => 'Core\CurrencyController@edit']);


	Route::get('departments', ['as'=> 'core.departments.index', 'uses' => 'Core\DepartmentController@index']);
	Route::post('departments', ['as'=> 'core.departments.store', 'uses' => 'Core\DepartmentController@store']);
	Route::get('departments/create', ['as'=> 'core.departments.create', 'uses' => 'Core\DepartmentController@create']);
	Route::put('departments/{departments}', ['as'=> 'core.departments.update', 'uses' => 'Core\DepartmentController@update']);
	Route::patch('departments/{departments}', ['as'=> 'core.departments.update', 'uses' => 'Core\DepartmentController@update']);
	Route::delete('departments/{departments}', ['as'=> 'core.departments.destroy', 'uses' => 'Core\DepartmentController@destroy']);
	Route::get('departments/{departments}', ['as'=> 'core.departments.show', 'uses' => 'Core\DepartmentController@show']);
	Route::get('departments/{departments}/edit', ['as'=> 'core.departments.edit', 'uses' => 'Core\DepartmentController@edit']);


	Route::get('features', ['as'=> 'core.features.index', 'uses' => 'Core\FeatureController@index']);
	Route::post('features', ['as'=> 'core.features.store', 'uses' => 'Core\FeatureController@store']);
	Route::get('features/create', ['as'=> 'core.features.create', 'uses' => 'Core\FeatureController@create']);
	Route::put('features/{features}', ['as'=> 'core.features.update', 'uses' => 'Core\FeatureController@update']);
	Route::patch('features/{features}', ['as'=> 'core.features.update', 'uses' => 'Core\FeatureController@update']);
	Route::delete('features/{features}', ['as'=> 'core.features.destroy', 'uses' => 'Core\FeatureController@destroy']);
	Route::get('features/{features}', ['as'=> 'core.features.show', 'uses' => 'Core\FeatureController@show']);
	Route::get('features/{features}/edit', ['as'=> 'core.features.edit', 'uses' => 'Core\FeatureController@edit']);








	Route::get('notes', ['as'=> 'core.notes.index', 'uses' => 'Core\NoteController@index']);
	Route::post('notes', ['as'=> 'core.notes.store', 'uses' => 'Core\NoteController@store']);
	Route::get('notes/create', ['as'=> 'core.notes.create', 'uses' => 'Core\NoteController@create']);
	Route::put('notes/{notes}', ['as'=> 'core.notes.update', 'uses' => 'Core\NoteController@update']);
	Route::patch('notes/{notes}', ['as'=> 'core.notes.update', 'uses' => 'Core\NoteController@update']);
	Route::delete('notes/{notes}', ['as'=> 'core.notes.destroy', 'uses' => 'Core\NoteController@destroy']);
	Route::get('notes/{notes}', ['as'=> 'core.notes.show', 'uses' => 'Core\NoteController@show']);
	Route::get('notes/{notes}/edit', ['as'=> 'core.notes.edit', 'uses' => 'Core\NoteController@edit']);





	Route::get('notifications', ['as'=> 'core.notifications.index', 'uses' => 'Core\NotificationController@index']);
	Route::post('notifications', ['as'=> 'core.notifications.store', 'uses' => 'Core\NotificationController@store']);
	Route::get('notifications/create', ['as'=> 'core.notifications.create', 'uses' => 'Core\NotificationController@create']);
	Route::put('notifications/{notifications}', ['as'=> 'core.notifications.update', 'uses' => 'Core\NotificationController@update']);
	Route::patch('notifications/{notifications}', ['as'=> 'core.notifications.update', 'uses' => 'Core\NotificationController@update']);
	Route::delete('notifications/{notifications}', ['as'=> 'core.notifications.destroy', 'uses' => 'Core\NotificationController@destroy']);
	Route::get('notifications/{notifications}', ['as'=> 'core.notifications.show', 'uses' => 'Core\NotificationController@show']);
	Route::get('notifications/{notifications}/edit', ['as'=> 'core.notifications.edit', 'uses' => 'Core\NotificationController@edit']);





	Route::get('staff', ['as'=> 'core.staff.index', 'uses' => 'Core\StaffController@index']);
	Route::post('staff', ['as'=> 'core.staff.store', 'uses' => 'Core\StaffController@store']);
	Route::get('staff/create', ['as'=> 'core.staff.create', 'uses' => 'Core\StaffController@create']);
	Route::put('staff/{staff}', ['as'=> 'core.staff.update', 'uses' => 'Core\StaffController@update']);
	Route::patch('staff/{staff}', ['as'=> 'core.staff.update', 'uses' => 'Core\StaffController@update']);
	Route::delete('staff/{staff}', ['as'=> 'core.staff.destroy', 'uses' => 'Core\StaffController@destroy']);
	Route::get('staff/{staff}', ['as'=> 'core.staff.show', 'uses' => 'Core\StaffController@show']);
	Route::get('staff/{staff}/edit', ['as'=> 'core.staff.edit', 'uses' => 'Core\StaffController@edit']);





	Route::get('services', ['as'=> 'core.services.index', 'uses' => 'Core\ServiceController@index']);
	Route::post('services', ['as'=> 'core.services.store', 'uses' => 'Core\ServiceController@store']);
	Route::get('services/create', ['as'=> 'core.services.create', 'uses' => 'Core\ServiceController@create']);
	Route::put('services/{services}', ['as'=> 'core.services.update', 'uses' => 'Core\ServiceController@update']);
	Route::patch('services/{services}', ['as'=> 'core.services.update', 'uses' => 'Core\ServiceController@update']);
	Route::delete('services/{services}', ['as'=> 'core.services.destroy', 'uses' => 'Core\ServiceController@destroy']);
	Route::get('services/{services}', ['as'=> 'core.services.show', 'uses' => 'Core\ServiceController@show']);
	Route::get('services/{services}/edit', ['as'=> 'core.services.edit', 'uses' => 'Core\ServiceController@edit']);




	Route::get('notes', ['as'=> 'core.notes.index', 'uses' => 'Core\NoteController@index']);
	Route::post('notes', ['as'=> 'core.notes.store', 'uses' => 'Core\NoteController@store']);
	Route::get('notes/create', ['as'=> 'core.notes.create', 'uses' => 'Core\NoteController@create']);
	Route::put('notes/{notes}', ['as'=> 'core.notes.update', 'uses' => 'Core\NoteController@update']);
	Route::patch('notes/{notes}', ['as'=> 'core.notes.update', 'uses' => 'Core\NoteController@update']);
	Route::delete('notes/{notes}', ['as'=> 'core.notes.destroy', 'uses' => 'Core\NoteController@destroy']);
	Route::get('notes/{notes}', ['as'=> 'core.notes.show', 'uses' => 'Core\NoteController@show']);
	Route::get('notes/{notes}/edit', ['as'=> 'core.notes.edit', 'uses' => 'Core\NoteController@edit']);


	Route::get('notifications', ['as'=> 'core.notifications.index', 'uses' => 'Core\NotificationController@index']);
	Route::post('notifications', ['as'=> 'core.notifications.store', 'uses' => 'Core\NotificationController@store']);
	Route::get('notifications/create', ['as'=> 'core.notifications.create', 'uses' => 'Core\NotificationController@create']);
	Route::put('notifications/{notifications}', ['as'=> 'core.notifications.update', 'uses' => 'Core\NotificationController@update']);
	Route::patch('notifications/{notifications}', ['as'=> 'core.notifications.update', 'uses' => 'Core\NotificationController@update']);
	Route::delete('notifications/{notifications}', ['as'=> 'core.notifications.destroy', 'uses' => 'Core\NotificationController@destroy']);
	Route::get('notifications/{notifications}', ['as'=> 'core.notifications.show', 'uses' => 'Core\NotificationController@show']);
	Route::get('notifications/{notifications}/edit', ['as'=> 'core.notifications.edit', 'uses' => 'Core\NotificationController@edit']);


	Route::get('staff', ['as'=> 'core.staff.index', 'uses' => 'Core\StaffController@index']);
	Route::post('staff', ['as'=> 'core.staff.store', 'uses' => 'Core\StaffController@store']);
	Route::get('staff/create', ['as'=> 'core.staff.create', 'uses' => 'Core\StaffController@create']);
	Route::put('staff/{staff}', ['as'=> 'core.staff.update', 'uses' => 'Core\StaffController@update']);
	Route::patch('staff/{staff}', ['as'=> 'core.staff.update', 'uses' => 'Core\StaffController@update']);
	Route::delete('staff/{staff}', ['as'=> 'core.staff.destroy', 'uses' => 'Core\StaffController@destroy']);
	Route::get('staff/{staff}', ['as'=> 'core.staff.show', 'uses' => 'Core\StaffController@show']);
	Route::get('staff/{staff}/edit', ['as'=> 'core.staff.edit', 'uses' => 'Core\StaffController@edit']);


	Route::get('announcements', ['as'=> 'core.announcements.index', 'uses' => 'Core\AnnouncementController@index']);
	Route::post('announcements', ['as'=> 'core.announcements.store', 'uses' => 'Core\AnnouncementController@store']);
	Route::get('announcements/create', ['as'=> 'core.announcements.create', 'uses' => 'Core\AnnouncementController@create']);
	Route::put('announcements/{announcements}', ['as'=> 'core.announcements.update', 'uses' => 'Core\AnnouncementController@update']);
	Route::patch('announcements/{announcements}', ['as'=> 'core.announcements.update', 'uses' => 'Core\AnnouncementController@update']);
	Route::delete('announcements/{announcements}', ['as'=> 'core.announcements.destroy', 'uses' => 'Core\AnnouncementController@destroy']);
	Route::get('announcements/{announcements}', ['as'=> 'core.announcements.show', 'uses' => 'Core\AnnouncementController@show']);
	Route::get('announcements/{announcements}/edit', ['as'=> 'core.announcements.edit', 'uses' => 'Core\AnnouncementController@edit']);


	Route::get('calendarItems', ['as'=> 'core.calendarItems.index', 'uses' => 'Core\CalendarItemController@index']);
	Route::post('calendarItems', ['as'=> 'core.calendarItems.store', 'uses' => 'Core\CalendarItemController@store']);
	Route::get('calendarItems/create', ['as'=> 'core.calendarItems.create', 'uses' => 'Core\CalendarItemController@create']);
	Route::put('calendarItems/{calendarItems}', ['as'=> 'core.calendarItems.update', 'uses' => 'Core\CalendarItemController@update']);
	Route::patch('calendarItems/{calendarItems}', ['as'=> 'core.calendarItems.update', 'uses' => 'Core\CalendarItemController@update']);
	Route::delete('calendarItems/{calendarItems}', ['as'=> 'core.calendarItems.destroy', 'uses' => 'Core\CalendarItemController@destroy']);
	Route::get('calendarItems/{calendarItems}', ['as'=> 'core.calendarItems.show', 'uses' => 'Core\CalendarItemController@show']);
	Route::get('calendarItems/{calendarItems}/edit', ['as'=> 'core.calendarItems.edit', 'uses' => 'Core\CalendarItemController@edit']);


	Route::get('countries', ['as'=> 'core.countries.index', 'uses' => 'Core\CountryController@index']);
	Route::post('countries', ['as'=> 'core.countries.store', 'uses' => 'Core\CountryController@store']);
	Route::get('countries/create', ['as'=> 'core.countries.create', 'uses' => 'Core\CountryController@create']);
	Route::put('countries/{countries}', ['as'=> 'core.countries.update', 'uses' => 'Core\CountryController@update']);
	Route::patch('countries/{countries}', ['as'=> 'core.countries.update', 'uses' => 'Core\CountryController@update']);
	Route::delete('countries/{countries}', ['as'=> 'core.countries.destroy', 'uses' => 'Core\CountryController@destroy']);
	Route::get('countries/{countries}', ['as'=> 'core.countries.show', 'uses' => 'Core\CountryController@show']);
	Route::get('countries/{countries}/edit', ['as'=> 'core.countries.edit', 'uses' => 'Core\CountryController@edit']);


	Route::get('currencies', ['as'=> 'core.currencies.index', 'uses' => 'Core\CurrencyController@index']);
	Route::post('currencies', ['as'=> 'core.currencies.store', 'uses' => 'Core\CurrencyController@store']);
	Route::get('currencies/create', ['as'=> 'core.currencies.create', 'uses' => 'Core\CurrencyController@create']);
	Route::put('currencies/{currencies}', ['as'=> 'core.currencies.update', 'uses' => 'Core\CurrencyController@update']);
	Route::patch('currencies/{currencies}', ['as'=> 'core.currencies.update', 'uses' => 'Core\CurrencyController@update']);
	Route::delete('currencies/{currencies}', ['as'=> 'core.currencies.destroy', 'uses' => 'Core\CurrencyController@destroy']);
	Route::get('currencies/{currencies}', ['as'=> 'core.currencies.show', 'uses' => 'Core\CurrencyController@show']);
	Route::get('currencies/{currencies}/edit', ['as'=> 'core.currencies.edit', 'uses' => 'Core\CurrencyController@edit']);


	Route::get('departments', ['as'=> 'core.departments.index', 'uses' => 'Core\DepartmentController@index']);
	Route::post('departments', ['as'=> 'core.departments.store', 'uses' => 'Core\DepartmentController@store']);
	Route::get('departments/create', ['as'=> 'core.departments.create', 'uses' => 'Core\DepartmentController@create']);
	Route::put('departments/{departments}', ['as'=> 'core.departments.update', 'uses' => 'Core\DepartmentController@update']);
	Route::patch('departments/{departments}', ['as'=> 'core.departments.update', 'uses' => 'Core\DepartmentController@update']);
	Route::delete('departments/{departments}', ['as'=> 'core.departments.destroy', 'uses' => 'Core\DepartmentController@destroy']);
	Route::get('departments/{departments}', ['as'=> 'core.departments.show', 'uses' => 'Core\DepartmentController@show']);
	Route::get('departments/{departments}/edit', ['as'=> 'core.departments.edit', 'uses' => 'Core\DepartmentController@edit']);


	Route::get('features', ['as'=> 'core.features.index', 'uses' => 'Core\FeatureController@index']);
	Route::post('features', ['as'=> 'core.features.store', 'uses' => 'Core\FeatureController@store']);
	Route::get('features/create', ['as'=> 'core.features.create', 'uses' => 'Core\FeatureController@create']);
	Route::put('features/{features}', ['as'=> 'core.features.update', 'uses' => 'Core\FeatureController@update']);
	Route::patch('features/{features}', ['as'=> 'core.features.update', 'uses' => 'Core\FeatureController@update']);
	Route::delete('features/{features}', ['as'=> 'core.features.destroy', 'uses' => 'Core\FeatureController@destroy']);
	Route::get('features/{features}', ['as'=> 'core.features.show', 'uses' => 'Core\FeatureController@show']);
	Route::get('features/{features}/edit', ['as'=> 'core.features.edit', 'uses' => 'Core\FeatureController@edit']);




	Route::get('services', ['as'=> 'core.services.index', 'uses' => 'Core\ServiceController@index']);
	Route::post('services', ['as'=> 'core.services.store', 'uses' => 'Core\ServiceController@store']);
	Route::get('services/create', ['as'=> 'core.services.create', 'uses' => 'Core\ServiceController@create']);
	Route::put('services/{services}', ['as'=> 'core.services.update', 'uses' => 'Core\ServiceController@update']);
	Route::patch('services/{services}', ['as'=> 'core.services.update', 'uses' => 'Core\ServiceController@update']);
	Route::delete('services/{services}', ['as'=> 'core.services.destroy', 'uses' => 'Core\ServiceController@destroy']);
	Route::get('services/{services}', ['as'=> 'core.services.show', 'uses' => 'Core\ServiceController@show']);
	Route::get('services/{services}/edit', ['as'=> 'core.services.edit', 'uses' => 'Core\ServiceController@edit']);








});
