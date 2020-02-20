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

use App\content;
use App\Http\Controllers\MailContentController;
use App\Mail\sent;
use Illuminate\Support\Facades\Mail;

Route::get('/email/sent', function () {
    // Mail::to('example@gmail.com')->send(new sent());
    // return new sent();
    $message  = "hello";
    Mail::send('emails.welcome', ['key' => 'value'], function($message)
    {

       $message->from('myEmail@test.com')
           ->to('iljimae.ic@gmail.com', 'John Smith')
           ->subject('Welcome!');
    });
});
Route::get('/email', 'MailContentController@index');
Route::post('/email', 'MailContentController@update');
// Route::post('/', 'MailContentController@store');
Route::get('/create', 'SentController@create');
Route::post('/create', 'SentController@store');
Route::get('/sent', 'SentController@index');
Route::get('/sent/{sent}', 'SentController@show');
Route::get('/archive', 'ArchiveController@archive');
Route::get('/{content}', 'MailContentController@show');
Route::post('/{content}', 'MailContentController@delete');


