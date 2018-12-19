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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('core/crm/contract_types', 'Crm\ContractTypeAPIController@index');
Route::post('core/crm/contract_types', 'Crm\ContractTypeAPIController@store');
Route::get('core/crm/contract_types/{contract_types}', 'Crm\ContractTypeAPIController@show');
Route::put('core/crm/contract_types/{contract_types}', 'Crm\ContractTypeAPIController@update');
Route::patch('core/crm/contract_types/{contract_types}', 'Crm\ContractTypeAPIController@update');
Route::delete('core/crm/contract_types/{contract_types}', 'Crm\ContractTypeAPIController@destroy');


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


Route::get('core/products/product_pricehistories', 'Products\ProductPricehistoryAPIController@index');
Route::post('core/products/product_pricehistories', 'Products\ProductPricehistoryAPIController@store');
Route::get('core/products/product_pricehistories/{product_pricehistories}', 'Products\ProductPricehistoryAPIController@show');
Route::put('core/products/product_pricehistories/{product_pricehistories}', 'Products\ProductPricehistoryAPIController@update');
Route::patch('core/products/product_pricehistories/{product_pricehistories}', 'Products\ProductPricehistoryAPIController@update');
Route::delete('core/products/product_pricehistories/{product_pricehistories}', 'Products\ProductPricehistoryAPIController@destroy');


Route::get('core/crm/customers', 'Crm\CustomerAPIController@index');
Route::post('core/crm/customers', 'Crm\CustomerAPIController@store');
Route::get('core/crm/customers/{customers}', 'Crm\CustomerAPIController@show');
Route::put('core/crm/customers/{customers}', 'Crm\CustomerAPIController@update');
Route::patch('core/crm/customers/{customers}', 'Crm\CustomerAPIController@update');
Route::delete('core/crm/customers/{customers}', 'Crm\CustomerAPIController@destroy');


Route::get('core/products/product_groups', 'Products\ProductGroupAPIController@index');
Route::post('core/products/product_groups', 'Products\ProductGroupAPIController@store');
Route::get('core/products/product_groups/{product_groups}', 'Products\ProductGroupAPIController@show');
Route::put('core/products/product_groups/{product_groups}', 'Products\ProductGroupAPIController@update');
Route::patch('core/products/product_groups/{product_groups}', 'Products\ProductGroupAPIController@update');
Route::delete('core/products/product_groups/{product_groups}', 'Products\ProductGroupAPIController@destroy');


Route::get('core/crm/customer_groups', 'Crm\CustomerGroupAPIController@index');
Route::post('core/crm/customer_groups', 'Crm\CustomerGroupAPIController@store');
Route::get('core/crm/customer_groups/{customer_groups}', 'Crm\CustomerGroupAPIController@show');
Route::put('core/crm/customer_groups/{customer_groups}', 'Crm\CustomerGroupAPIController@update');
Route::patch('core/crm/customer_groups/{customer_groups}', 'Crm\CustomerGroupAPIController@update');
Route::delete('core/crm/customer_groups/{customer_groups}', 'Crm\CustomerGroupAPIController@destroy');


Route::get('core/crm/lead_sources', 'Crm\LeadSourceAPIController@index');
Route::post('core/crm/lead_sources', 'Crm\LeadSourceAPIController@store');
Route::get('core/crm/lead_sources/{lead_sources}', 'Crm\LeadSourceAPIController@show');
Route::put('core/crm/lead_sources/{lead_sources}', 'Crm\LeadSourceAPIController@update');
Route::patch('core/crm/lead_sources/{lead_sources}', 'Crm\LeadSourceAPIController@update');
Route::delete('core/crm/lead_sources/{lead_sources}', 'Crm\LeadSourceAPIController@destroy');


Route::get('core/expenses/expense_categories', 'Expenses\ExpenseCategoryAPIController@index');
Route::post('core/expenses/expense_categories', 'Expenses\ExpenseCategoryAPIController@store');
Route::get('core/expenses/expense_categories/{expense_categories}', 'Expenses\ExpenseCategoryAPIController@show');
Route::put('core/expenses/expense_categories/{expense_categories}', 'Expenses\ExpenseCategoryAPIController@update');
Route::patch('core/expenses/expense_categories/{expense_categories}', 'Expenses\ExpenseCategoryAPIController@update');
Route::delete('core/expenses/expense_categories/{expense_categories}', 'Expenses\ExpenseCategoryAPIController@destroy');


Route::get('core/crm/contract_types', 'Crm\ContractTypeAPIController@index');
Route::post('core/crm/contract_types', 'Crm\ContractTypeAPIController@store');
Route::get('core/crm/contract_types/{contract_types}', 'Crm\ContractTypeAPIController@show');
Route::put('core/crm/contract_types/{contract_types}', 'Crm\ContractTypeAPIController@update');
Route::patch('core/crm/contract_types/{contract_types}', 'Crm\ContractTypeAPIController@update');
Route::delete('core/crm/contract_types/{contract_types}', 'Crm\ContractTypeAPIController@destroy');


Route::get('core/core/tags', 'Core\TagAPIController@index');
Route::post('core/core/tags', 'Core\TagAPIController@store');
Route::get('core/core/tags/{tags}', 'Core\TagAPIController@show');
Route::put('core/core/tags/{tags}', 'Core\TagAPIController@update');
Route::patch('core/core/tags/{tags}', 'Core\TagAPIController@update');
Route::delete('core/core/tags/{tags}', 'Core\TagAPIController@destroy');
