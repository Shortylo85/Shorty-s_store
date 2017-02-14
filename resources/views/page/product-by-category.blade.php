@extends('layout.master')

@section('content')
<div id="content">


            @foreach($products->chunk(3) as $productsChunked)
            <div class="row">
                @foreach($productsChunked as $product)
                    @if($product->category == 'best seller')

                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img style="width: 200px;height: 200px;" src="/images/{{$product->photo}}" alt="...">
                                <div class="caption">

                                    <h4 class="pull-right">$ {{$product->price}}</h4>
                                    <h4>{{$product->title}}</h4>
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

                    @elseif($product->category == 'best of this month items')

                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img style="width: 200px;height: 200px;" src="/images/{{$product->photo}}" alt="...">
                                <div class="caption">

                                    <h4 class="pull-right">$ {{$product->price}}</h4>
                                    <h4>{{$product->title}}</h4>
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
                    @else

                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img style="width: 200px;height: 200px;" src="/images/{{$product->photo}}" alt="...">
                                <div class="caption">

                                    <h4 class="pull-right">$ {{$product->price}}</h4>
                                    <h4>{{$product->title}}</h4>
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
        @endif
                @endforeach
            </div>
            @endforeach
</div>


@endsection
