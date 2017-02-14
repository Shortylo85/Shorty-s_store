@extends('layout.admin_master')

@section('content')

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
                    <th>Payment id</th>
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
                            <td>{{$order->payment_id}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                @endforeach
            </table>

        </div>


@endsection
