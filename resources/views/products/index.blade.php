@extends('app')

@section('content')

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

@endsection