@extends('layout.master')

@section('content')

    <div id="content">
        <h1 class="text-center">My orders</h1>
        {{--@foreach($users as $user)--}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> <strong>Name: </strong>{{$user->name}}</h3>
            </div>

        </div>

@if(!empty($orders))

        <div class="panel panel-default">

            <!-- Default panel contents -->
            <div class="panel-heading">

                    <h2 class="text-center">List of purchased items</h2>

            </div>

            <!-- Table -->

            <table class="table">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Time</th>
                    </tr>
                </thead>
                @foreach($orders as $order)
                <tbody>
                @foreach($order->cart->items as $item)
                            <tr>

                                    <td>{{$item['item']['title']}}</td>
                                    <td><span class="badge"> {{$item['quantity']}}</span></td>
                                    <td>$ {{$item['price']}}</td>
                                    <td>{{$order->created_at}}</td>

                            </tr>
                @endforeach
                </tbody>
                @endforeach
            </table>

        </div>
        @endif

{{--@endforeach--}}
    </div><!-- /content -->


@endsection