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

Route::get('/home', function () {
    return redirect('dashboard');
});

Route::get('/colors', function () {
    return view('pages/colors');
});

Route::get('/typography', function () {
    return view('pages/typography');
});

Route::get('/breadcrumb', function () {
    return view('pages/breadcrumb');
});

Route::get('/cards', function () {
    return view('pages/cards');
});

Route::get('/carousel', function () {
    return view('pages/carousel');
});

Route::get('/collapse', function () {
    return view('pages/collapse');
});

Route::get('/forms', function () {
    return view('pages/forms');
});

Route::get('/jumbotron', function () {
    return view('pages/jumbotron');
});

Route::get('/list-group', function () {
    return view('pages/list-group');
});

Route::get('/navs', function () {
    return view('pages/navs');
});

Route::get('/pagination', function () {
    return view('pages/pagination');
});

Route::get('/popovers', function () {
    return view('pages/popovers');
});

Route::get('/progress', function () {
    return view('pages/progress');
});

Route::get('/switches', function () {
    return view('pages/switches');
});

Route::get('/tables', function () {
    return view('pages/tables');
});

Route::get('/tabs', function () {
    return view('pages/tabs');
});

Route::get('/tooltips', function () {
    return view('pages/tooltips');
});

Route::get('/buttons', function () {
    return view('pages/buttons');
});

Route::get('/button-group', function () {
    return view('pages/button-group');
});

Route::get('/dropdowns', function () {
    return view('pages/dropdowns');
});

Route::get('/brand-buttons', function () {
    return view('pages/brand-buttons');
});

Route::get('/coreui-icons', function () {
    return view('pages/coreui-icons');
});

Route::get('/flags', function () {
    return view('pages/flags');
});

Route::get('/simple-line-icons', function () {
    return view('pages/simple-line-icons');
});

Route::get('/font-awesome', function () {
    return view('pages/font-awesome');
});

Route::get('/alerts', function () {
    return view('pages/alerts');
});

Route::get('/badge', function () {
    return view('pages/badge');
});

Route::get('/modals', function () {
    return view('pages/modals');
});

Route::get('/widgets', function () {
    return view('pages/widgets');
});

Route::get('/404', function () {
    return view('pages/404');
});

Route::get('/500', function () {
    return view('pages/500');
});

Route::get('/widgets', function () {
    return view('pages/widgets');
});



Route::get('/dashboard', 'DashboardController@index')->name('home');

require __DIR__ . '/profile/profile.php';
require __DIR__ . '/users/users.php';
require __DIR__ . '/roles/roles.php';
require __DIR__ . '/roles/permissions.php';
require __DIR__ . '/modules/modules.php';


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('core/crm/contractTypes', ['as'=> 'core.crm.contractTypes.index', 'uses' => 'Crm\ContractTypeController@index']);
Route::post('core/crm/contractTypes', ['as'=> 'core.crm.contractTypes.store', 'uses' => 'Crm\ContractTypeController@store']);
Route::get('core/crm/contractTypes/create', ['as'=> 'core.crm.contractTypes.create', 'uses' => 'Crm\ContractTypeController@create']);
Route::put('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.update', 'uses' => 'Crm\ContractTypeController@update']);
Route::patch('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.update', 'uses' => 'Crm\ContractTypeController@update']);
Route::delete('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.destroy', 'uses' => 'Crm\ContractTypeController@destroy']);
Route::get('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.show', 'uses' => 'Crm\ContractTypeController@show']);
Route::get('core/crm/contractTypes/{contractTypes}/edit', ['as'=> 'core.crm.contractTypes.edit', 'uses' => 'Crm\ContractTypeController@edit']);


Route::get('core/crm/contractTypes', ['as'=> 'core.crm.contractTypes.index', 'uses' => 'Crm\ContractTypeController@index']);
Route::post('core/crm/contractTypes', ['as'=> 'core.crm.contractTypes.store', 'uses' => 'Crm\ContractTypeController@store']);
Route::get('core/crm/contractTypes/create', ['as'=> 'core.crm.contractTypes.create', 'uses' => 'Crm\ContractTypeController@create']);
Route::put('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.update', 'uses' => 'Crm\ContractTypeController@update']);
Route::patch('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.update', 'uses' => 'Crm\ContractTypeController@update']);
Route::delete('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.destroy', 'uses' => 'Crm\ContractTypeController@destroy']);
Route::get('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.show', 'uses' => 'Crm\ContractTypeController@show']);
Route::get('core/crm/contractTypes/{contractTypes}/edit', ['as'=> 'core.crm.contractTypes.edit', 'uses' => 'Crm\ContractTypeController@edit']);


Route::get('core/core/taxes', ['as'=> 'core.core.taxes.index', 'uses' => 'Core\TaxController@index']);
Route::post('core/core/taxes', ['as'=> 'core.core.taxes.store', 'uses' => 'Core\TaxController@store']);
Route::get('core/core/taxes/create', ['as'=> 'core.core.taxes.create', 'uses' => 'Core\TaxController@create']);
Route::put('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.update', 'uses' => 'Core\TaxController@update']);
Route::patch('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.update', 'uses' => 'Core\TaxController@update']);
Route::delete('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.destroy', 'uses' => 'Core\TaxController@destroy']);
Route::get('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.show', 'uses' => 'Core\TaxController@show']);
Route::get('core/core/taxes/{taxes}/edit', ['as'=> 'core.core.taxes.edit', 'uses' => 'Core\TaxController@edit']);


Route::get('core/core/taxes', ['as'=> 'core.core.taxes.index', 'uses' => 'Core\TaxController@index']);
Route::post('core/core/taxes', ['as'=> 'core.core.taxes.store', 'uses' => 'Core\TaxController@store']);
Route::get('core/core/taxes/create', ['as'=> 'core.core.taxes.create', 'uses' => 'Core\TaxController@create']);
Route::put('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.update', 'uses' => 'Core\TaxController@update']);
Route::patch('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.update', 'uses' => 'Core\TaxController@update']);
Route::delete('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.destroy', 'uses' => 'Core\TaxController@destroy']);
Route::get('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.show', 'uses' => 'Core\TaxController@show']);
Route::get('core/core/taxes/{taxes}/edit', ['as'=> 'core.core.taxes.edit', 'uses' => 'Core\TaxController@edit']);


Route::get('core/core/tags', ['as'=> 'core.core.tags.index', 'uses' => 'Core\TagController@index']);
Route::post('core/core/tags', ['as'=> 'core.core.tags.store', 'uses' => 'Core\TagController@store']);
Route::get('core/core/tags/create', ['as'=> 'core.core.tags.create', 'uses' => 'Core\TagController@create']);
Route::put('core/core/tags/{tags}', ['as'=> 'core.core.tags.update', 'uses' => 'Core\TagController@update']);
Route::patch('core/core/tags/{tags}', ['as'=> 'core.core.tags.update', 'uses' => 'Core\TagController@update']);
Route::delete('core/core/tags/{tags}', ['as'=> 'core.core.tags.destroy', 'uses' => 'Core\TagController@destroy']);
Route::get('core/core/tags/{tags}', ['as'=> 'core.core.tags.show', 'uses' => 'Core\TagController@show']);
Route::get('core/core/tags/{tags}/edit', ['as'=> 'core.core.tags.edit', 'uses' => 'Core\TagController@edit']);


Route::get('core/core/tags', ['as'=> 'core.core.tags.index', 'uses' => 'Core\TagController@index']);
Route::post('core/core/tags', ['as'=> 'core.core.tags.store', 'uses' => 'Core\TagController@store']);
Route::get('core/core/tags/create', ['as'=> 'core.core.tags.create', 'uses' => 'Core\TagController@create']);
Route::put('core/core/tags/{tags}', ['as'=> 'core.core.tags.update', 'uses' => 'Core\TagController@update']);
Route::patch('core/core/tags/{tags}', ['as'=> 'core.core.tags.update', 'uses' => 'Core\TagController@update']);
Route::delete('core/core/tags/{tags}', ['as'=> 'core.core.tags.destroy', 'uses' => 'Core\TagController@destroy']);
Route::get('core/core/tags/{tags}', ['as'=> 'core.core.tags.show', 'uses' => 'Core\TagController@show']);
Route::get('core/core/tags/{tags}/edit', ['as'=> 'core.core.tags.edit', 'uses' => 'Core\TagController@edit']);


Route::get('core/core/companies', ['as'=> 'core.core.companies.index', 'uses' => 'Core\CompanyController@index']);
Route::post('core/core/companies', ['as'=> 'core.core.companies.store', 'uses' => 'Core\CompanyController@store']);
Route::get('core/core/companies/create', ['as'=> 'core.core.companies.create', 'uses' => 'Core\CompanyController@create']);
Route::put('core/core/companies/{companies}', ['as'=> 'core.core.companies.update', 'uses' => 'Core\CompanyController@update']);
Route::patch('core/core/companies/{companies}', ['as'=> 'core.core.companies.update', 'uses' => 'Core\CompanyController@update']);
Route::delete('core/core/companies/{companies}', ['as'=> 'core.core.companies.destroy', 'uses' => 'Core\CompanyController@destroy']);
Route::get('core/core/companies/{companies}', ['as'=> 'core.core.companies.show', 'uses' => 'Core\CompanyController@show']);
Route::get('core/core/companies/{companies}/edit', ['as'=> 'core.core.companies.edit', 'uses' => 'Core\CompanyController@edit']);


Route::get('core/core/countries', ['as'=> 'core.core.countries.index', 'uses' => 'Core\CountryController@index']);
Route::post('core/core/countries', ['as'=> 'core.core.countries.store', 'uses' => 'Core\CountryController@store']);
Route::get('core/core/countries/create', ['as'=> 'core.core.countries.create', 'uses' => 'Core\CountryController@create']);
Route::put('core/core/countries/{countries}', ['as'=> 'core.core.countries.update', 'uses' => 'Core\CountryController@update']);
Route::patch('core/core/countries/{countries}', ['as'=> 'core.core.countries.update', 'uses' => 'Core\CountryController@update']);
Route::delete('core/core/countries/{countries}', ['as'=> 'core.core.countries.destroy', 'uses' => 'Core\CountryController@destroy']);
Route::get('core/core/countries/{countries}', ['as'=> 'core.core.countries.show', 'uses' => 'Core\CountryController@show']);
Route::get('core/core/countries/{countries}/edit', ['as'=> 'core.core.countries.edit', 'uses' => 'Core\CountryController@edit']);


Route::get('core/core/currencies', ['as'=> 'core.core.currencies.index', 'uses' => 'Core\CurrencyController@index']);
Route::post('core/core/currencies', ['as'=> 'core.core.currencies.store', 'uses' => 'Core\CurrencyController@store']);
Route::get('core/core/currencies/create', ['as'=> 'core.core.currencies.create', 'uses' => 'Core\CurrencyController@create']);
Route::put('core/core/currencies/{currencies}', ['as'=> 'core.core.currencies.update', 'uses' => 'Core\CurrencyController@update']);
Route::patch('core/core/currencies/{currencies}', ['as'=> 'core.core.currencies.update', 'uses' => 'Core\CurrencyController@update']);
Route::delete('core/core/currencies/{currencies}', ['as'=> 'core.core.currencies.destroy', 'uses' => 'Core\CurrencyController@destroy']);
Route::get('core/core/currencies/{currencies}', ['as'=> 'core.core.currencies.show', 'uses' => 'Core\CurrencyController@show']);
Route::get('core/core/currencies/{currencies}/edit', ['as'=> 'core.core.currencies.edit', 'uses' => 'Core\CurrencyController@edit']);


Route::get('core/core/departments', ['as'=> 'core.core.departments.index', 'uses' => 'Core\DepartmentController@index']);
Route::post('core/core/departments', ['as'=> 'core.core.departments.store', 'uses' => 'Core\DepartmentController@store']);
Route::get('core/core/departments/create', ['as'=> 'core.core.departments.create', 'uses' => 'Core\DepartmentController@create']);
Route::put('core/core/departments/{departments}', ['as'=> 'core.core.departments.update', 'uses' => 'Core\DepartmentController@update']);
Route::patch('core/core/departments/{departments}', ['as'=> 'core.core.departments.update', 'uses' => 'Core\DepartmentController@update']);
Route::delete('core/core/departments/{departments}', ['as'=> 'core.core.departments.destroy', 'uses' => 'Core\DepartmentController@destroy']);
Route::get('core/core/departments/{departments}', ['as'=> 'core.core.departments.show', 'uses' => 'Core\DepartmentController@show']);
Route::get('core/core/departments/{departments}/edit', ['as'=> 'core.core.departments.edit', 'uses' => 'Core\DepartmentController@edit']);


Route::get('core/core/features', ['as'=> 'core.core.features.index', 'uses' => 'Core\FeatureController@index']);
Route::post('core/core/features', ['as'=> 'core.core.features.store', 'uses' => 'Core\FeatureController@store']);
Route::get('core/core/features/create', ['as'=> 'core.core.features.create', 'uses' => 'Core\FeatureController@create']);
Route::put('core/core/features/{features}', ['as'=> 'core.core.features.update', 'uses' => 'Core\FeatureController@update']);
Route::patch('core/core/features/{features}', ['as'=> 'core.core.features.update', 'uses' => 'Core\FeatureController@update']);
Route::delete('core/core/features/{features}', ['as'=> 'core.core.features.destroy', 'uses' => 'Core\FeatureController@destroy']);
Route::get('core/core/features/{features}', ['as'=> 'core.core.features.show', 'uses' => 'Core\FeatureController@show']);
Route::get('core/core/features/{features}/edit', ['as'=> 'core.core.features.edit', 'uses' => 'Core\FeatureController@edit']);


Route::get('core/core/documents', ['as'=> 'core.core.documents.index', 'uses' => 'Core\DocumentController@index']);
Route::post('core/core/documents', ['as'=> 'core.core.documents.store', 'uses' => 'Core\DocumentController@store']);
Route::get('core/core/documents/create', ['as'=> 'core.core.documents.create', 'uses' => 'Core\DocumentController@create']);
Route::put('core/core/documents/{documents}', ['as'=> 'core.core.documents.update', 'uses' => 'Core\DocumentController@update']);
Route::patch('core/core/documents/{documents}', ['as'=> 'core.core.documents.update', 'uses' => 'Core\DocumentController@update']);
Route::delete('core/core/documents/{documents}', ['as'=> 'core.core.documents.destroy', 'uses' => 'Core\DocumentController@destroy']);
Route::get('core/core/documents/{documents}', ['as'=> 'core.core.documents.show', 'uses' => 'Core\DocumentController@show']);
Route::get('core/core/documents/{documents}/edit', ['as'=> 'core.core.documents.edit', 'uses' => 'Core\DocumentController@edit']);


Route::get('core/core/notes', ['as'=> 'core.core.notes.index', 'uses' => 'Core\NoteController@index']);
Route::post('core/core/notes', ['as'=> 'core.core.notes.store', 'uses' => 'Core\NoteController@store']);
Route::get('core/core/notes/create', ['as'=> 'core.core.notes.create', 'uses' => 'Core\NoteController@create']);
Route::put('core/core/notes/{notes}', ['as'=> 'core.core.notes.update', 'uses' => 'Core\NoteController@update']);
Route::patch('core/core/notes/{notes}', ['as'=> 'core.core.notes.update', 'uses' => 'Core\NoteController@update']);
Route::delete('core/core/notes/{notes}', ['as'=> 'core.core.notes.destroy', 'uses' => 'Core\NoteController@destroy']);
Route::get('core/core/notes/{notes}', ['as'=> 'core.core.notes.show', 'uses' => 'Core\NoteController@show']);
Route::get('core/core/notes/{notes}/edit', ['as'=> 'core.core.notes.edit', 'uses' => 'Core\NoteController@edit']);


Route::get('core/core/notifications', ['as'=> 'core.core.notifications.index', 'uses' => 'Core\NotificationController@index']);
Route::post('core/core/notifications', ['as'=> 'core.core.notifications.store', 'uses' => 'Core\NotificationController@store']);
Route::get('core/core/notifications/create', ['as'=> 'core.core.notifications.create', 'uses' => 'Core\NotificationController@create']);
Route::put('core/core/notifications/{notifications}', ['as'=> 'core.core.notifications.update', 'uses' => 'Core\NotificationController@update']);
Route::patch('core/core/notifications/{notifications}', ['as'=> 'core.core.notifications.update', 'uses' => 'Core\NotificationController@update']);
Route::delete('core/core/notifications/{notifications}', ['as'=> 'core.core.notifications.destroy', 'uses' => 'Core\NotificationController@destroy']);
Route::get('core/core/notifications/{notifications}', ['as'=> 'core.core.notifications.show', 'uses' => 'Core\NotificationController@show']);
Route::get('core/core/notifications/{notifications}/edit', ['as'=> 'core.core.notifications.edit', 'uses' => 'Core\NotificationController@edit']);


Route::get('core/core/staff', ['as'=> 'core.core.staff.index', 'uses' => 'Core\StaffController@index']);
Route::post('core/core/staff', ['as'=> 'core.core.staff.store', 'uses' => 'Core\StaffController@store']);
Route::get('core/core/staff/create', ['as'=> 'core.core.staff.create', 'uses' => 'Core\StaffController@create']);
Route::put('core/core/staff/{staff}', ['as'=> 'core.core.staff.update', 'uses' => 'Core\StaffController@update']);
Route::patch('core/core/staff/{staff}', ['as'=> 'core.core.staff.update', 'uses' => 'Core\StaffController@update']);
Route::delete('core/core/staff/{staff}', ['as'=> 'core.core.staff.destroy', 'uses' => 'Core\StaffController@destroy']);
Route::get('core/core/staff/{staff}', ['as'=> 'core.core.staff.show', 'uses' => 'Core\StaffController@show']);
Route::get('core/core/staff/{staff}/edit', ['as'=> 'core.core.staff.edit', 'uses' => 'Core\StaffController@edit']);


Route::get('core/core/tags', ['as'=> 'core.core.tags.index', 'uses' => 'Core\TagController@index']);
Route::post('core/core/tags', ['as'=> 'core.core.tags.store', 'uses' => 'Core\TagController@store']);
Route::get('core/core/tags/create', ['as'=> 'core.core.tags.create', 'uses' => 'Core\TagController@create']);
Route::put('core/core/tags/{tags}', ['as'=> 'core.core.tags.update', 'uses' => 'Core\TagController@update']);
Route::patch('core/core/tags/{tags}', ['as'=> 'core.core.tags.update', 'uses' => 'Core\TagController@update']);
Route::delete('core/core/tags/{tags}', ['as'=> 'core.core.tags.destroy', 'uses' => 'Core\TagController@destroy']);
Route::get('core/core/tags/{tags}', ['as'=> 'core.core.tags.show', 'uses' => 'Core\TagController@show']);
Route::get('core/core/tags/{tags}/edit', ['as'=> 'core.core.tags.edit', 'uses' => 'Core\TagController@edit']);


Route::get('core/core/taxes', ['as'=> 'core.core.taxes.index', 'uses' => 'Core\TaxController@index']);
Route::post('core/core/taxes', ['as'=> 'core.core.taxes.store', 'uses' => 'Core\TaxController@store']);
Route::get('core/core/taxes/create', ['as'=> 'core.core.taxes.create', 'uses' => 'Core\TaxController@create']);
Route::put('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.update', 'uses' => 'Core\TaxController@update']);
Route::patch('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.update', 'uses' => 'Core\TaxController@update']);
Route::delete('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.destroy', 'uses' => 'Core\TaxController@destroy']);
Route::get('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.show', 'uses' => 'Core\TaxController@show']);
Route::get('core/core/taxes/{taxes}/edit', ['as'=> 'core.core.taxes.edit', 'uses' => 'Core\TaxController@edit']);


Route::get('core/crm/addresses', ['as'=> 'core.crm.addresses.index', 'uses' => 'Crm\AddressController@index']);
Route::post('core/crm/addresses', ['as'=> 'core.crm.addresses.store', 'uses' => 'Crm\AddressController@store']);
Route::get('core/crm/addresses/create', ['as'=> 'core.crm.addresses.create', 'uses' => 'Crm\AddressController@create']);
Route::put('core/crm/addresses/{addresses}', ['as'=> 'core.crm.addresses.update', 'uses' => 'Crm\AddressController@update']);
Route::patch('core/crm/addresses/{addresses}', ['as'=> 'core.crm.addresses.update', 'uses' => 'Crm\AddressController@update']);
Route::delete('core/crm/addresses/{addresses}', ['as'=> 'core.crm.addresses.destroy', 'uses' => 'Crm\AddressController@destroy']);
Route::get('core/crm/addresses/{addresses}', ['as'=> 'core.crm.addresses.show', 'uses' => 'Crm\AddressController@show']);
Route::get('core/crm/addresses/{addresses}/edit', ['as'=> 'core.crm.addresses.edit', 'uses' => 'Crm\AddressController@edit']);


Route::get('core/crm/communications', ['as'=> 'core.crm.communications.index', 'uses' => 'Crm\CommunicationController@index']);
Route::post('core/crm/communications', ['as'=> 'core.crm.communications.store', 'uses' => 'Crm\CommunicationController@store']);
Route::get('core/crm/communications/create', ['as'=> 'core.crm.communications.create', 'uses' => 'Crm\CommunicationController@create']);
Route::put('core/crm/communications/{communications}', ['as'=> 'core.crm.communications.update', 'uses' => 'Crm\CommunicationController@update']);
Route::patch('core/crm/communications/{communications}', ['as'=> 'core.crm.communications.update', 'uses' => 'Crm\CommunicationController@update']);
Route::delete('core/crm/communications/{communications}', ['as'=> 'core.crm.communications.destroy', 'uses' => 'Crm\CommunicationController@destroy']);
Route::get('core/crm/communications/{communications}', ['as'=> 'core.crm.communications.show', 'uses' => 'Crm\CommunicationController@show']);
Route::get('core/crm/communications/{communications}/edit', ['as'=> 'core.crm.communications.edit', 'uses' => 'Crm\CommunicationController@edit']);


Route::get('core/crm/contacts', ['as'=> 'core.crm.contacts.index', 'uses' => 'Crm\ContactController@index']);
Route::post('core/crm/contacts', ['as'=> 'core.crm.contacts.store', 'uses' => 'Crm\ContactController@store']);
Route::get('core/crm/contacts/create', ['as'=> 'core.crm.contacts.create', 'uses' => 'Crm\ContactController@create']);
Route::put('core/crm/contacts/{contacts}', ['as'=> 'core.crm.contacts.update', 'uses' => 'Crm\ContactController@update']);
Route::patch('core/crm/contacts/{contacts}', ['as'=> 'core.crm.contacts.update', 'uses' => 'Crm\ContactController@update']);
Route::delete('core/crm/contacts/{contacts}', ['as'=> 'core.crm.contacts.destroy', 'uses' => 'Crm\ContactController@destroy']);
Route::get('core/crm/contacts/{contacts}', ['as'=> 'core.crm.contacts.show', 'uses' => 'Crm\ContactController@show']);
Route::get('core/crm/contacts/{contacts}/edit', ['as'=> 'core.crm.contacts.edit', 'uses' => 'Crm\ContactController@edit']);


Route::get('core/crm/contracts', ['as'=> 'core.crm.contracts.index', 'uses' => 'Crm\ContractController@index']);
Route::post('core/crm/contracts', ['as'=> 'core.crm.contracts.store', 'uses' => 'Crm\ContractController@store']);
Route::get('core/crm/contracts/create', ['as'=> 'core.crm.contracts.create', 'uses' => 'Crm\ContractController@create']);
Route::put('core/crm/contracts/{contracts}', ['as'=> 'core.crm.contracts.update', 'uses' => 'Crm\ContractController@update']);
Route::patch('core/crm/contracts/{contracts}', ['as'=> 'core.crm.contracts.update', 'uses' => 'Crm\ContractController@update']);
Route::delete('core/crm/contracts/{contracts}', ['as'=> 'core.crm.contracts.destroy', 'uses' => 'Crm\ContractController@destroy']);
Route::get('core/crm/contracts/{contracts}', ['as'=> 'core.crm.contracts.show', 'uses' => 'Crm\ContractController@show']);
Route::get('core/crm/contracts/{contracts}/edit', ['as'=> 'core.crm.contracts.edit', 'uses' => 'Crm\ContractController@edit']);


Route::get('core/crm/contractTypes', ['as'=> 'core.crm.contractTypes.index', 'uses' => 'Crm\ContractTypeController@index']);
Route::post('core/crm/contractTypes', ['as'=> 'core.crm.contractTypes.store', 'uses' => 'Crm\ContractTypeController@store']);
Route::get('core/crm/contractTypes/create', ['as'=> 'core.crm.contractTypes.create', 'uses' => 'Crm\ContractTypeController@create']);
Route::put('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.update', 'uses' => 'Crm\ContractTypeController@update']);
Route::patch('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.update', 'uses' => 'Crm\ContractTypeController@update']);
Route::delete('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.destroy', 'uses' => 'Crm\ContractTypeController@destroy']);
Route::get('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.show', 'uses' => 'Crm\ContractTypeController@show']);
Route::get('core/crm/contractTypes/{contractTypes}/edit', ['as'=> 'core.crm.contractTypes.edit', 'uses' => 'Crm\ContractTypeController@edit']);


Route::get('core/crm/customerGroups', ['as'=> 'core.crm.customerGroups.index', 'uses' => 'Crm\CustomerGroupController@index']);
Route::post('core/crm/customerGroups', ['as'=> 'core.crm.customerGroups.store', 'uses' => 'Crm\CustomerGroupController@store']);
Route::get('core/crm/customerGroups/create', ['as'=> 'core.crm.customerGroups.create', 'uses' => 'Crm\CustomerGroupController@create']);
Route::put('core/crm/customerGroups/{customerGroups}', ['as'=> 'core.crm.customerGroups.update', 'uses' => 'Crm\CustomerGroupController@update']);
Route::patch('core/crm/customerGroups/{customerGroups}', ['as'=> 'core.crm.customerGroups.update', 'uses' => 'Crm\CustomerGroupController@update']);
Route::delete('core/crm/customerGroups/{customerGroups}', ['as'=> 'core.crm.customerGroups.destroy', 'uses' => 'Crm\CustomerGroupController@destroy']);
Route::get('core/crm/customerGroups/{customerGroups}', ['as'=> 'core.crm.customerGroups.show', 'uses' => 'Crm\CustomerGroupController@show']);
Route::get('core/crm/customerGroups/{customerGroups}/edit', ['as'=> 'core.crm.customerGroups.edit', 'uses' => 'Crm\CustomerGroupController@edit']);


Route::get('core/crm/customers', ['as'=> 'core.crm.customers.index', 'uses' => 'Crm\CustomerController@index']);
Route::post('core/crm/customers', ['as'=> 'core.crm.customers.store', 'uses' => 'Crm\CustomerController@store']);
Route::get('core/crm/customers/create', ['as'=> 'core.crm.customers.create', 'uses' => 'Crm\CustomerController@create']);
Route::put('core/crm/customers/{customers}', ['as'=> 'core.crm.customers.update', 'uses' => 'Crm\CustomerController@update']);
Route::patch('core/crm/customers/{customers}', ['as'=> 'core.crm.customers.update', 'uses' => 'Crm\CustomerController@update']);
Route::delete('core/crm/customers/{customers}', ['as'=> 'core.crm.customers.destroy', 'uses' => 'Crm\CustomerController@destroy']);
Route::get('core/crm/customers/{customers}', ['as'=> 'core.crm.customers.show', 'uses' => 'Crm\CustomerController@show']);
Route::get('core/crm/customers/{customers}/edit', ['as'=> 'core.crm.customers.edit', 'uses' => 'Crm\CustomerController@edit']);


Route::get('core/crm/estimates', ['as'=> 'core.crm.estimates.index', 'uses' => 'Crm\EstimateController@index']);
Route::post('core/crm/estimates', ['as'=> 'core.crm.estimates.store', 'uses' => 'Crm\EstimateController@store']);
Route::get('core/crm/estimates/create', ['as'=> 'core.crm.estimates.create', 'uses' => 'Crm\EstimateController@create']);
Route::put('core/crm/estimates/{estimates}', ['as'=> 'core.crm.estimates.update', 'uses' => 'Crm\EstimateController@update']);
Route::patch('core/crm/estimates/{estimates}', ['as'=> 'core.crm.estimates.update', 'uses' => 'Crm\EstimateController@update']);
Route::delete('core/crm/estimates/{estimates}', ['as'=> 'core.crm.estimates.destroy', 'uses' => 'Crm\EstimateController@destroy']);
Route::get('core/crm/estimates/{estimates}', ['as'=> 'core.crm.estimates.show', 'uses' => 'Crm\EstimateController@show']);
Route::get('core/crm/estimates/{estimates}/edit', ['as'=> 'core.crm.estimates.edit', 'uses' => 'Crm\EstimateController@edit']);


Route::get('core/crm/leads', ['as'=> 'core.crm.leads.index', 'uses' => 'Crm\LeadController@index']);
Route::post('core/crm/leads', ['as'=> 'core.crm.leads.store', 'uses' => 'Crm\LeadController@store']);
Route::get('core/crm/leads/create', ['as'=> 'core.crm.leads.create', 'uses' => 'Crm\LeadController@create']);
Route::put('core/crm/leads/{leads}', ['as'=> 'core.crm.leads.update', 'uses' => 'Crm\LeadController@update']);
Route::patch('core/crm/leads/{leads}', ['as'=> 'core.crm.leads.update', 'uses' => 'Crm\LeadController@update']);
Route::delete('core/crm/leads/{leads}', ['as'=> 'core.crm.leads.destroy', 'uses' => 'Crm\LeadController@destroy']);
Route::get('core/crm/leads/{leads}', ['as'=> 'core.crm.leads.show', 'uses' => 'Crm\LeadController@show']);
Route::get('core/crm/leads/{leads}/edit', ['as'=> 'core.crm.leads.edit', 'uses' => 'Crm\LeadController@edit']);


Route::get('core/crm/leadStatuses', ['as'=> 'core.crm.leadStatuses.index', 'uses' => 'Crm\LeadStatusController@index']);
Route::post('core/crm/leadStatuses', ['as'=> 'core.crm.leadStatuses.store', 'uses' => 'Crm\LeadStatusController@store']);
Route::get('core/crm/leadStatuses/create', ['as'=> 'core.crm.leadStatuses.create', 'uses' => 'Crm\LeadStatusController@create']);
Route::put('core/crm/leadStatuses/{leadStatuses}', ['as'=> 'core.crm.leadStatuses.update', 'uses' => 'Crm\LeadStatusController@update']);
Route::patch('core/crm/leadStatuses/{leadStatuses}', ['as'=> 'core.crm.leadStatuses.update', 'uses' => 'Crm\LeadStatusController@update']);
Route::delete('core/crm/leadStatuses/{leadStatuses}', ['as'=> 'core.crm.leadStatuses.destroy', 'uses' => 'Crm\LeadStatusController@destroy']);
Route::get('core/crm/leadStatuses/{leadStatuses}', ['as'=> 'core.crm.leadStatuses.show', 'uses' => 'Crm\LeadStatusController@show']);
Route::get('core/crm/leadStatuses/{leadStatuses}/edit', ['as'=> 'core.crm.leadStatuses.edit', 'uses' => 'Crm\LeadStatusController@edit']);


Route::get('core/crm/leadEmailIntegrations', ['as'=> 'core.crm.leadEmailIntegrations.index', 'uses' => 'Crm\LeadEmailIntegrationController@index']);
Route::post('core/crm/leadEmailIntegrations', ['as'=> 'core.crm.leadEmailIntegrations.store', 'uses' => 'Crm\LeadEmailIntegrationController@store']);
Route::get('core/crm/leadEmailIntegrations/create', ['as'=> 'core.crm.leadEmailIntegrations.create', 'uses' => 'Crm\LeadEmailIntegrationController@create']);
Route::put('core/crm/leadEmailIntegrations/{leadEmailIntegrations}', ['as'=> 'core.crm.leadEmailIntegrations.update', 'uses' => 'Crm\LeadEmailIntegrationController@update']);
Route::patch('core/crm/leadEmailIntegrations/{leadEmailIntegrations}', ['as'=> 'core.crm.leadEmailIntegrations.update', 'uses' => 'Crm\LeadEmailIntegrationController@update']);
Route::delete('core/crm/leadEmailIntegrations/{leadEmailIntegrations}', ['as'=> 'core.crm.leadEmailIntegrations.destroy', 'uses' => 'Crm\LeadEmailIntegrationController@destroy']);
Route::get('core/crm/leadEmailIntegrations/{leadEmailIntegrations}', ['as'=> 'core.crm.leadEmailIntegrations.show', 'uses' => 'Crm\LeadEmailIntegrationController@show']);
Route::get('core/crm/leadEmailIntegrations/{leadEmailIntegrations}/edit', ['as'=> 'core.crm.leadEmailIntegrations.edit', 'uses' => 'Crm\LeadEmailIntegrationController@edit']);


Route::get('core/crm/leadsIntegrations', ['as'=> 'core.crm.leadsIntegrations.index', 'uses' => 'Crm\LeadsIntegrationController@index']);
Route::post('core/crm/leadsIntegrations', ['as'=> 'core.crm.leadsIntegrations.store', 'uses' => 'Crm\LeadsIntegrationController@store']);
Route::get('core/crm/leadsIntegrations/create', ['as'=> 'core.crm.leadsIntegrations.create', 'uses' => 'Crm\LeadsIntegrationController@create']);
Route::put('core/crm/leadsIntegrations/{leadsIntegrations}', ['as'=> 'core.crm.leadsIntegrations.update', 'uses' => 'Crm\LeadsIntegrationController@update']);
Route::patch('core/crm/leadsIntegrations/{leadsIntegrations}', ['as'=> 'core.crm.leadsIntegrations.update', 'uses' => 'Crm\LeadsIntegrationController@update']);
Route::delete('core/crm/leadsIntegrations/{leadsIntegrations}', ['as'=> 'core.crm.leadsIntegrations.destroy', 'uses' => 'Crm\LeadsIntegrationController@destroy']);
Route::get('core/crm/leadsIntegrations/{leadsIntegrations}', ['as'=> 'core.crm.leadsIntegrations.show', 'uses' => 'Crm\LeadsIntegrationController@show']);
Route::get('core/crm/leadsIntegrations/{leadsIntegrations}/edit', ['as'=> 'core.crm.leadsIntegrations.edit', 'uses' => 'Crm\LeadsIntegrationController@edit']);


Route::get('core/crm/leadSources', ['as'=> 'core.crm.leadSources.index', 'uses' => 'Crm\LeadSourceController@index']);
Route::post('core/crm/leadSources', ['as'=> 'core.crm.leadSources.store', 'uses' => 'Crm\LeadSourceController@store']);
Route::get('core/crm/leadSources/create', ['as'=> 'core.crm.leadSources.create', 'uses' => 'Crm\LeadSourceController@create']);
Route::put('core/crm/leadSources/{leadSources}', ['as'=> 'core.crm.leadSources.update', 'uses' => 'Crm\LeadSourceController@update']);
Route::patch('core/crm/leadSources/{leadSources}', ['as'=> 'core.crm.leadSources.update', 'uses' => 'Crm\LeadSourceController@update']);
Route::delete('core/crm/leadSources/{leadSources}', ['as'=> 'core.crm.leadSources.destroy', 'uses' => 'Crm\LeadSourceController@destroy']);
Route::get('core/crm/leadSources/{leadSources}', ['as'=> 'core.crm.leadSources.show', 'uses' => 'Crm\LeadSourceController@show']);
Route::get('core/crm/leadSources/{leadSources}/edit', ['as'=> 'core.crm.leadSources.edit', 'uses' => 'Crm\LeadSourceController@edit']);


Route::get('core/crm/proposals', ['as'=> 'core.crm.proposals.index', 'uses' => 'Crm\ProposalController@index']);
Route::post('core/crm/proposals', ['as'=> 'core.crm.proposals.store', 'uses' => 'Crm\ProposalController@store']);
Route::get('core/crm/proposals/create', ['as'=> 'core.crm.proposals.create', 'uses' => 'Crm\ProposalController@create']);
Route::put('core/crm/proposals/{proposals}', ['as'=> 'core.crm.proposals.update', 'uses' => 'Crm\ProposalController@update']);
Route::patch('core/crm/proposals/{proposals}', ['as'=> 'core.crm.proposals.update', 'uses' => 'Crm\ProposalController@update']);
Route::delete('core/crm/proposals/{proposals}', ['as'=> 'core.crm.proposals.destroy', 'uses' => 'Crm\ProposalController@destroy']);
Route::get('core/crm/proposals/{proposals}', ['as'=> 'core.crm.proposals.show', 'uses' => 'Crm\ProposalController@show']);
Route::get('core/crm/proposals/{proposals}/edit', ['as'=> 'core.crm.proposals.edit', 'uses' => 'Crm\ProposalController@edit']);


Route::get('core/crm/relations', ['as'=> 'core.crm.relations.index', 'uses' => 'Crm\RelationController@index']);
Route::post('core/crm/relations', ['as'=> 'core.crm.relations.store', 'uses' => 'Crm\RelationController@store']);
Route::get('core/crm/relations/create', ['as'=> 'core.crm.relations.create', 'uses' => 'Crm\RelationController@create']);
Route::put('core/crm/relations/{relations}', ['as'=> 'core.crm.relations.update', 'uses' => 'Crm\RelationController@update']);
Route::patch('core/crm/relations/{relations}', ['as'=> 'core.crm.relations.update', 'uses' => 'Crm\RelationController@update']);
Route::delete('core/crm/relations/{relations}', ['as'=> 'core.crm.relations.destroy', 'uses' => 'Crm\RelationController@destroy']);
Route::get('core/crm/relations/{relations}', ['as'=> 'core.crm.relations.show', 'uses' => 'Crm\RelationController@show']);
Route::get('core/crm/relations/{relations}/edit', ['as'=> 'core.crm.relations.edit', 'uses' => 'Crm\RelationController@edit']);


Route::get('core/email/mailQueues', ['as'=> 'core.email.mailQueues.index', 'uses' => 'Email\MailQueueController@index']);
Route::post('core/email/mailQueues', ['as'=> 'core.email.mailQueues.store', 'uses' => 'Email\MailQueueController@store']);
Route::get('core/email/mailQueues/create', ['as'=> 'core.email.mailQueues.create', 'uses' => 'Email\MailQueueController@create']);
Route::put('core/email/mailQueues/{mailQueues}', ['as'=> 'core.email.mailQueues.update', 'uses' => 'Email\MailQueueController@update']);
Route::patch('core/email/mailQueues/{mailQueues}', ['as'=> 'core.email.mailQueues.update', 'uses' => 'Email\MailQueueController@update']);
Route::delete('core/email/mailQueues/{mailQueues}', ['as'=> 'core.email.mailQueues.destroy', 'uses' => 'Email\MailQueueController@destroy']);
Route::get('core/email/mailQueues/{mailQueues}', ['as'=> 'core.email.mailQueues.show', 'uses' => 'Email\MailQueueController@show']);
Route::get('core/email/mailQueues/{mailQueues}/edit', ['as'=> 'core.email.mailQueues.edit', 'uses' => 'Email\MailQueueController@edit']);


Route::get('core/email/mailTemplates', ['as'=> 'core.email.mailTemplates.index', 'uses' => 'Email\MailTemplateController@index']);
Route::post('core/email/mailTemplates', ['as'=> 'core.email.mailTemplates.store', 'uses' => 'Email\MailTemplateController@store']);
Route::get('core/email/mailTemplates/create', ['as'=> 'core.email.mailTemplates.create', 'uses' => 'Email\MailTemplateController@create']);
Route::put('core/email/mailTemplates/{mailTemplates}', ['as'=> 'core.email.mailTemplates.update', 'uses' => 'Email\MailTemplateController@update']);
Route::patch('core/email/mailTemplates/{mailTemplates}', ['as'=> 'core.email.mailTemplates.update', 'uses' => 'Email\MailTemplateController@update']);
Route::delete('core/email/mailTemplates/{mailTemplates}', ['as'=> 'core.email.mailTemplates.destroy', 'uses' => 'Email\MailTemplateController@destroy']);
Route::get('core/email/mailTemplates/{mailTemplates}', ['as'=> 'core.email.mailTemplates.show', 'uses' => 'Email\MailTemplateController@show']);
Route::get('core/email/mailTemplates/{mailTemplates}/edit', ['as'=> 'core.email.mailTemplates.edit', 'uses' => 'Email\MailTemplateController@edit']);


Route::get('core/expenses/expenses', ['as'=> 'core.expenses.expenses.index', 'uses' => 'Expenses\ExpenseController@index']);
Route::post('core/expenses/expenses', ['as'=> 'core.expenses.expenses.store', 'uses' => 'Expenses\ExpenseController@store']);
Route::get('core/expenses/expenses/create', ['as'=> 'core.expenses.expenses.create', 'uses' => 'Expenses\ExpenseController@create']);
Route::put('core/expenses/expenses/{expenses}', ['as'=> 'core.expenses.expenses.update', 'uses' => 'Expenses\ExpenseController@update']);
Route::patch('core/expenses/expenses/{expenses}', ['as'=> 'core.expenses.expenses.update', 'uses' => 'Expenses\ExpenseController@update']);
Route::delete('core/expenses/expenses/{expenses}', ['as'=> 'core.expenses.expenses.destroy', 'uses' => 'Expenses\ExpenseController@destroy']);
Route::get('core/expenses/expenses/{expenses}', ['as'=> 'core.expenses.expenses.show', 'uses' => 'Expenses\ExpenseController@show']);
Route::get('core/expenses/expenses/{expenses}/edit', ['as'=> 'core.expenses.expenses.edit', 'uses' => 'Expenses\ExpenseController@edit']);


Route::get('core/expenses/expenseCategories', ['as'=> 'core.expenses.expenseCategories.index', 'uses' => 'Expenses\ExpenseCategoryController@index']);
Route::post('core/expenses/expenseCategories', ['as'=> 'core.expenses.expenseCategories.store', 'uses' => 'Expenses\ExpenseCategoryController@store']);
Route::get('core/expenses/expenseCategories/create', ['as'=> 'core.expenses.expenseCategories.create', 'uses' => 'Expenses\ExpenseCategoryController@create']);
Route::put('core/expenses/expenseCategories/{expenseCategories}', ['as'=> 'core.expenses.expenseCategories.update', 'uses' => 'Expenses\ExpenseCategoryController@update']);
Route::patch('core/expenses/expenseCategories/{expenseCategories}', ['as'=> 'core.expenses.expenseCategories.update', 'uses' => 'Expenses\ExpenseCategoryController@update']);
Route::delete('core/expenses/expenseCategories/{expenseCategories}', ['as'=> 'core.expenses.expenseCategories.destroy', 'uses' => 'Expenses\ExpenseCategoryController@destroy']);
Route::get('core/expenses/expenseCategories/{expenseCategories}', ['as'=> 'core.expenses.expenseCategories.show', 'uses' => 'Expenses\ExpenseCategoryController@show']);
Route::get('core/expenses/expenseCategories/{expenseCategories}/edit', ['as'=> 'core.expenses.expenseCategories.edit', 'uses' => 'Expenses\ExpenseCategoryController@edit']);


Route::get('core/hrm/employees', ['as'=> 'core.hrm.employees.index', 'uses' => 'Hrm\EmployeeController@index']);
Route::post('core/hrm/employees', ['as'=> 'core.hrm.employees.store', 'uses' => 'Hrm\EmployeeController@store']);
Route::get('core/hrm/employees/create', ['as'=> 'core.hrm.employees.create', 'uses' => 'Hrm\EmployeeController@create']);
Route::put('core/hrm/employees/{employees}', ['as'=> 'core.hrm.employees.update', 'uses' => 'Hrm\EmployeeController@update']);
Route::patch('core/hrm/employees/{employees}', ['as'=> 'core.hrm.employees.update', 'uses' => 'Hrm\EmployeeController@update']);
Route::delete('core/hrm/employees/{employees}', ['as'=> 'core.hrm.employees.destroy', 'uses' => 'Hrm\EmployeeController@destroy']);
Route::get('core/hrm/employees/{employees}', ['as'=> 'core.hrm.employees.show', 'uses' => 'Hrm\EmployeeController@show']);
Route::get('core/hrm/employees/{employees}/edit', ['as'=> 'core.hrm.employees.edit', 'uses' => 'Hrm\EmployeeController@edit']);


Route::get('core/invoices/invoicePaymentRecords', ['as'=> 'core.invoices.invoicePaymentRecords.index', 'uses' => 'Invoices\InvoicePaymentRecordController@index']);
Route::post('core/invoices/invoicePaymentRecords', ['as'=> 'core.invoices.invoicePaymentRecords.store', 'uses' => 'Invoices\InvoicePaymentRecordController@store']);
Route::get('core/invoices/invoicePaymentRecords/create', ['as'=> 'core.invoices.invoicePaymentRecords.create', 'uses' => 'Invoices\InvoicePaymentRecordController@create']);
Route::put('core/invoices/invoicePaymentRecords/{invoicePaymentRecords}', ['as'=> 'core.invoices.invoicePaymentRecords.update', 'uses' => 'Invoices\InvoicePaymentRecordController@update']);
Route::patch('core/invoices/invoicePaymentRecords/{invoicePaymentRecords}', ['as'=> 'core.invoices.invoicePaymentRecords.update', 'uses' => 'Invoices\InvoicePaymentRecordController@update']);
Route::delete('core/invoices/invoicePaymentRecords/{invoicePaymentRecords}', ['as'=> 'core.invoices.invoicePaymentRecords.destroy', 'uses' => 'Invoices\InvoicePaymentRecordController@destroy']);
Route::get('core/invoices/invoicePaymentRecords/{invoicePaymentRecords}', ['as'=> 'core.invoices.invoicePaymentRecords.show', 'uses' => 'Invoices\InvoicePaymentRecordController@show']);
Route::get('core/invoices/invoicePaymentRecords/{invoicePaymentRecords}/edit', ['as'=> 'core.invoices.invoicePaymentRecords.edit', 'uses' => 'Invoices\InvoicePaymentRecordController@edit']);


Route::get('core/invoices/invoices', ['as'=> 'core.invoices.invoices.index', 'uses' => 'Invoices\InvoiceController@index']);
Route::post('core/invoices/invoices', ['as'=> 'core.invoices.invoices.store', 'uses' => 'Invoices\InvoiceController@store']);
Route::get('core/invoices/invoices/create', ['as'=> 'core.invoices.invoices.create', 'uses' => 'Invoices\InvoiceController@create']);
Route::put('core/invoices/invoices/{invoices}', ['as'=> 'core.invoices.invoices.update', 'uses' => 'Invoices\InvoiceController@update']);
Route::patch('core/invoices/invoices/{invoices}', ['as'=> 'core.invoices.invoices.update', 'uses' => 'Invoices\InvoiceController@update']);
Route::delete('core/invoices/invoices/{invoices}', ['as'=> 'core.invoices.invoices.destroy', 'uses' => 'Invoices\InvoiceController@destroy']);
Route::get('core/invoices/invoices/{invoices}', ['as'=> 'core.invoices.invoices.show', 'uses' => 'Invoices\InvoiceController@show']);
Route::get('core/invoices/invoices/{invoices}/edit', ['as'=> 'core.invoices.invoices.edit', 'uses' => 'Invoices\InvoiceController@edit']);


Route::get('core/invoices/invoiceCreditnotes', ['as'=> 'core.invoices.invoiceCreditnotes.index', 'uses' => 'Invoices\InvoiceCreditnoteController@index']);
Route::post('core/invoices/invoiceCreditnotes', ['as'=> 'core.invoices.invoiceCreditnotes.store', 'uses' => 'Invoices\InvoiceCreditnoteController@store']);
Route::get('core/invoices/invoiceCreditnotes/create', ['as'=> 'core.invoices.invoiceCreditnotes.create', 'uses' => 'Invoices\InvoiceCreditnoteController@create']);
Route::put('core/invoices/invoiceCreditnotes/{invoiceCreditnotes}', ['as'=> 'core.invoices.invoiceCreditnotes.update', 'uses' => 'Invoices\InvoiceCreditnoteController@update']);
Route::patch('core/invoices/invoiceCreditnotes/{invoiceCreditnotes}', ['as'=> 'core.invoices.invoiceCreditnotes.update', 'uses' => 'Invoices\InvoiceCreditnoteController@update']);
Route::delete('core/invoices/invoiceCreditnotes/{invoiceCreditnotes}', ['as'=> 'core.invoices.invoiceCreditnotes.destroy', 'uses' => 'Invoices\InvoiceCreditnoteController@destroy']);
Route::get('core/invoices/invoiceCreditnotes/{invoiceCreditnotes}', ['as'=> 'core.invoices.invoiceCreditnotes.show', 'uses' => 'Invoices\InvoiceCreditnoteController@show']);
Route::get('core/invoices/invoiceCreditnotes/{invoiceCreditnotes}/edit', ['as'=> 'core.invoices.invoiceCreditnotes.edit', 'uses' => 'Invoices\InvoiceCreditnoteController@edit']);


Route::get('core/invoices/invoiceCredits', ['as'=> 'core.invoices.invoiceCredits.index', 'uses' => 'Invoices\InvoiceCreditController@index']);
Route::post('core/invoices/invoiceCredits', ['as'=> 'core.invoices.invoiceCredits.store', 'uses' => 'Invoices\InvoiceCreditController@store']);
Route::get('core/invoices/invoiceCredits/create', ['as'=> 'core.invoices.invoiceCredits.create', 'uses' => 'Invoices\InvoiceCreditController@create']);
Route::put('core/invoices/invoiceCredits/{invoiceCredits}', ['as'=> 'core.invoices.invoiceCredits.update', 'uses' => 'Invoices\InvoiceCreditController@update']);
Route::patch('core/invoices/invoiceCredits/{invoiceCredits}', ['as'=> 'core.invoices.invoiceCredits.update', 'uses' => 'Invoices\InvoiceCreditController@update']);
Route::delete('core/invoices/invoiceCredits/{invoiceCredits}', ['as'=> 'core.invoices.invoiceCredits.destroy', 'uses' => 'Invoices\InvoiceCreditController@destroy']);
Route::get('core/invoices/invoiceCredits/{invoiceCredits}', ['as'=> 'core.invoices.invoiceCredits.show', 'uses' => 'Invoices\InvoiceCreditController@show']);
Route::get('core/invoices/invoiceCredits/{invoiceCredits}/edit', ['as'=> 'core.invoices.invoiceCredits.edit', 'uses' => 'Invoices\InvoiceCreditController@edit']);


Route::get('core/invoices/invoicePaymentModes', ['as'=> 'core.invoices.invoicePaymentModes.index', 'uses' => 'Invoices\InvoicePaymentModeController@index']);
Route::post('core/invoices/invoicePaymentModes', ['as'=> 'core.invoices.invoicePaymentModes.store', 'uses' => 'Invoices\InvoicePaymentModeController@store']);
Route::get('core/invoices/invoicePaymentModes/create', ['as'=> 'core.invoices.invoicePaymentModes.create', 'uses' => 'Invoices\InvoicePaymentModeController@create']);
Route::put('core/invoices/invoicePaymentModes/{invoicePaymentModes}', ['as'=> 'core.invoices.invoicePaymentModes.update', 'uses' => 'Invoices\InvoicePaymentModeController@update']);
Route::patch('core/invoices/invoicePaymentModes/{invoicePaymentModes}', ['as'=> 'core.invoices.invoicePaymentModes.update', 'uses' => 'Invoices\InvoicePaymentModeController@update']);
Route::delete('core/invoices/invoicePaymentModes/{invoicePaymentModes}', ['as'=> 'core.invoices.invoicePaymentModes.destroy', 'uses' => 'Invoices\InvoicePaymentModeController@destroy']);
Route::get('core/invoices/invoicePaymentModes/{invoicePaymentModes}', ['as'=> 'core.invoices.invoicePaymentModes.show', 'uses' => 'Invoices\InvoicePaymentModeController@show']);
Route::get('core/invoices/invoicePaymentModes/{invoicePaymentModes}/edit', ['as'=> 'core.invoices.invoicePaymentModes.edit', 'uses' => 'Invoices\InvoicePaymentModeController@edit']);


Route::get('core/invoices/invoiceReminders', ['as'=> 'core.invoices.invoiceReminders.index', 'uses' => 'Invoices\InvoiceReminderController@index']);
Route::post('core/invoices/invoiceReminders', ['as'=> 'core.invoices.invoiceReminders.store', 'uses' => 'Invoices\InvoiceReminderController@store']);
Route::get('core/invoices/invoiceReminders/create', ['as'=> 'core.invoices.invoiceReminders.create', 'uses' => 'Invoices\InvoiceReminderController@create']);
Route::put('core/invoices/invoiceReminders/{invoiceReminders}', ['as'=> 'core.invoices.invoiceReminders.update', 'uses' => 'Invoices\InvoiceReminderController@update']);
Route::patch('core/invoices/invoiceReminders/{invoiceReminders}', ['as'=> 'core.invoices.invoiceReminders.update', 'uses' => 'Invoices\InvoiceReminderController@update']);
Route::delete('core/invoices/invoiceReminders/{invoiceReminders}', ['as'=> 'core.invoices.invoiceReminders.destroy', 'uses' => 'Invoices\InvoiceReminderController@destroy']);
Route::get('core/invoices/invoiceReminders/{invoiceReminders}', ['as'=> 'core.invoices.invoiceReminders.show', 'uses' => 'Invoices\InvoiceReminderController@show']);
Route::get('core/invoices/invoiceReminders/{invoiceReminders}/edit', ['as'=> 'core.invoices.invoiceReminders.edit', 'uses' => 'Invoices\InvoiceReminderController@edit']);


Route::get('core/invoices/invoiceSubscriptions', ['as'=> 'core.invoices.invoiceSubscriptions.index', 'uses' => 'Invoices\InvoiceSubscriptionController@index']);
Route::post('core/invoices/invoiceSubscriptions', ['as'=> 'core.invoices.invoiceSubscriptions.store', 'uses' => 'Invoices\InvoiceSubscriptionController@store']);
Route::get('core/invoices/invoiceSubscriptions/create', ['as'=> 'core.invoices.invoiceSubscriptions.create', 'uses' => 'Invoices\InvoiceSubscriptionController@create']);
Route::put('core/invoices/invoiceSubscriptions/{invoiceSubscriptions}', ['as'=> 'core.invoices.invoiceSubscriptions.update', 'uses' => 'Invoices\InvoiceSubscriptionController@update']);
Route::patch('core/invoices/invoiceSubscriptions/{invoiceSubscriptions}', ['as'=> 'core.invoices.invoiceSubscriptions.update', 'uses' => 'Invoices\InvoiceSubscriptionController@update']);
Route::delete('core/invoices/invoiceSubscriptions/{invoiceSubscriptions}', ['as'=> 'core.invoices.invoiceSubscriptions.destroy', 'uses' => 'Invoices\InvoiceSubscriptionController@destroy']);
Route::get('core/invoices/invoiceSubscriptions/{invoiceSubscriptions}', ['as'=> 'core.invoices.invoiceSubscriptions.show', 'uses' => 'Invoices\InvoiceSubscriptionController@show']);
Route::get('core/invoices/invoiceSubscriptions/{invoiceSubscriptions}/edit', ['as'=> 'core.invoices.invoiceSubscriptions.edit', 'uses' => 'Invoices\InvoiceSubscriptionController@edit']);


Route::get('core/products/products', ['as'=> 'core.products.products.index', 'uses' => '\Modules\Core\Http\Controllers\Products\ProductController@index']);
Route::post('core/products/products', ['as'=> 'core.products.products.store', 'uses' => 'Products\ProductController@store']);
Route::get('core/products/products/create', ['as'=> 'core.products.products.create', 'uses' => 'Products\ProductController@create']);
Route::put('core/products/products/{products}', ['as'=> 'core.products.products.update', 'uses' => 'Products\ProductController@update']);
Route::patch('core/products/products/{products}', ['as'=> 'core.products.products.update', 'uses' => 'Products\ProductController@update']);
Route::delete('core/products/products/{products}', ['as'=> 'core.products.products.destroy', 'uses' => 'Products\ProductController@destroy']);
Route::get('core/products/products/{products}', ['as'=> 'core.products.products.show', 'uses' => 'Products\ProductController@show']);
Route::get('core/products/products/{products}/edit', ['as'=> 'core.products.products.edit', 'uses' => 'Products\ProductController@edit']);


Route::get('core/products/productGroups', ['as'=> 'core.products.productGroups.index', 'uses' => 'Products\ProductGroupController@index']);
Route::post('core/products/productGroups', ['as'=> 'core.products.productGroups.store', 'uses' => 'Products\ProductGroupController@store']);
Route::get('core/products/productGroups/create', ['as'=> 'core.products.productGroups.create', 'uses' => 'Products\ProductGroupController@create']);
Route::put('core/products/productGroups/{productGroups}', ['as'=> 'core.products.productGroups.update', 'uses' => 'Products\ProductGroupController@update']);
Route::patch('core/products/productGroups/{productGroups}', ['as'=> 'core.products.productGroups.update', 'uses' => 'Products\ProductGroupController@update']);
Route::delete('core/products/productGroups/{productGroups}', ['as'=> 'core.products.productGroups.destroy', 'uses' => 'Products\ProductGroupController@destroy']);
Route::get('core/products/productGroups/{productGroups}', ['as'=> 'core.products.productGroups.show', 'uses' => 'Products\ProductGroupController@show']);
Route::get('core/products/productGroups/{productGroups}/edit', ['as'=> 'core.products.productGroups.edit', 'uses' => 'Products\ProductGroupController@edit']);


Route::get('core/products/productPricehistories', ['as'=> 'core.products.productPricehistories.index', 'uses' => 'Products\ProductPricehistoryController@index']);
Route::post('core/products/productPricehistories', ['as'=> 'core.products.productPricehistories.store', 'uses' => 'Products\ProductPricehistoryController@store']);
Route::get('core/products/productPricehistories/create', ['as'=> 'core.products.productPricehistories.create', 'uses' => 'Products\ProductPricehistoryController@create']);
Route::put('core/products/productPricehistories/{productPricehistories}', ['as'=> 'core.products.productPricehistories.update', 'uses' => 'Products\ProductPricehistoryController@update']);
Route::patch('core/products/productPricehistories/{productPricehistories}', ['as'=> 'core.products.productPricehistories.update', 'uses' => 'Products\ProductPricehistoryController@update']);
Route::delete('core/products/productPricehistories/{productPricehistories}', ['as'=> 'core.products.productPricehistories.destroy', 'uses' => 'Products\ProductPricehistoryController@destroy']);
Route::get('core/products/productPricehistories/{productPricehistories}', ['as'=> 'core.products.productPricehistories.show', 'uses' => 'Products\ProductPricehistoryController@show']);
Route::get('core/products/productPricehistories/{productPricehistories}/edit', ['as'=> 'core.products.productPricehistories.edit', 'uses' => 'Products\ProductPricehistoryController@edit']);


Route::get('core/projects/projects', ['as'=> 'core.projects.projects.index', 'uses' => 'Projects\ProjectController@index']);
Route::post('core/projects/projects', ['as'=> 'core.projects.projects.store', 'uses' => 'Projects\ProjectController@store']);
Route::get('core/projects/projects/create', ['as'=> 'core.projects.projects.create', 'uses' => 'Projects\ProjectController@create']);
Route::put('core/projects/projects/{projects}', ['as'=> 'core.projects.projects.update', 'uses' => 'Projects\ProjectController@update']);
Route::patch('core/projects/projects/{projects}', ['as'=> 'core.projects.projects.update', 'uses' => 'Projects\ProjectController@update']);
Route::delete('core/projects/projects/{projects}', ['as'=> 'core.projects.projects.destroy', 'uses' => 'Projects\ProjectController@destroy']);
Route::get('core/projects/projects/{projects}', ['as'=> 'core.projects.projects.show', 'uses' => 'Projects\ProjectController@show']);
Route::get('core/projects/projects/{projects}/edit', ['as'=> 'core.projects.projects.edit', 'uses' => 'Projects\ProjectController@edit']);


Route::get('core/projects/projectMembers', ['as'=> 'core.projects.projectMembers.index', 'uses' => 'Projects\ProjectMemberController@index']);
Route::post('core/projects/projectMembers', ['as'=> 'core.projects.projectMembers.store', 'uses' => 'Projects\ProjectMemberController@store']);
Route::get('core/projects/projectMembers/create', ['as'=> 'core.projects.projectMembers.create', 'uses' => 'Projects\ProjectMemberController@create']);
Route::put('core/projects/projectMembers/{projectMembers}', ['as'=> 'core.projects.projectMembers.update', 'uses' => 'Projects\ProjectMemberController@update']);
Route::patch('core/projects/projectMembers/{projectMembers}', ['as'=> 'core.projects.projectMembers.update', 'uses' => 'Projects\ProjectMemberController@update']);
Route::delete('core/projects/projectMembers/{projectMembers}', ['as'=> 'core.projects.projectMembers.destroy', 'uses' => 'Projects\ProjectMemberController@destroy']);
Route::get('core/projects/projectMembers/{projectMembers}', ['as'=> 'core.projects.projectMembers.show', 'uses' => 'Projects\ProjectMemberController@show']);
Route::get('core/projects/projectMembers/{projectMembers}/edit', ['as'=> 'core.projects.projectMembers.edit', 'uses' => 'Projects\ProjectMemberController@edit']);


Route::get('core/projects/projectMilestones', ['as'=> 'core.projects.projectMilestones.index', 'uses' => 'Projects\ProjectMilestoneController@index']);
Route::post('core/projects/projectMilestones', ['as'=> 'core.projects.projectMilestones.store', 'uses' => 'Projects\ProjectMilestoneController@store']);
Route::get('core/projects/projectMilestones/create', ['as'=> 'core.projects.projectMilestones.create', 'uses' => 'Projects\ProjectMilestoneController@create']);
Route::put('core/projects/projectMilestones/{projectMilestones}', ['as'=> 'core.projects.projectMilestones.update', 'uses' => 'Projects\ProjectMilestoneController@update']);
Route::patch('core/projects/projectMilestones/{projectMilestones}', ['as'=> 'core.projects.projectMilestones.update', 'uses' => 'Projects\ProjectMilestoneController@update']);
Route::delete('core/projects/projectMilestones/{projectMilestones}', ['as'=> 'core.projects.projectMilestones.destroy', 'uses' => 'Projects\ProjectMilestoneController@destroy']);
Route::get('core/projects/projectMilestones/{projectMilestones}', ['as'=> 'core.projects.projectMilestones.show', 'uses' => 'Projects\ProjectMilestoneController@show']);
Route::get('core/projects/projectMilestones/{projectMilestones}/edit', ['as'=> 'core.projects.projectMilestones.edit', 'uses' => 'Projects\ProjectMilestoneController@edit']);


Route::get('core/projects/timesheets', ['as'=> 'core.projects.timesheets.index', 'uses' => 'Projects\TimesheetController@index']);
Route::post('core/projects/timesheets', ['as'=> 'core.projects.timesheets.store', 'uses' => 'Projects\TimesheetController@store']);
Route::get('core/projects/timesheets/create', ['as'=> 'core.projects.timesheets.create', 'uses' => 'Projects\TimesheetController@create']);
Route::put('core/projects/timesheets/{timesheets}', ['as'=> 'core.projects.timesheets.update', 'uses' => 'Projects\TimesheetController@update']);
Route::patch('core/projects/timesheets/{timesheets}', ['as'=> 'core.projects.timesheets.update', 'uses' => 'Projects\TimesheetController@update']);
Route::delete('core/projects/timesheets/{timesheets}', ['as'=> 'core.projects.timesheets.destroy', 'uses' => 'Projects\TimesheetController@destroy']);
Route::get('core/projects/timesheets/{timesheets}', ['as'=> 'core.projects.timesheets.show', 'uses' => 'Projects\TimesheetController@show']);
Route::get('core/projects/timesheets/{timesheets}/edit', ['as'=> 'core.projects.timesheets.edit', 'uses' => 'Projects\TimesheetController@edit']);


Route::get('core/tickets/tickets', ['as'=> 'core.tickets.tickets.index', 'uses' => 'Tickets\TicketController@index']);
Route::post('core/tickets/tickets', ['as'=> 'core.tickets.tickets.store', 'uses' => 'Tickets\TicketController@store']);
Route::get('core/tickets/tickets/create', ['as'=> 'core.tickets.tickets.create', 'uses' => 'Tickets\TicketController@create']);
Route::put('core/tickets/tickets/{tickets}', ['as'=> 'core.tickets.tickets.update', 'uses' => 'Tickets\TicketController@update']);
Route::patch('core/tickets/tickets/{tickets}', ['as'=> 'core.tickets.tickets.update', 'uses' => 'Tickets\TicketController@update']);
Route::delete('core/tickets/tickets/{tickets}', ['as'=> 'core.tickets.tickets.destroy', 'uses' => 'Tickets\TicketController@destroy']);
Route::get('core/tickets/tickets/{tickets}', ['as'=> 'core.tickets.tickets.show', 'uses' => 'Tickets\TicketController@show']);
Route::get('core/tickets/tickets/{tickets}/edit', ['as'=> 'core.tickets.tickets.edit', 'uses' => 'Tickets\TicketController@edit']);


Route::get('core/tickets/ticketAttachments', ['as'=> 'core.tickets.ticketAttachments.index', 'uses' => 'Tickets\TicketAttachmentController@index']);
Route::post('core/tickets/ticketAttachments', ['as'=> 'core.tickets.ticketAttachments.store', 'uses' => 'Tickets\TicketAttachmentController@store']);
Route::get('core/tickets/ticketAttachments/create', ['as'=> 'core.tickets.ticketAttachments.create', 'uses' => 'Tickets\TicketAttachmentController@create']);
Route::put('core/tickets/ticketAttachments/{ticketAttachments}', ['as'=> 'core.tickets.ticketAttachments.update', 'uses' => 'Tickets\TicketAttachmentController@update']);
Route::patch('core/tickets/ticketAttachments/{ticketAttachments}', ['as'=> 'core.tickets.ticketAttachments.update', 'uses' => 'Tickets\TicketAttachmentController@update']);
Route::delete('core/tickets/ticketAttachments/{ticketAttachments}', ['as'=> 'core.tickets.ticketAttachments.destroy', 'uses' => 'Tickets\TicketAttachmentController@destroy']);
Route::get('core/tickets/ticketAttachments/{ticketAttachments}', ['as'=> 'core.tickets.ticketAttachments.show', 'uses' => 'Tickets\TicketAttachmentController@show']);
Route::get('core/tickets/ticketAttachments/{ticketAttachments}/edit', ['as'=> 'core.tickets.ticketAttachments.edit', 'uses' => 'Tickets\TicketAttachmentController@edit']);


Route::get('core/tickets/ticketPipelogs', ['as'=> 'core.tickets.ticketPipelogs.index', 'uses' => 'Tickets\TicketPipelogController@index']);
Route::post('core/tickets/ticketPipelogs', ['as'=> 'core.tickets.ticketPipelogs.store', 'uses' => 'Tickets\TicketPipelogController@store']);
Route::get('core/tickets/ticketPipelogs/create', ['as'=> 'core.tickets.ticketPipelogs.create', 'uses' => 'Tickets\TicketPipelogController@create']);
Route::put('core/tickets/ticketPipelogs/{ticketPipelogs}', ['as'=> 'core.tickets.ticketPipelogs.update', 'uses' => 'Tickets\TicketPipelogController@update']);
Route::patch('core/tickets/ticketPipelogs/{ticketPipelogs}', ['as'=> 'core.tickets.ticketPipelogs.update', 'uses' => 'Tickets\TicketPipelogController@update']);
Route::delete('core/tickets/ticketPipelogs/{ticketPipelogs}', ['as'=> 'core.tickets.ticketPipelogs.destroy', 'uses' => 'Tickets\TicketPipelogController@destroy']);
Route::get('core/tickets/ticketPipelogs/{ticketPipelogs}', ['as'=> 'core.tickets.ticketPipelogs.show', 'uses' => 'Tickets\TicketPipelogController@show']);
Route::get('core/tickets/ticketPipelogs/{ticketPipelogs}/edit', ['as'=> 'core.tickets.ticketPipelogs.edit', 'uses' => 'Tickets\TicketPipelogController@edit']);


Route::get('core/tickets/ticketReplies', ['as'=> 'core.tickets.ticketReplies.index', 'uses' => 'Tickets\TicketReplyController@index']);
Route::post('core/tickets/ticketReplies', ['as'=> 'core.tickets.ticketReplies.store', 'uses' => 'Tickets\TicketReplyController@store']);
Route::get('core/tickets/ticketReplies/create', ['as'=> 'core.tickets.ticketReplies.create', 'uses' => 'Tickets\TicketReplyController@create']);
Route::put('core/tickets/ticketReplies/{ticketReplies}', ['as'=> 'core.tickets.ticketReplies.update', 'uses' => 'Tickets\TicketReplyController@update']);
Route::patch('core/tickets/ticketReplies/{ticketReplies}', ['as'=> 'core.tickets.ticketReplies.update', 'uses' => 'Tickets\TicketReplyController@update']);
Route::delete('core/tickets/ticketReplies/{ticketReplies}', ['as'=> 'core.tickets.ticketReplies.destroy', 'uses' => 'Tickets\TicketReplyController@destroy']);
Route::get('core/tickets/ticketReplies/{ticketReplies}', ['as'=> 'core.tickets.ticketReplies.show', 'uses' => 'Tickets\TicketReplyController@show']);
Route::get('core/tickets/ticketReplies/{ticketReplies}/edit', ['as'=> 'core.tickets.ticketReplies.edit', 'uses' => 'Tickets\TicketReplyController@edit']);


Route::get('core/tickets/ticketStatuses', ['as'=> 'core.tickets.ticketStatuses.index', 'uses' => 'Tickets\TicketStatusController@index']);
Route::post('core/tickets/ticketStatuses', ['as'=> 'core.tickets.ticketStatuses.store', 'uses' => 'Tickets\TicketStatusController@store']);
Route::get('core/tickets/ticketStatuses/create', ['as'=> 'core.tickets.ticketStatuses.create', 'uses' => 'Tickets\TicketStatusController@create']);
Route::put('core/tickets/ticketStatuses/{ticketStatuses}', ['as'=> 'core.tickets.ticketStatuses.update', 'uses' => 'Tickets\TicketStatusController@update']);
Route::patch('core/tickets/ticketStatuses/{ticketStatuses}', ['as'=> 'core.tickets.ticketStatuses.update', 'uses' => 'Tickets\TicketStatusController@update']);
Route::delete('core/tickets/ticketStatuses/{ticketStatuses}', ['as'=> 'core.tickets.ticketStatuses.destroy', 'uses' => 'Tickets\TicketStatusController@destroy']);
Route::get('core/tickets/ticketStatuses/{ticketStatuses}', ['as'=> 'core.tickets.ticketStatuses.show', 'uses' => 'Tickets\TicketStatusController@show']);
Route::get('core/tickets/ticketStatuses/{ticketStatuses}/edit', ['as'=> 'core.tickets.ticketStatuses.edit', 'uses' => 'Tickets\TicketStatusController@edit']);


Route::get('core/core/companies', ['as'=> 'core.core.companies.index', 'uses' => 'Core\CompanyController@index']);
Route::post('core/core/companies', ['as'=> 'core.core.companies.store', 'uses' => 'Core\CompanyController@store']);
Route::get('core/core/companies/create', ['as'=> 'core.core.companies.create', 'uses' => 'Core\CompanyController@create']);
Route::put('core/core/companies/{companies}', ['as'=> 'core.core.companies.update', 'uses' => 'Core\CompanyController@update']);
Route::patch('core/core/companies/{companies}', ['as'=> 'core.core.companies.update', 'uses' => 'Core\CompanyController@update']);
Route::delete('core/core/companies/{companies}', ['as'=> 'core.core.companies.destroy', 'uses' => 'Core\CompanyController@destroy']);
Route::get('core/core/companies/{companies}', ['as'=> 'core.core.companies.show', 'uses' => 'Core\CompanyController@show']);
Route::get('core/core/companies/{companies}/edit', ['as'=> 'core.core.companies.edit', 'uses' => 'Core\CompanyController@edit']);


Route::get('core/core/companies', ['as'=> 'core.core.companies.index', 'uses' => 'Core\CompanyController@index']);
Route::post('core/core/companies', ['as'=> 'core.core.companies.store', 'uses' => 'Core\CompanyController@store']);
Route::get('core/core/companies/create', ['as'=> 'core.core.companies.create', 'uses' => 'Core\CompanyController@create']);
Route::put('core/core/companies/{companies}', ['as'=> 'core.core.companies.update', 'uses' => 'Core\CompanyController@update']);
Route::patch('core/core/companies/{companies}', ['as'=> 'core.core.companies.update', 'uses' => 'Core\CompanyController@update']);
Route::delete('core/core/companies/{companies}', ['as'=> 'core.core.companies.destroy', 'uses' => 'Core\CompanyController@destroy']);
Route::get('core/core/companies/{companies}', ['as'=> 'core.core.companies.show', 'uses' => 'Core\CompanyController@show']);
Route::get('core/core/companies/{companies}/edit', ['as'=> 'core.core.companies.edit', 'uses' => 'Core\CompanyController@edit']);


Route::get('core/core/services', ['as'=> 'core.core.services.index', 'uses' => 'Core\ServiceController@index']);
Route::post('core/core/services', ['as'=> 'core.core.services.store', 'uses' => 'Core\ServiceController@store']);
Route::get('core/core/services/create', ['as'=> 'core.core.services.create', 'uses' => 'Core\ServiceController@create']);
Route::put('core/core/services/{services}', ['as'=> 'core.core.services.update', 'uses' => 'Core\ServiceController@update']);
Route::patch('core/core/services/{services}', ['as'=> 'core.core.services.update', 'uses' => 'Core\ServiceController@update']);
Route::delete('core/core/services/{services}', ['as'=> 'core.core.services.destroy', 'uses' => 'Core\ServiceController@destroy']);
Route::get('core/core/services/{services}', ['as'=> 'core.core.services.show', 'uses' => 'Core\ServiceController@show']);
Route::get('core/core/services/{services}/edit', ['as'=> 'core.core.services.edit', 'uses' => 'Core\ServiceController@edit']);


Route::get('core/core/taxes', ['as'=> 'core.core.taxes.index', 'uses' => 'Core\TaxController@index']);
Route::post('core/core/taxes', ['as'=> 'core.core.taxes.store', 'uses' => 'Core\TaxController@store']);
Route::get('core/core/taxes/create', ['as'=> 'core.core.taxes.create', 'uses' => 'Core\TaxController@create']);
Route::put('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.update', 'uses' => 'Core\TaxController@update']);
Route::patch('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.update', 'uses' => 'Core\TaxController@update']);
Route::delete('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.destroy', 'uses' => 'Core\TaxController@destroy']);
Route::get('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.show', 'uses' => 'Core\TaxController@show']);
Route::get('core/core/taxes/{taxes}/edit', ['as'=> 'core.core.taxes.edit', 'uses' => 'Core\TaxController@edit']);


Route::get('core/core/taxes', ['as'=> 'core.core.taxes.index', 'uses' => 'Core\TaxController@index']);
Route::post('core/core/taxes', ['as'=> 'core.core.taxes.store', 'uses' => 'Core\TaxController@store']);
Route::get('core/core/taxes/create', ['as'=> 'core.core.taxes.create', 'uses' => 'Core\TaxController@create']);
Route::put('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.update', 'uses' => 'Core\TaxController@update']);
Route::patch('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.update', 'uses' => 'Core\TaxController@update']);
Route::delete('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.destroy', 'uses' => 'Core\TaxController@destroy']);
Route::get('core/core/taxes/{taxes}', ['as'=> 'core.core.taxes.show', 'uses' => 'Core\TaxController@show']);
Route::get('core/core/taxes/{taxes}/edit', ['as'=> 'core.core.taxes.edit', 'uses' => 'Core\TaxController@edit']);


Route::get('core/products/productPricehistories', ['as'=> 'core.products.productPricehistories.index', 'uses' => 'Products\ProductPricehistoryController@index']);
Route::post('core/products/productPricehistories', ['as'=> 'core.products.productPricehistories.store', 'uses' => 'Products\ProductPricehistoryController@store']);
Route::get('core/products/productPricehistories/create', ['as'=> 'core.products.productPricehistories.create', 'uses' => 'Products\ProductPricehistoryController@create']);
Route::put('core/products/productPricehistories/{productPricehistories}', ['as'=> 'core.products.productPricehistories.update', 'uses' => 'Products\ProductPricehistoryController@update']);
Route::patch('core/products/productPricehistories/{productPricehistories}', ['as'=> 'core.products.productPricehistories.update', 'uses' => 'Products\ProductPricehistoryController@update']);
Route::delete('core/products/productPricehistories/{productPricehistories}', ['as'=> 'core.products.productPricehistories.destroy', 'uses' => 'Products\ProductPricehistoryController@destroy']);
Route::get('core/products/productPricehistories/{productPricehistories}', ['as'=> 'core.products.productPricehistories.show', 'uses' => 'Products\ProductPricehistoryController@show']);
Route::get('core/products/productPricehistories/{productPricehistories}/edit', ['as'=> 'core.products.productPricehistories.edit', 'uses' => 'Products\ProductPricehistoryController@edit']);


Route::get('core/products/productPricehistories', ['as'=> 'core.products.productPricehistories.index', 'uses' => 'Products\ProductPricehistoryController@index']);
Route::post('core/products/productPricehistories', ['as'=> 'core.products.productPricehistories.store', 'uses' => 'Products\ProductPricehistoryController@store']);
Route::get('core/products/productPricehistories/create', ['as'=> 'core.products.productPricehistories.create', 'uses' => 'Products\ProductPricehistoryController@create']);
Route::put('core/products/productPricehistories/{productPricehistories}', ['as'=> 'core.products.productPricehistories.update', 'uses' => 'Products\ProductPricehistoryController@update']);
Route::patch('core/products/productPricehistories/{productPricehistories}', ['as'=> 'core.products.productPricehistories.update', 'uses' => 'Products\ProductPricehistoryController@update']);
Route::delete('core/products/productPricehistories/{productPricehistories}', ['as'=> 'core.products.productPricehistories.destroy', 'uses' => 'Products\ProductPricehistoryController@destroy']);
Route::get('core/products/productPricehistories/{productPricehistories}', ['as'=> 'core.products.productPricehistories.show', 'uses' => 'Products\ProductPricehistoryController@show']);
Route::get('core/products/productPricehistories/{productPricehistories}/edit', ['as'=> 'core.products.productPricehistories.edit', 'uses' => 'Products\ProductPricehistoryController@edit']);


Route::get('core/crm/customers', ['as'=> 'core.crm.customers.index', 'uses' => 'Crm\CustomerController@index']);
Route::post('core/crm/customers', ['as'=> 'core.crm.customers.store', 'uses' => 'Crm\CustomerController@store']);
Route::get('core/crm/customers/create', ['as'=> 'core.crm.customers.create', 'uses' => 'Crm\CustomerController@create']);
Route::put('core/crm/customers/{customers}', ['as'=> 'core.crm.customers.update', 'uses' => 'Crm\CustomerController@update']);
Route::patch('core/crm/customers/{customers}', ['as'=> 'core.crm.customers.update', 'uses' => 'Crm\CustomerController@update']);
Route::delete('core/crm/customers/{customers}', ['as'=> 'core.crm.customers.destroy', 'uses' => 'Crm\CustomerController@destroy']);
Route::get('core/crm/customers/{customers}', ['as'=> 'core.crm.customers.show', 'uses' => 'Crm\CustomerController@show']);
Route::get('core/crm/customers/{customers}/edit', ['as'=> 'core.crm.customers.edit', 'uses' => 'Crm\CustomerController@edit']);


Route::get('core/crm/customers', ['as'=> 'core.crm.customers.index', 'uses' => 'Crm\CustomerController@index']);
Route::post('core/crm/customers', ['as'=> 'core.crm.customers.store', 'uses' => 'Crm\CustomerController@store']);
Route::get('core/crm/customers/create', ['as'=> 'core.crm.customers.create', 'uses' => 'Crm\CustomerController@create']);
Route::put('core/crm/customers/{customers}', ['as'=> 'core.crm.customers.update', 'uses' => 'Crm\CustomerController@update']);
Route::patch('core/crm/customers/{customers}', ['as'=> 'core.crm.customers.update', 'uses' => 'Crm\CustomerController@update']);
Route::delete('core/crm/customers/{customers}', ['as'=> 'core.crm.customers.destroy', 'uses' => 'Crm\CustomerController@destroy']);
Route::get('core/crm/customers/{customers}', ['as'=> 'core.crm.customers.show', 'uses' => 'Crm\CustomerController@show']);
Route::get('core/crm/customers/{customers}/edit', ['as'=> 'core.crm.customers.edit', 'uses' => 'Crm\CustomerController@edit']);


Route::get('core/products/productGroups', ['as'=> 'core.products.productGroups.index', 'uses' => 'Products\ProductGroupController@index']);
Route::post('core/products/productGroups', ['as'=> 'core.products.productGroups.store', 'uses' => 'Products\ProductGroupController@store']);
Route::get('core/products/productGroups/create', ['as'=> 'core.products.productGroups.create', 'uses' => 'Products\ProductGroupController@create']);
Route::put('core/products/productGroups/{productGroups}', ['as'=> 'core.products.productGroups.update', 'uses' => 'Products\ProductGroupController@update']);
Route::patch('core/products/productGroups/{productGroups}', ['as'=> 'core.products.productGroups.update', 'uses' => 'Products\ProductGroupController@update']);
Route::delete('core/products/productGroups/{productGroups}', ['as'=> 'core.products.productGroups.destroy', 'uses' => 'Products\ProductGroupController@destroy']);
Route::get('core/products/productGroups/{productGroups}', ['as'=> 'core.products.productGroups.show', 'uses' => 'Products\ProductGroupController@show']);
Route::get('core/products/productGroups/{productGroups}/edit', ['as'=> 'core.products.productGroups.edit', 'uses' => 'Products\ProductGroupController@edit']);


Route::get('core/products/productGroups', ['as'=> 'core.products.productGroups.index', 'uses' => 'Products\ProductGroupController@index']);
Route::post('core/products/productGroups', ['as'=> 'core.products.productGroups.store', 'uses' => 'Products\ProductGroupController@store']);
Route::get('core/products/productGroups/create', ['as'=> 'core.products.productGroups.create', 'uses' => 'Products\ProductGroupController@create']);
Route::put('core/products/productGroups/{productGroups}', ['as'=> 'core.products.productGroups.update', 'uses' => 'Products\ProductGroupController@update']);
Route::patch('core/products/productGroups/{productGroups}', ['as'=> 'core.products.productGroups.update', 'uses' => 'Products\ProductGroupController@update']);
Route::delete('core/products/productGroups/{productGroups}', ['as'=> 'core.products.productGroups.destroy', 'uses' => 'Products\ProductGroupController@destroy']);
Route::get('core/products/productGroups/{productGroups}', ['as'=> 'core.products.productGroups.show', 'uses' => 'Products\ProductGroupController@show']);
Route::get('core/products/productGroups/{productGroups}/edit', ['as'=> 'core.products.productGroups.edit', 'uses' => 'Products\ProductGroupController@edit']);


Route::get('core/crm/customerGroups', ['as'=> 'core.crm.customerGroups.index', 'uses' => 'Crm\CustomerGroupController@index']);
Route::post('core/crm/customerGroups', ['as'=> 'core.crm.customerGroups.store', 'uses' => 'Crm\CustomerGroupController@store']);
Route::get('core/crm/customerGroups/create', ['as'=> 'core.crm.customerGroups.create', 'uses' => 'Crm\CustomerGroupController@create']);
Route::put('core/crm/customerGroups/{customerGroups}', ['as'=> 'core.crm.customerGroups.update', 'uses' => 'Crm\CustomerGroupController@update']);
Route::patch('core/crm/customerGroups/{customerGroups}', ['as'=> 'core.crm.customerGroups.update', 'uses' => 'Crm\CustomerGroupController@update']);
Route::delete('core/crm/customerGroups/{customerGroups}', ['as'=> 'core.crm.customerGroups.destroy', 'uses' => 'Crm\CustomerGroupController@destroy']);
Route::get('core/crm/customerGroups/{customerGroups}', ['as'=> 'core.crm.customerGroups.show', 'uses' => 'Crm\CustomerGroupController@show']);
Route::get('core/crm/customerGroups/{customerGroups}/edit', ['as'=> 'core.crm.customerGroups.edit', 'uses' => 'Crm\CustomerGroupController@edit']);


Route::get('core/crm/customerGroups', ['as'=> 'core.crm.customerGroups.index', 'uses' => 'Crm\CustomerGroupController@index']);
Route::post('core/crm/customerGroups', ['as'=> 'core.crm.customerGroups.store', 'uses' => 'Crm\CustomerGroupController@store']);
Route::get('core/crm/customerGroups/create', ['as'=> 'core.crm.customerGroups.create', 'uses' => 'Crm\CustomerGroupController@create']);
Route::put('core/crm/customerGroups/{customerGroups}', ['as'=> 'core.crm.customerGroups.update', 'uses' => 'Crm\CustomerGroupController@update']);
Route::patch('core/crm/customerGroups/{customerGroups}', ['as'=> 'core.crm.customerGroups.update', 'uses' => 'Crm\CustomerGroupController@update']);
Route::delete('core/crm/customerGroups/{customerGroups}', ['as'=> 'core.crm.customerGroups.destroy', 'uses' => 'Crm\CustomerGroupController@destroy']);
Route::get('core/crm/customerGroups/{customerGroups}', ['as'=> 'core.crm.customerGroups.show', 'uses' => 'Crm\CustomerGroupController@show']);
Route::get('core/crm/customerGroups/{customerGroups}/edit', ['as'=> 'core.crm.customerGroups.edit', 'uses' => 'Crm\CustomerGroupController@edit']);


Route::get('core/crm/leadSources', ['as'=> 'core.crm.leadSources.index', 'uses' => 'Crm\LeadSourceController@index']);
Route::post('core/crm/leadSources', ['as'=> 'core.crm.leadSources.store', 'uses' => 'Crm\LeadSourceController@store']);
Route::get('core/crm/leadSources/create', ['as'=> 'core.crm.leadSources.create', 'uses' => 'Crm\LeadSourceController@create']);
Route::put('core/crm/leadSources/{leadSources}', ['as'=> 'core.crm.leadSources.update', 'uses' => 'Crm\LeadSourceController@update']);
Route::patch('core/crm/leadSources/{leadSources}', ['as'=> 'core.crm.leadSources.update', 'uses' => 'Crm\LeadSourceController@update']);
Route::delete('core/crm/leadSources/{leadSources}', ['as'=> 'core.crm.leadSources.destroy', 'uses' => 'Crm\LeadSourceController@destroy']);
Route::get('core/crm/leadSources/{leadSources}', ['as'=> 'core.crm.leadSources.show', 'uses' => 'Crm\LeadSourceController@show']);
Route::get('core/crm/leadSources/{leadSources}/edit', ['as'=> 'core.crm.leadSources.edit', 'uses' => 'Crm\LeadSourceController@edit']);


Route::get('core/crm/leadSources', ['as'=> 'core.crm.leadSources.index', 'uses' => 'Crm\LeadSourceController@index']);
Route::post('core/crm/leadSources', ['as'=> 'core.crm.leadSources.store', 'uses' => 'Crm\LeadSourceController@store']);
Route::get('core/crm/leadSources/create', ['as'=> 'core.crm.leadSources.create', 'uses' => 'Crm\LeadSourceController@create']);
Route::put('core/crm/leadSources/{leadSources}', ['as'=> 'core.crm.leadSources.update', 'uses' => 'Crm\LeadSourceController@update']);
Route::patch('core/crm/leadSources/{leadSources}', ['as'=> 'core.crm.leadSources.update', 'uses' => 'Crm\LeadSourceController@update']);
Route::delete('core/crm/leadSources/{leadSources}', ['as'=> 'core.crm.leadSources.destroy', 'uses' => 'Crm\LeadSourceController@destroy']);
Route::get('core/crm/leadSources/{leadSources}', ['as'=> 'core.crm.leadSources.show', 'uses' => 'Crm\LeadSourceController@show']);
Route::get('core/crm/leadSources/{leadSources}/edit', ['as'=> 'core.crm.leadSources.edit', 'uses' => 'Crm\LeadSourceController@edit']);


Route::get('core/expenses/expenseCategories', ['as'=> 'core.expenses.expenseCategories.index', 'uses' => 'Expenses\ExpenseCategoryController@index']);
Route::post('core/expenses/expenseCategories', ['as'=> 'core.expenses.expenseCategories.store', 'uses' => 'Expenses\ExpenseCategoryController@store']);
Route::get('core/expenses/expenseCategories/create', ['as'=> 'core.expenses.expenseCategories.create', 'uses' => 'Expenses\ExpenseCategoryController@create']);
Route::put('core/expenses/expenseCategories/{expenseCategories}', ['as'=> 'core.expenses.expenseCategories.update', 'uses' => 'Expenses\ExpenseCategoryController@update']);
Route::patch('core/expenses/expenseCategories/{expenseCategories}', ['as'=> 'core.expenses.expenseCategories.update', 'uses' => 'Expenses\ExpenseCategoryController@update']);
Route::delete('core/expenses/expenseCategories/{expenseCategories}', ['as'=> 'core.expenses.expenseCategories.destroy', 'uses' => 'Expenses\ExpenseCategoryController@destroy']);
Route::get('core/expenses/expenseCategories/{expenseCategories}', ['as'=> 'core.expenses.expenseCategories.show', 'uses' => 'Expenses\ExpenseCategoryController@show']);
Route::get('core/expenses/expenseCategories/{expenseCategories}/edit', ['as'=> 'core.expenses.expenseCategories.edit', 'uses' => 'Expenses\ExpenseCategoryController@edit']);


Route::get('core/expenses/expenseCategories', ['as'=> 'core.expenses.expenseCategories.index', 'uses' => 'Expenses\ExpenseCategoryController@index']);
Route::post('core/expenses/expenseCategories', ['as'=> 'core.expenses.expenseCategories.store', 'uses' => 'Expenses\ExpenseCategoryController@store']);
Route::get('core/expenses/expenseCategories/create', ['as'=> 'core.expenses.expenseCategories.create', 'uses' => 'Expenses\ExpenseCategoryController@create']);
Route::put('core/expenses/expenseCategories/{expenseCategories}', ['as'=> 'core.expenses.expenseCategories.update', 'uses' => 'Expenses\ExpenseCategoryController@update']);
Route::patch('core/expenses/expenseCategories/{expenseCategories}', ['as'=> 'core.expenses.expenseCategories.update', 'uses' => 'Expenses\ExpenseCategoryController@update']);
Route::delete('core/expenses/expenseCategories/{expenseCategories}', ['as'=> 'core.expenses.expenseCategories.destroy', 'uses' => 'Expenses\ExpenseCategoryController@destroy']);
Route::get('core/expenses/expenseCategories/{expenseCategories}', ['as'=> 'core.expenses.expenseCategories.show', 'uses' => 'Expenses\ExpenseCategoryController@show']);
Route::get('core/expenses/expenseCategories/{expenseCategories}/edit', ['as'=> 'core.expenses.expenseCategories.edit', 'uses' => 'Expenses\ExpenseCategoryController@edit']);


Route::get('core/crm/contractTypes', ['as'=> 'core.crm.contractTypes.index', 'uses' => 'Crm\ContractTypeController@index']);
Route::post('core/crm/contractTypes', ['as'=> 'core.crm.contractTypes.store', 'uses' => 'Crm\ContractTypeController@store']);
Route::get('core/crm/contractTypes/create', ['as'=> 'core.crm.contractTypes.create', 'uses' => 'Crm\ContractTypeController@create']);
Route::put('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.update', 'uses' => 'Crm\ContractTypeController@update']);
Route::patch('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.update', 'uses' => 'Crm\ContractTypeController@update']);
Route::delete('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.destroy', 'uses' => 'Crm\ContractTypeController@destroy']);
Route::get('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.show', 'uses' => 'Crm\ContractTypeController@show']);
Route::get('core/crm/contractTypes/{contractTypes}/edit', ['as'=> 'core.crm.contractTypes.edit', 'uses' => 'Crm\ContractTypeController@edit']);


Route::get('core/crm/contractTypes', ['as'=> 'core.crm.contractTypes.index', 'uses' => 'Crm\ContractTypeController@index']);
Route::post('core/crm/contractTypes', ['as'=> 'core.crm.contractTypes.store', 'uses' => 'Crm\ContractTypeController@store']);
Route::get('core/crm/contractTypes/create', ['as'=> 'core.crm.contractTypes.create', 'uses' => 'Crm\ContractTypeController@create']);
Route::put('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.update', 'uses' => 'Crm\ContractTypeController@update']);
Route::patch('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.update', 'uses' => 'Crm\ContractTypeController@update']);
Route::delete('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.destroy', 'uses' => 'Crm\ContractTypeController@destroy']);
Route::get('core/crm/contractTypes/{contractTypes}', ['as'=> 'core.crm.contractTypes.show', 'uses' => 'Crm\ContractTypeController@show']);
Route::get('core/crm/contractTypes/{contractTypes}/edit', ['as'=> 'core.crm.contractTypes.edit', 'uses' => 'Crm\ContractTypeController@edit']);


Route::get('core/core/tags', ['as'=> 'core.core.tags.index', 'uses' => 'Core\TagController@index']);
Route::post('core/core/tags', ['as'=> 'core.core.tags.store', 'uses' => 'Core\TagController@store']);
Route::get('core/core/tags/create', ['as'=> 'core.core.tags.create', 'uses' => 'Core\TagController@create']);
Route::put('core/core/tags/{tags}', ['as'=> 'core.core.tags.update', 'uses' => 'Core\TagController@update']);
Route::patch('core/core/tags/{tags}', ['as'=> 'core.core.tags.update', 'uses' => 'Core\TagController@update']);
Route::delete('core/core/tags/{tags}', ['as'=> 'core.core.tags.destroy', 'uses' => 'Core\TagController@destroy']);
Route::get('core/core/tags/{tags}', ['as'=> 'core.core.tags.show', 'uses' => 'Core\TagController@show']);
Route::get('core/core/tags/{tags}/edit', ['as'=> 'core.core.tags.edit', 'uses' => 'Core\TagController@edit']);


Route::get('core/core/tags', ['as'=> 'core.core.tags.index', 'uses' => 'Core\TagController@index']);
Route::post('core/core/tags', ['as'=> 'core.core.tags.store', 'uses' => 'Core\TagController@store']);
Route::get('core/core/tags/create', ['as'=> 'core.core.tags.create', 'uses' => 'Core\TagController@create']);
Route::put('core/core/tags/{tags}', ['as'=> 'core.core.tags.update', 'uses' => 'Core\TagController@update']);
Route::patch('core/core/tags/{tags}', ['as'=> 'core.core.tags.update', 'uses' => 'Core\TagController@update']);
Route::delete('core/core/tags/{tags}', ['as'=> 'core.core.tags.destroy', 'uses' => 'Core\TagController@destroy']);
Route::get('core/core/tags/{tags}', ['as'=> 'core.core.tags.show', 'uses' => 'Core\TagController@show']);
Route::get('core/core/tags/{tags}/edit', ['as'=> 'core.core.tags.edit', 'uses' => 'Core\TagController@edit']);
