@extends('app')

@section('content')

    <!-- Form to / -->
    {!! Form::open(['action' => 'OrderController@store']) !!}

        <div class="col-xs-5 col-xs-offset-1 col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">
        	<h4>Product: {{ $product->name }}</h4>
            <h4>Customer: {{ $user->surname }} {{ $user->name }} {{ $user->middle_name }}</h4>
            <h4>Customer address: {{ $user->address }}</h4>
            <h4>Customer phone: {{ $user->phone }}</h4>
            <h4></h4>
        </div>

        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
            <h5>If you want, you can change address:</h5>

            {!! Form::hidden('product_id', $product->id) !!}

            <!-- Address form field -->
            <div class="form-group">
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
            </div>


            <h1>Price: {{ $product->price }}</h1>

        </div>

        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            <!-- Submit form button -->
            <div class="form-group">
                {!! Form::submit('Accept', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>

    {!! Form::close() !!}
    
@endsection