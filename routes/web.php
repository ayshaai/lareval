<?php
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\TwilioSMSController;
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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hello', 'HomeController@hello')->name('hello');
Route::get('/timeline', 'TweetsController@timeline');
Route::post('/tweet/create', 'TweetsController@createTweet');
Route::get('/tweet/detail/{tweet_id}', 'TweetsController@displayTweetdetails');
Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

Route::get('/timeline', 'TweetsController@index');
Route::get('/timeline/langchange', 'TweetsController@lang_change')->name('LangChange');



