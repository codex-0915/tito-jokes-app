@extends('layouts.default')

@section('content')

<h1>
    <a href="/">Tito Jokes</a>    
</h1>
<a href="/login">Login</a>

@unless(count($jokes) == 0)

@foreach($jokes as $joke)
<h2>
   <a href="/jokes/{{$joke['id']}}">{{$joke['title']}}</a>
</h2>
<p>
    {{$joke['content']}}
</p>
@endforeach

<a href="/jokes">Add Joke</a>

@else
<p>There are no jokes to display</p>
<a href="/jokes">Add new joke</a>
@endunless

@endsection
