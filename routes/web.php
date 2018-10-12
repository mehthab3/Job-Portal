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

Route::get('/job','JobController@home');


Route::get('/abc', function () {
    return view('home');
}); 

//Admin
Route::post('/validateadmin','AdminController@validateAdmin');


//Job

Route::post('/insert','JobController@add');
Route::get('/update/{id}','JobController@update');
Route::post('/edit/{id}','JobController@edit');
Route::get('/delete/{id}','JobController@delete');

///Employers

Route::get('/adminlogin','EmployerController@employerList');
Route::post('/insertemployer','EmployerController@add');
Route::post('/validateemployer','EmployerController@validateEmployer');

//Candidates
Route::get('/candidatelist','CandidateController@candidatelist');
Route::post('/insertcandidate','CandidateController@add');
Route::get('/viewjob','CandidateController@viewJob');
Route::any('/search','CandidateController@search');
// Route::get('/searchresults','CandidateController@search');
Route::post('/validatecandidate','CandidateController@validateCand');



///Singles


Route::get('/home', function () {
    return view('home');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/createaccount', function () {
    return view('createaccount');
});

Route::get('/search', function () {
    return view('searchresults');
});

// Route::get('/job', function () {
//     return view('job');
// });
Route::get('/cand', function () {
    return view('cand');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/emp', function () {
    return view('emp');
});
Route::get('/emp_signup', function () {
    return view('emp_signup');
});
Route::get('/cand_signup', function () {
    return view('cand_signup');
});
Route::get('/createjob', function () {
    return view('createjob');
});
Route::get('/test', function () {
    return view('test');
});
// Route::ressource('jobs','JobController');
