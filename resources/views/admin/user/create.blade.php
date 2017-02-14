@extends('layout.admin_master')

@section('content')

    <div id="content">

        <h1>Add User</h1>

        {!! Form::open(['method'=>'POST','action'=>'UserController@store']) !!}

        <div class="form-group">

            {!! Form::label('name', 'User Name') !!}

            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('email', 'E-mail') !!}

            {!! Form::text('email', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('password', 'Password') !!}

            {!! Form::text('password', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('status', 'Status') !!}

            {!! Form::select('status', [0 => 'subscriber',1 => 'admin'],0, ['class'=>'form-control']) !!}

        </div>


        {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}

    </div><!-- /content -->

@endsection