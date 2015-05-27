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

Route::get('/search', 'DataController@search');
Route::post('/search', 'DataController@handleSearch');

Route::get('/detailedsearch', 'DataController@detailedSearch');
Route::post('/detailedsearch', 'DataController@handleDetailedSearch');

Route::get('/delete/{id}', 'DataController@delete');
Route::post('/delete', 'DataController@handleDelete');

Route::get('/seed', function()
{
    $path = storage_path().DIRECTORY_SEPARATOR.'pdfs'.DIRECTORY_SEPARATOR;

    $fullpath = $path.'resume_1.pdf';
    $d = new Data;
    $d-> firstname = 'Gago' ;
    $d-> lastname = 'Arsenyan' ;
    $d-> keywords = 'php, mysql, ruby' ;
    $d->pdffile = File::name($fullpath) . '.pdf';
    $d->type = File::extension($fullpath);
    $d->file = base64_encode(File::get($fullpath));
    $d->mime = 'application/pdf';
    $d->save();

    $fullpath = $path.'resume_2.pdf';
    $d = new Data;
    $d-> firstname = 'Nathan' ;
    $d-> lastname = 'Serakuz' ;
    $d-> keywords = 'php, laravel';
    $d->pdffile = File::name($fullpath) . '.pdf';
    $d->type = File::extension($fullpath);
    $d->file = base64_encode(File::get($fullpath));
    $d->mime = 'application/pdf';
    $d->save();

    $fullpath = $path.'resume_3.pdf';
    $d = new Data;
    $d-> firstname = 'Robin' ;
    $d-> lastname = 'Erikson' ;
    $d-> keywords = 'python, django' ;
    $d->pdffile = File::name($fullpath) . '.pdf';
    $d->type = File::extension($fullpath);
    $d->file = base64_encode(File::get($fullpath));
    $d->mime = 'application/pdf';
    $d->save();

    $fullpath = $path.'resume_4.pdf';
    $d = new Data;
    $d-> firstname = 'Angelina' ;
    $d-> lastname = 'Gustafson' ;
    $d-> keywords = 'ruby, RubyOnRails' ;
    $d->pdffile = File::name($fullpath) . '.pdf';
    $d->type = File::extension($fullpath);
    $d->file = base64_encode(File::get($fullpath));
    $d->mime = 'application/pdf';
    $d->save();


    echo 'Database seeded';
});
