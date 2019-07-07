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

use App\User;
use App\Portfolio;
use App\Job;
use App\Group;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/******************************************************
 * Base Routes
 ******************************************************/

Route::get('/home', 'HomeController@index')->name('home');

/******************************************************
 * ADMIN Routes
 ******************************************************/

Route::get('admin', 'AdminController@userlist')->middleware('auth');

/******************************************************
 * JOB Routes
 ******************************************************/

Route::get('viewjob/{id}', 'JobController@view')->middleware('auth');
Route::get('jobs', 'JobController@index')->middleware('auth');
Route::get('newjob', 'JobController@new')->middleware('auth');
Route::get('jobsearch', 'JobController@jobsearch');

Route::post('editjob', 'JobController@edit')->middleware('auth');
Route::post('savejob', 'JobController@save')->middleware('auth');
Route::post('deletejob', 'JobController@delete')->middleware('auth');
Route::post('createjob', 'JobController@create')->middleware('auth');
Route::post('apply', 'JobController@apply')->middleware('auth');
Route::post('search', 'JobController@search')->middleware('auth');

/******************************************************
 * PORTFOLIO
 ******************************************************/

Route::get('viewportfolio', 'PortfolioController@viewPortfolio')->middleware('auth');
Route::get('portfolio', 'PortfolioController@index')->middleware('auth');


/******************************************************
 * PROFILE
 ******************************************************/

Route::get('profile', 'ProfileController@index')->middleware('auth');

Route::post('profile', 'ProfileController@update')->middleware('auth');
Route::post('edit', 'ProfileController@edit')->middleware('auth');
Route::post('suspend', 'ProfileController@suspend')->middleware('auth');
Route::post('unsuspend', 'ProfileController@unsuspend')->middleware('auth');
Route::post('delete', 'ProfileController@delete')->middleware('auth');
Route::post('update-portfolio', 'PortfolioController@update')->middleware('auth');


/******************************************************
 * GROUP routes
 ******************************************************/

Route::get('groups', 'GroupController@index')->middleware('auth');
Route::get('new-group', 'GroupController@new')->middleware('auth');
Route::get('viewgroup/{name}', 'GroupController@view')->middleware('auth');
Route::post('creategroup', 'GroupController@create')->middleware('auth');
Route::post('deletegroup', 'GroupController@delete')->middleware('auth');
Route::post('leavegroup', 'GroupController@leave')->middleware('auth');
Route::post('joingroup', 'GroupController@join')->middleware('auth');


/******************************************************
 * USER routes
 ******************************************************/

Route::get('user-update', function () {

    $data = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'city' => 'required',
        'state' => 'required',
        'zip' => 'required|size:5',
        'admin' => 'required',
        'phone' => 'required|size:10'
    ]);

    $id = \Illuminate\Support\Facades\Input::get('userid');

    User::where('id', $id)->update([
        'name' => request('name'),
        'email' => request('name'),
        'city' => request('name'),
        'state' => request('name'),
        'zip' => request('name'),
        'admin' => request('name'),
        'phone' => request('name')
    ]);
});

/******************************************************
 * REST
 ******************************************************/
Route::resource('member-rest', 'MemberRestController');
Route::resource('job-rest', 'JobRestController');