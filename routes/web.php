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
    return view('login2');
});

Route::get('/main',function(){
    return view('main');
});


Route::get('/forum',function(){
	return view('forum');
});

Route::get('/add_topic',function(){
	return view('add_topic');
});

Route::post('/save_topic', 'Acontroller@add_topic');



Route::post('/add_comment', 'Acontroller@add_comment');

Route::get('view_discuss', 'Acontroller@view_discuss');

Route::get('view_topic/{id}', 'Acontroller@view_topic');



//lalit
Route::get('/notessharing',function()
{
    return view('notessharing');
});

Route::get('/uploaddoc',function()
{
    return view('uploaddoc');
});

Route::get('/subject',function()
{
    return view('subject');
});

Route::get('/tutorial',function()
{
    return view('tutorial');
});

Route::get('/books',function()
{
    return view('books');
});
Route::get('/questionpaper',function()
{
    return view('questionpaper');
});
Route::post('/submitted','controllersubmitted@submitted');

Route::get('/subject_show', 'controllersubmitted@subject_show');

Route::get('/tutorial_show', 'controllersubmitted@tutorial_show');

Route::get('/question_show', 'controllersubmitted@question_show');

//shubham

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/find_projects', function () {
    return view('find_projects');
});

Route::get('/add_projects', function () {
    return view('add_projects');
});

Route::post('/store_projects','user_controller@store_projects') ;

Route::post('/view_projects','user_controller@view_projects');

//naman

Route::get('/upload', function () {
    return view('share');
});
Route::get('/compiler',function(){
		return view('compiler');
	});
Route::post('/compile', 'compilerController@compile');
Route::post('insert', 'compilerController@fileUpload');
Route::get('/view_public','compilerController@view_public');
Route::get('/view_private','compilerController@view_private');

Route::post('/download','compilerController@getDownload');




//design project
Route::post('/register','medicontroller@register');
Route::post('/login','medicontroller@login');
Route::get('/logout','medicontroller@logout');

Route::get('/doctor',function(){
		return view('doctor');
	});
Route::get('/disease',function(){
		return view('disease');
	});

Route::get('/user_status',function(){
        session_start();
		return view('user_status');
	});

Route::get('/forgot',function()
           {
               session_start();
             return view('forgot');     
           });

Route::get('/clicksymptoms','medicontroller@symptoms');
Route::get('/specialist_terms','medicontroller@specialist_terms');
Route::get('/medicines','medicontroller@medicines');
Route::get('/specialist','medicontroller@specialist');
Route::get('/filter','medicontroller@filter');
Route::get('/common','medicontroller@common');

