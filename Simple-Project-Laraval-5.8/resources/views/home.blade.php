@extends('layout')



@section('content')

<h1> Welcome to home Page</h1>

@foreach($errors->all() as $error)
<span style="color:red">{{$error}}</span>
@endforeach


<form action="" method="post">
	<!-- to create the tokens -->
	@csrf        
	<input type="text" name="username">
	<input type="password" name="pass">
	<button type="submit">Login</button>
</form>


<!-- // for accessing the flash session -->
{{
	Session::get('pappu'),
	Session::reflash(),
}}


@endsection