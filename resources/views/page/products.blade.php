@extends('layout.master')

@section('content')

    <div id="content">

        @if(Session::has('no_item'))
            <div class="row">
                <div class="col-md-4 col-md-offset-4 alert alert-warning">
                    {{Session::get('no_item')}}
                </div>
            </div>
        @endif

          <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"  class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">All Products</a></li>
            <li role="presentation"><a href="#best" aria-controls="best" role="tab" data-toggle="tab">Best Seller</a></li>
            <li role="presentation"><a href="#premium" aria-controls="premium" role="tab" data-toggle="tab">Premium Items</a></li>
            <li role="presentation"><a href="#month" aria-controls="month" role="tab" data-toggle="tab">Best of this month</a></li>
            <li>
                <ul class="nav navbar-nav navbar-right">
                    <form action="{{route('word')}}" class="navbar-form pull-right">

                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="Search item...">
                            </div>
                            <button class="btn btn-default"> <span><i class="fa fa-search" aria-hidden="true"></i>
                    </span> Search</button>
                    </form>
                </ul>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

            <div role="tabpanel" class="tab-pane active" id="all">

                {{--<div class="col-sm-6 col-md-4">--}}
                <h3>All products</h3>
                @foreach($products->chunk(3) as $productsChunk)
                    <div class="row">
                        @foreach($productsChunk as $product)
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">

                                    <img style="width: 200px;height: 200px;" src="/images/{{$product->photo}}" alt="...">
                                    <div class="caption">

                                        <h4 class="pull-right">$ {{$product->price}}</h4>
                                        <h4>{{$product->title}}
                                        </h4>
                                        <p>{{$product->content}}</p>
                                        <p class="pull-right">15 ratings</p>
                                        <p>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </p>
                                        <a href="{{route('page.product',$product->id)}}" class="btn btn-info btn-xs">Read more  <i class="fa fa-hand-o-left" aria-hidden="true"></i></a>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
                {{--</div>--}}

            </div>

            <div role="tabpanel" class="tab-pane" id="best">
                {{--<div class="col-sm-6 col-md-4">--}}
                    <h3>Best Seller</h3>
                    @foreach($productsBest->chunk(3) as $productsBestChunk)
                        <div class="row">
                            @foreach($productsBestChunk as $productBestChunk)
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <img style="width: 200px;height: 200px;" src="/images/{{$productBestChunk->photo}}" alt="...">
                                        <div class="caption">

                                            <h4 class="pull-right">$ {{$productBestChunk->price}}</h4>
                                            <h4>{{$productBestChunk->title}}</h4>
                                            <p>{{$productBestChunk->content}}</p>
                                            <p class="pull-right">15 ratings</p>
                                            <p>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </p>
                                            <a href="{{route('page.product',$productBestChunk->id)}}" class="btn btn-info btn-xs">Read more  <i class="fa fa-hand-o-left" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                {{--</div>--}}
            </div>

            <div role="tabpanel" class="tab-pane" id="premium">
                {{--<div class="col-sm-6 col-md-4">--}}
                    <h3>Premium items</h3>
                    @foreach($productsPremium->chunk(3) as $productsPremiumChunk)
                        <div class="row">
                            @foreach($productsPremiumChunk as $productPremiumChunk)
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <img style="width: 200px;height: 200px;" src="/images/{{$productPremiumChunk->photo}}" alt="...">
                                        <div class="caption">

                                            <h4 class="pull-right">$ {{$productPremiumChunk->price}}</h4>
                                            <h4>{{$productPremiumChunk->title}}</h4>
                                            <p>{{$productPremiumChunk->content}}</p>
                                            <p class="pull-right">15 ratings</p>
                                            <p>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </p>
                                            <a href="{{route('page.product',$productPremiumChunk->id)}}" class="btn btn-info btn-xs">Read more  <i class="fa fa-hand-o-left" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                    {{--</div>--}}
            </div>

            <div role="tabpanel" class="tab-pane" id="month">
                {{--<div class="col-sm-6 col-md-4">--}}
                    <h3>Best of this month</h3>
                    @foreach($productsMonth->chunk(3) as $productsMonthChunk)
                        <div class="row">
                            @foreach($productsMonthChunk as $productMonthChunk)
                                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img style="width: 200px;height: 200px;" src="/images/{{$productMonthChunk->photo}}" alt="...">
                        <div class="caption">

                            <h4 class="pull-right">$ {{$productMonthChunk->price}}</h4>
                            <h4>{{$productMonthChunk->title}}
                            </h4>
                            <p>{{$productMonthChunk->content}}</p>
                            <p class="pull-right">15 ratings</p>
                            <p>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </p>
                            <a href="{{route('page.product',$productMonthChunk->id)}}" class="btn btn-info btn-xs">Read more  <i class="fa fa-hand-o-left" aria-hidden="true"></i></a>
                        </div>
                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                {{--</div>--}}
            </div>

        </div>




    </div><!-- /content -->

@endsection