@extends('app')

@section('content')

    @if(count($orders))
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2>Orders by {{ $orders[0]->customer->name }}</h2>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <hr style="margin-top: 10px; width: 103%"/>
        </div>

        @foreach($orders as $order)

            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
            	<p>{{ $order->product->name }}</p>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            	<p>{{ $order->address }}</p>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            	<p>{{ $order->delivery_date }}</p>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                {{ $order->status->name }}
            </div>

            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                {{ $order->price }}
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <hr style="margin-top: 10px; width: 103%"/>
            </div>

        @endforeach
    @else
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        	<p>You have not any order!</p>
        </div>
    @endif



@endsection