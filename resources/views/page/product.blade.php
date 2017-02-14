@extends('layout.master')

@section('content')

    <div id="content">

        @if(Session::has('not_user'))
            <div class="row">
                <div class="col-md-4 col-md-offset-4 alert alert-warning">
                    {{Session::get('not_user')}}
                </div>
            </div>
        @endif

        <div class="row">

            <div class="col-sm-4">
                <img class="img_large" src="{{'/images/'.$product->photo}}">
            </div>

            <div class="col-sm-8">

                <div class="col-sm-8">
                    <div class="row">
                        <h2>{{$product->title}}</h2>
                        <h2>${{$product->price}}</h2>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Description
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        {{$product->description}}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Specifications
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        {{$product->specifications}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('cart',['id'=>$product->id])}}" class="btn btn-lg btn-success">Put in cart <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="col-sm-4">

                    <div class="list-group">

                        <a href="{{route('category',['category' => 'best seller'])}}" class="list-group-item">best seller</a>
                        <a href="{{route('category',['category' => 'premium items'])}}" class="list-group-item">premium items</a>
                        <a href="{{route('category',['category' => 'best of this month items'])}}" class="list-group-item">best of this month items</a>
                        {{--<a href="{{route('category')}}" class="list-group-item">best of this month items 4</a>--}}

                    </div>

                </div>


            </div>


        </div>

    </div>

@endsection