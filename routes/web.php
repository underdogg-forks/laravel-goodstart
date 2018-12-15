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
