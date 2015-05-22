@extends("layout")
@section("content")
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
                <td>
                    <a href="{{ action('DataController@delete', $result->id) }}" >Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @else
    <p>There are no registrants! :(</p>
    @endif
@stop

