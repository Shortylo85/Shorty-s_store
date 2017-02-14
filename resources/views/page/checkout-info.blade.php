@extends('layout.master')

@section('content')
    <div id="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Shipping-info</h1>

                {!! Form::open(['method'=>'POST','action'=>'AddressController@store']) !!}

                        <div class="form-group">

                                {!! Form::label('address', 'Address') !!}

                                {!! Form::text('address', null, ['class'=>'form-control']) !!}

                        </div>

                        <div class="form-group">

                                {!! Form::label('city', 'City') !!}

                                {!! Form::text('city', null, ['class'=>'form-control']) !!}

                        </div>

                        <div class="form-group">

                                {!! Form::label('state', 'State') !!}

                                {!! Form::text('state', null, ['class'=>'form-control']) !!}

                        </div>

                        <div class="form-group">

                                {!! Form::label('zip', 'ZIP') !!}

                                {!! Form::text('zip', null, ['class'=>'form-control']) !!}

                        </div>

                        <div class="form-group">

                                {!! Form::label('phone', 'Phone') !!}

                                {!! Form::text('phone', null, ['class'=>'form-control']) !!}

                        </div>
                                {{csrf_field()}}
                                {!! Form::submit('Payment',['class'=>'btn btn-success']) !!}

                        {!! Form::close() !!}
            </div>
        </div>
                         @include('includes.error_check')

    </div>
@endsection


