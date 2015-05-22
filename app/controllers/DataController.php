<?php

class DataController extends BaseController
{
    public function index()
    {
        //$datas = Data::all();
        $results = DB::table('data')
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        return View::make('index', compact('results'));
    }

    public function create()
    {
        return View::make('create');
    }

    public function handleCreate()
    {
        $new = Input::all();

        // create a new model instance
        $data = new Data;

        if ($data->validate($new))
        {
            // success
            $data->firstname = Input::get('firstname');
            $data->lastname = Input::get('lastname');
            $data->keywords = Input::get('keywords');
            $data->pdffile = Input::get('pdffile');

            $data->save();

            return Redirect::action('DataController@index');

        }
        else
        {
            // failure
            $errors = $data->errors();
            return Redirect::action('DataController@create')->withErrors($errors)->withInput();
        }

    }

    public function delete( $id  )
    {
        $data = Data::findOrFail($id);
        return View::make('delete', compact('data'));
    }

    public function handleDelete()
    {
        $id = Input::get('id');
        $data = Data::findOrFail($id);
        $data->delete();

        return Redirect::action('DataController@index');
    }

    public function search() {

        $results = DB::table('data')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        return View::make('search', compact('results'));

    }

    public function handleSearch() {

        $q = Input::get('query');

        $searchTerms = explode(' ', $q);

        $query = DB::table('data');

        foreach($searchTerms as $term)
        {
            $query->where('firstname', 'LIKE', '%'. $term .'%');
            $query->orWhere('lastname', 'LIKE', '%'. $term .'%');
            $query->orWhere('keywords', 'LIKE', '%'. $term .'%');
        }

        $results = $query->get();
        //var_dump($searchTerms);
        return View::make('search', compact('results'));

    }

    public function detailedSearch() {

        $results = array();
        return View::make('detailedsearch', compact('results'));
        //var_dump($results);

    }

    public function handleDetailedSearch() {

        $fname = Input::get('firstname');
        $lname = Input::get('lastname');
        $kwords = Input::get('keywords');

        $query = DB::table('data');

        $query = is_null($fname) ? $query : $query->where('firstname', 'LIKE', '%'. $fname .'%');
        $query = is_null($lname) ? $query : $query->where('lastname', 'LIKE', '%'. $lname .'%');
        $query = is_null($kwords) ? $query : $query->where('keywords', 'LIKE', '%'. $kwords .'%');

        $results = $query->get();
        //var_dump($searchTerms);
        return View::make('detailedsearch', compact('results'));


    }

}

