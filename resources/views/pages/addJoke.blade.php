@extends('layouts.default')

@section('content')
<h1>
    <a href="/">Tito Jokes</a>    
</h1>
<br>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/submit">
    @csrf

    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" name="title" id="title">
        </div>
    </div>
    <div class="form-group row">
        <label for="content" for="Title" class="col-sm-2 col-form-label">Content</label>
        <textarea class="col-sm-10" name="content" id="content" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add Joke</button>
</form>

@endsection