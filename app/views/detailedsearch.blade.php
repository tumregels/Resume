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
    @if (count($results) > 0)
    <table >
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Keywords</th>
                <th>PDF File</th>
            </tr>
        </thead>
        <tbody>
            @foreach($results as $result)
            <tr>
                <td>{{ $result->firstname }}</td>
                <td>{{ $result->lastname }}</td>
                <td>{{ $result->keywords }}</td>
                <td>
                <a href="{{'data:' . $result->mime . ';base64,' . $result->file}}" target="_blank" >File</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@stop
