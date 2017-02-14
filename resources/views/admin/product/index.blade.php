@extends('layout.admin_master')

@section('content')


<div id="content">
    <h1>Product Index</h1>
    <div class="row">
        @if(Session::has('deleted_product'))
            <div class="col-md-4 col-md-offset-4 alert alert-danger">
                {{Session::get('deleted_product')}}
            </div>
        @endif



            @if(Session::has('saved'))
                <div class="col-md-4 col-md-offset-4 alert alert-info">
                    {{Session::get('saved')}}
                </div>
            @endif

            @if(Session::has('created'))
                <div class="col-md-4 col-md-offset-4 alert alert-success">
                    {{Session::get('created')}}
                </div>
            @endif

    </div>

        <a href="{{route('product.create')}}" class="btn btn-primary btn-lg"><i class="fa fa-plus" aria-hidden="true"></i> Add new
        </a>

        <!-- Table -->
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Photo</th>
                <th>Title</th>
                <th>Content</th>
                <th>Description</th>
                <th>Specification</th>
                <th>Price</th>

            </tr>

            </thead>
            @foreach($products as $product)
            <tbody>

            <tr>
                <td>{{$product->id}}</td>
                <td><img src="/images/{{$product->photo}}" alt="" width="100x100"></td>
                <td>{{$product->title}}</td>
                <td>{{$product->content}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->specifications}}</td>
                <td>${{$product->price}}</td>
                <td><a href="{{route('product.delete',['id' => $product->id])}}" class="btn btn-danger"><i class="fa fa-minus" aria-hidden="true"></i>
                        delete </a><a href="{{route('product.edit',[$product->id])}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>
                        edit</a> </td>
            </tr>




            </tbody>

            @endforeach
        </table>




</div><!-- /content -->

@endsection