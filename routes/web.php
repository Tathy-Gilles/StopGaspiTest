<?php

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('conseils', 'PageController@conseils');

Route::get('simulateur', 'SimulateurController@index');


Route::get('videos', 'VideoController@display_all');
Route::get('videos/{id}', 'VideoController@display');


Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@submit');

// Auth

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

//------------------------------------------------------------- WORKFLOW ---------------------------------------------------------------------

Route::get('/workflow', 'WorkflowController@index');
Route::post('/workflow', 'WorkflowController@login');
Route::get('/workflow/dashboard', 'WorkflowController@dashboard');

// Workflow Appointment

Route::post('/workflow/appointment/create', 'AppointmentController@store');
Route::post('/workflow/appointment/fetch', 'AppointmentController@fetch');
Route::post('/workflow/appointment/finish/{id}', 'AppointmentController@finish');

// Workflow FileManager

Route::get('/workflow/browser', 'ManagerController@userManager');
// Route::post('/workflow/uploader', 'ManagerController@uploader');

//--------------------------------------------------------------------------------------------------------------------------------------------------

//------------------------------------------------------------- ADMINISTRATION ---------------------------------------------------------------------

Route::get('/admin', 'AdministrationController@index');
Route::post('/admin', 'AdministrationController@login');

// Admin FileManager

Route::get('/admin/browser', 'ManagerController@browser');
Route::post('/admin/uploader', 'ManagerController@uploader');

// Admin Pages

Route::get('/admin/page', 'PageController@index');
Route::get('/admin/page/edit/{id}', 'PageController@edit');
Route::post('/admin/page/edit/{id}', 'PageController@update');

// Admin Videos

Route::get('/admin/video', 'VideoController@index');
Route::get('/admin/video/create', 'VideoController@create');
Route::post('/admin/video/create', 'VideoController@store');
Route::get('/admin/video/edit/{id}', 'VideoController@edit');
Route::post('/admin/video/edit/{id}', 'VideoController@update');
Route::delete('/admin/video/delete/{id}', 'VideoController@delete');

// Admin Files

Route::get('/admin/file', 'FileController@index');
Route::get('/admin/file/create', 'FileController@create');
Route::post('/admin/file/create', 'FileController@store');
Route::get('/admin/file/edit/{id}', 'FileController@edit');
Route::post('/admin/file/edit/{id}', 'FileController@update');
Route::delete('/admin/file/delete/{id}', 'FileController@delete');

// Admin Users

Route::get('/admin/user', 'UserController@index');
Route::get('/admin/user/create', 'UserController@create');
Route::post('/admin/user/create', 'UserController@store');
Route::post('/admin/user/validate/{id}', 'UserController@activate');
Route::get('/admin/user/edit/{id}', 'UserController@edit');
Route::post('/admin/user/edit/{id}', 'UserController@update');
Route::delete('/admin/user/delete/{id}', 'UserController@delete');

// Admin Archives

Route::get('/admin/archive/user', 'ArchiveController@displayUser');
Route::post('/admin/archive/user/{id}', 'ArchiveController@enableUser');

//--------------------------------------------------------------------------------------------------------------------------------------------------
