@extends("layout")
@section("content")
 <div id="search">
	{{-- Form::open(array('url' => 'search')) --}}
	{{ Form::model(null, array('url' => array('search'))) }}
	{{ Form::text('query', null, array( 'placeholder' => 'Search query...' )) }}
	{{ Form::submit('Search') }}
	{{ Form::close() }}
 </div>

 <div id="fulldata">
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
                    <td>{{ $result->pdffile }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>There are no registrants! :(</p>
    @endif
</div>
@stop
