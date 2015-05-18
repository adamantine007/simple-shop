@extends('app')

@section('content')

    @foreach($users as $user)

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="{{ action('UserController@show', $user) }}">{{ $user->name }}</a>
        </div>

    @endforeach

@endsection