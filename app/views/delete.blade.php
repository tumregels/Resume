@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Delete {{ $data->firstname }} <small>Are you sure?</small></h1>
    </div>

    <form action="{{ action('DataController@handleDelete') }}" method="post" role="form">
        <input type="hidden" name="id" value="{{ $data->id }}" />
        <button type="submit" name="yes"> Yes </button>
        {{--<button href="{{ action('DataController@index') }}" >No Way!</button>--}}
    </form>

    {{--
    {{Form::open(array('class' => 'form-horizontal', 'method' => 'delete', 'action' => array('DataController@handleDelete', $data->id)))}}
    {{ Form::submit('Delete') }}
    {{ Form::close() }}
    --}}
@stop
