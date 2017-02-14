@extends('layout.admin_master')

@section('content')

    <div id="content">

        <h1>Add Product</h1>

        {!! Form::open(['method'=>'POST','action'=>['ProductController@store'],'files'=>true]) !!}

                <div class="form-group">

                        {!! Form::label('title', 'Title') !!}

                        {!! Form::text('title', null, ['class'=>'form-control']) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('content', 'Content') !!}

                    {!! Form::text('content', null, ['class'=>'form-control']) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('description', 'Description') !!}

                    {!! Form::text('description', null, ['class'=>'form-control']) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('specifications', 'Specifications') !!}

                    {!! Form::text('specifications', null, ['class'=>'form-control']) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('price', 'Price') !!}

                    {!! Form::text('price', null, ['class'=>'form-control']) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('category', 'Category') !!}

                    {!! Form::select('category', ['best seller'=>'best seller','premium items'=>'premium items','best of this month items'=>'best of this month items'], ['class'=>'form-control']) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('photo', 'Photo') !!}

                    {!! Form::file('photo', null, ['class'=>'form-control']) !!}

                </div>

                        {!! Form::submit('Create new product',['class'=>'btn btn-primary']) !!}

                {!! Form::close() !!}

        <br>


            @include('includes.error_check')


    </div><!-- /content -->

@endsection