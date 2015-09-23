<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');
Route::get('contact ', 'WelcomeController@contact');
Route::get('about ', 'PagesController@about');
Route::get('getAll', 'NewsletterController@getAll');
Route::get('getById/{id}', 'NewsletterController@getById');
Route::post('createNewsletter', 'NewsletterController@createNewsletter');
Route::get('deleteNewsletter/{id}', 'NewsletterController@deleteNewsletter');
Route::post('editNewsletter/{id}', 'NewsletterController@editNewsletter');
Route::get('addEmail', 'EmailController@addEmail');
Route::get('getAllEmails', 'EmailController@getAllEmails');
Route::get('deleteEmail/{email}', 'EmailController@deleteEmail');
Route::post('addEmailToNewsletter', 'EmailNewsletterController@addEmailToNewsletter');
Route::get('deleteEmailFromNewsletter/{id_newsletter}/{email}', 'EmailNewsletterController@deleteEmailFromNewsletter');
Route::get('getEmailsNewsletter/{id_newsletter}', 'EmailNewsletterController@getEmailsNewsletter');
Route::post('sendEmail/{id_newsletter}', 'EmailController@sendEmail');
Route::post('login', 'LoginController@login');

