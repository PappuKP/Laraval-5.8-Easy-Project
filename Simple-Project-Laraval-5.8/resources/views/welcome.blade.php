@extends('layout')




@section('content')

<h1>Language : </h1>

<!-- <?php

// ***********using foeach to print the array value in php*******
// foreach($lang as $languages)
// {
//     echo $languages;
// }

?> -->

<!-- using ********Blade----------***** 
    blade is a normal html file-->

@foreach($lang as $languages)

<!-- supported any langauge in between -->

<p>
    <!-- same as in angular -->
    <!-- do not echo in this blade format -->
   {{$languages}}    
</p>

@endforeach
@endsection