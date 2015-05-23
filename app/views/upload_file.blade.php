    {{--<form method="post" enctype="multipart/form-data" action="/upload_file">
        <input type="file" name="file" />
        <input type="submit" name="submit" value="upload" />
    </form>


    {{ Form::open(array('files' => true)) }}
    {{ Form::label('logo', 'Name') }}
    {{ Form::file('logo') }}
    {{ Form::submit('Save Changes') }}

    --}}
@extends("layout")
@section("content")
{{ Form::open(array('url'=>'upload_file','files'=>true)) }}

{{ Form::label('file','Resume File',array('id'=>'','class'=>'')) }}
{{ Form::file('file','',array('id'=>'','class'=>'')) }}
<br/>
<!-- submit buttons -->
{{ Form::submit('Save') }}

{{ Form::close() }}
@stop
