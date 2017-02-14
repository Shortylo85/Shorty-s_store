@extends('layout.master')

@section('content')
    <div id="content">
        <div class="row">

            <div class="col-md-4 col-md-offset-4">
                <h1>User Sign up</h1>
                {!! Form::open(['method'=>'POST','action'=>'UserController@getSignup']) !!}

                <div class="form-group">

                    {!! Form::label('name', 'User Name') !!}

                    {!! Form::text('name', null, ['class'=>'form-control']) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('email', 'User Email') !!}

                    {!! Form::text('email', null, ['class'=>'form-control']) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('password', 'User Password') !!}

                    {!! Form::text('password', null, ['class'=>'form-control']) !!}

                </div>

                <div class="form-group">

                    {!! Form::label('address', 'User Address') !!}

                    {!! Form::text('address', null, ['class'=>'form-control']) !!}

                </div>

                {!! Form::submit('Sign up',['class'=>'btn btn-success']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection