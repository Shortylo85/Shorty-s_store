@extends('layout.master')

@section('content')

    <div id="content">
        <h1>My Cart</h1>
        <table class="table tab-content">
        <div class="row">
            @if(Session::has('deleted_from_cart'))
                <div class="col-md-4 col-md-offset-4 alert alert-danger">
                    {{Session::get('deleted_from_cart')}}
                </div>
            @endif
        </div>

            @if(Session::get('cart'))
            <thead>
        		<tr>
        			<th>Name</th>
        			<th>Quantity</th>
        			<th>Price</th>
                    <th>Action</th>
        		</tr>
        	</thead>


                <tbody>

                @foreach($products as $product)
        		<tr>

                        <td><h3>{{$product['item']['title']}}</h3></td>
                        <td><h3><span class="badge">{{$product['quantity']}}</span></h3> </td>
                        <td><h3><span class="label label-primary">${{$product['item']['price']}}</span> </h3> </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-danger btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Remove <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('cart.reduceByOne',['id' => $product['item']['id']])}}"> <i class="fa fa-minus-circle" aria-hidden="true"></i> By 1</a></li>
                                    <li><a href="{{route('cart.removeItem',['id' => $product['item']['id']])}}"><i class="fa fa-ban" aria-hidden="true"></i>
                                            All</a></li>

                                </ul>
                            </div>
                        </td>

                </tr>
                @endforeach

        	    </tbody>

        </table>
        <hr>
        <div>
            {{--<div class="col-md-8 col-md-offset-2">--}}
                <h2>Total Quantity: <span class="badge">{{$totalQuantity}}</span> piece/pieces </h2>
                <h2>Total Price: <span class="label label-primary"> ${{$totalPrice}}</span></h2>
            {{--</div>--}}
        </div>
        <hr>
        <div class="row">
            <a href="{{route('address.create')}}" class="btn btn-success btn-lg pull-right">Checkout <span><i class="fa fa-credit-card" aria-hidden="true"></i>
</span></a>
        </div>




        @else

            <h2 style="text-align: center">Sorry, this cart is empty <span><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span></h2>


        @endif

    </div>


@endsection