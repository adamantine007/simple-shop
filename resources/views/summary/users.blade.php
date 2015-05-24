@extends('app')

@section('content')

    @if( ! empty($users))
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <table class="table">
                    <tr>
                        <th>Username</th>
                        <th>Count of orders</th>
                        <th>Total price</th>
                    </tr>

                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ count($user->orders()->get()) }}</td>
                            <td>{{ $user->price }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    @endif

@stop