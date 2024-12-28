@extends('layouts.default')

@section('content')
<h1>
    <a href="/">Tito Jokes</a>    
</h1>
<br>

<h2>Log In</h2>
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

<form method="POST" action="/">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    <small id="no_account" class="form-text text-muted"><a href="/register">You don't have account? Click to sign up.</a></small><br><br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>

<a href="/">Return to Homepage</a>

@endsection