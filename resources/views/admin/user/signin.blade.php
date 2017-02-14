@extends('layout.master')

@section('content')
  <div id="content">
        <div class="row">

            <div class="col-md-4 col-md-offset-4">
                <h1>User Sign in</h1>
                {!! Form::open(['method'=>'POST','action'=>'UserController@getSignin']) !!}

                        <div class="form-group">

                                {!! Form::label('name', 'User Name') !!}

                                {!! Form::text('name', null, ['class'=>'form-control']) !!}

                        </div>

                        <div class="form-group">

                            {!! Form::label('password', 'User Password') !!}

                            {!! Form::text('password', null, ['class'=>'form-control']) !!}

                        </div>

                        {!! Form::submit('Sign in',['class'=>'btn btn-success']) !!}

                {!! Form::close() !!}
            </div>
        </div>
  </div>
@endsection