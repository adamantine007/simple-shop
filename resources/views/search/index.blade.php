@extends('app')

@section('content')

    <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
        {!! Form::open(['url' => '/search']) !!}

        <div class="form-group">
            {!! Form::label('query', 'Query:') !!}
            {!! Form::text('query', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Find', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

    @if( ! empty($products))
        <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
            @foreach($products as $product)
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                    <h3>{{ $product->name }}</h3>
                </div>

                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <h3>{{ $product->price }}</h3>
                </div>

                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                    <a href="{{ url('/orders/create?id=' . $product->id) }}" class="btn btn-danger" style="margin-top: 15px;">Buy</a>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <hr/>
                </div>
            @endforeach
        </div>
    @endif

@stop