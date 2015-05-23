<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'DataController@index');

Route::get('/create', 'DataController@create');
Route::post('/create', 'DataController@handleCreate');

Route::get('search', 'DataController@search');
Route::post('search', 'DataController@handleSearch');

Route::get('detailedsearch', 'DataController@detailedSearch');
Route::post('detailedsearch', 'DataController@handleDetailedSearch');

Route::get('/delete/{id}', 'DataController@delete');
Route::post('/delete', 'DataController@handleDelete');

Route::get('/upload_form', function()
{
    return View::make('upload_file');
});

Route::post('/upload_file', function()
{

    $rules = array(
        'file' => 'required|mimes:doc,docx,pdf',
    );
    $validator = Validator::make(Input::all(), $rules);
    if($validator->fails())
    {
        return Redirect::to('/upload_form')->withErrors($validator);
    }
    else
    {
        if(Input::hasFile('file'))
        {
            $f = Input::file('file');
            $att = new Rfile;
            $att->name = $f->getClientOriginalName();
            $att->file = base64_encode(file_get_contents($f->getRealPath()));
            $att->mime = $f->getMimeType();
            $att->size = $f->getSize();
            $att->save();
            return Redirect::to('/upload_form');
        }
    }

});

//testing

Route::get('/seed', function()
{
    $theData = new Data;
    $theData->firstname = 'John';
    $theData->lastname = 'Doe';
    $theData->keywords = 'git,php';
    $theData->pdffile = 'resume_john.pdf';
    $theData->save();

    $theData = new Data;
    $theData->firstname = 'Leo';
    $theData->lastname = 'Panetta';
    $theData->keywords = 'git,ruby';
    $theData->pdffile = 'resume_leo.pdf';
    $theData->save();

    $theData = new Data;
    $theData->firstname = 'Sweinstiger';
    $theData->lastname = 'Neo';
    $theData->keywords = 'cpp,ruby';
    $theData->pdffile = 'resume_sweinstiger.pdf';
    $theData->save();

    $theData = new Data;
    $theData->firstname = 'Armen';
    $theData->lastname = 'Spartan';
    $theData->keywords = 'php,python';
    $theData->pdffile = 'resume_armen.pdf';
    $theData->save();
});
