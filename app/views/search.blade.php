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
@include("table")
</div>
@stop
