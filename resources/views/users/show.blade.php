@extends('app')

@section('content')

    <div class="col-xs-5 col-xs-offset-1 col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">
    	<h3>Name: {{ $user->name }}</h3>
    	<h3>Surname: {{ $user->surname }}</h3>
    	<h3>Middle name: {{ $user->middle_name }}</h3>
    </div>

    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
        <h3>Phone: {{ $user->phone }}</h3>
        <h3>Email: {{ $user->email }}</h3>
        <h3>Address: {{ $user->address }}</h3>
    </div>

    @if($user->id == Auth::id())
        <a href="{{ action('UserController@edit', $user) }}" class="btn btn-primary">Change info</a>
    @endif

@endsection