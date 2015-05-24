@extends('app')

@section('content')

    @if( ! empty($products))
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <table class="table">
                    <tr>
                        <th>Product</th>
                        <th>Count of sales</th>
                        <th>Total price</th>
                    </tr>

                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ count($product->orders()->get()) }}</td>
                            <td>{{ count($product->orders()->get()) * $product->price }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    @endif

@stop