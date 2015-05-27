@extends("layout")
@section("content")
<div class="detailedsearch">
  {{ Form::model(null, array('url'=>'detailedsearch','files'=>true)) }}
    {{ Form::label("firstname", "First Name") }}
    {{ Form::text("firstname", Input::old("firstname")) }}

    {{ Form::label("lastname", "Last Name") }}
    {{ Form::text("lastname", Input::old("lastname")) }}

    {{ Form::label("keywords", "Keywords") }}
    {{ Form::text("keywords", Input::old("keywords")) }}

    {{ Form::submit("Detailed Search") }}
    {{ Form::close() }}
</div>

<div id="data">
@include("table")
</div>
@stop
