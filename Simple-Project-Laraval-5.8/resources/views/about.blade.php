@extends('layout')




@section('content')

<h1>
	<p>welcome to About-us Page  !!!</p>

	@foreach(Session::get('test') as $test)
	{{$test}}
	@endforeach


@endsection