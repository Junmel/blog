@extends('layouts.master')

@section('content')
@section('title')
	<title>Theme Template for Bootstrap</title>
@endsection
<h1>This is my first step</h1>
@if(count($beatles) > 0)
		@foreach($beatles as $beatle)
	{{ $beatle }} <br>

	@endforeach

@else
	
	<h1> Sorry, nothing to show… </h1>

@endif
	
	@endsection
	