@extends('app')

@section('content')

    <!-- @if ($first == 'Daniel')
        <h1>About Me: {{ $first }} </h1>
    @else
        <h1>About Me: {{ $last }} </h1>
    @endif -->

@if(count($people))
<h1>About Me: {{ $first }} </h1>

<h3>People i like:</h3>
<ul>
    @foreach($people as $person)
        <li>{{  $person }}</li>
    @endforeach
</ul>
@endif

<p>
    qweqweqweqweqweqweqweqweqweqweqw
</p>
@stop