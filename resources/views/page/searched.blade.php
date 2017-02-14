@extends('layout.master')

@section('content')
    <div id="content">


            @if(Session::has('no_item'))
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 alert alert-danger">
                        {{Session::get('no_item')}}
                    </div>
                </div>
            @endif


            @foreach($products as $product)
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="/images/{{$product->photo}}" alt="" width="200px"><a href="{{route('page.product',$product->id)}}">{{$product->title}}</a> <br>
                    </div>
                </div>
            @endforeach


    </div>
@endsection

