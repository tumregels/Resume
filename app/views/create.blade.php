@extends("layout")
@section("content")
<h1>Add new Data</h1>
<div id="form">
    {{ Form::open(array('action'=>'DataController@handleCreate','files'=>true)) }}
    {{ Form::label("firstname", "First Name") }}
    {{ Form::text("firstname", null, array('class' => 'form-control')) }}

    {{ Form::label("lastname", "Last Name") }}
    {{ Form::text("lastname", null, array('class' => 'form-control')) }}

    {{ Form::label("keywords", "Keywords") }}
    {{ Form::text("keywords", null, array('class' => 'form-control')) }}

    {{ Form::label('file','Resume File') }}
    {{ Form::file('file', null, array('class' => 'form-control')) }}

    {{ Form::submit("Create") }}
    {{ Form::close() }}
</div>

<div id="cancel">
    <button href="{{ action('DataController@index') }}">Cancel</button>
</div>
<div id="errors">
    @if ($errors->count() > 0)
    <ul class="errors">
        @foreach($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
    @endif
</div>

@stop
