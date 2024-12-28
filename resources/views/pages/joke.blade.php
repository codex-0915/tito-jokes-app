@extends('layouts.default')

@section('content')

<h1>
    <a href="/">Tito Jokes</a>    
</h1>
<a href="/login">Login</a>

<h2>
    {{$joke['title']}}
</h2>
<p>
    {{$joke['content']}}
</p>

<form method="POST" action="/jokes/{{$joke->id}}">
    @csrf
    @method('DELETE')
    <button class="text-red-500">
        Delete joke
    </button>
</form>

@endsection