@extends('layout.admin_master')

@section('content')


<div id="content">
    <h1>Users Table</h1>

    <div class="row">
        @if(Session::has('deleted_user'))
            <div class="col-md-4 col-md-offset-4 alert alert-danger">
                {{Session::get('deleted_user')}}
            </div>
        @endif
            @if(Session::has('changed_status'))
                <div class="col-md-4 col-md-offset-4 alert alert-info">
                    {{Session::get('changed_status')}}
                </div>
            @endif

    </div>
    <h2>Administrators</h2>

    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>

        </tr>
      </thead>

        <tbody>
        @foreach($users as $user)
            @if($user->status == 1)
          <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>

          </tr>
          @endif
        @endforeach
      </tbody>
    </table>

    <h2>Users</h2>
        <!-- Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Orders</th>
                    <th>Action</th>

                </tr>
            </thead>

            <tbody>

            @foreach($users as $user)
                @if($user->status == 0)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if(!empty($user->address))
                        {{$user->address->address}},
                        {{$user->address->city }},
                        {{$user->address->zip }},
                        {{$user->address->state}},
                        {{$user->address->phone}}

                            {{--{{"has something"}}--}}
                        @else

                            {{"There is no address because the user has not bought anything"}}
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-default" href="{{route('page.order',['id'=>$user->id])}})">View</a>
                    </td>
                    <td>
                        <a href="{{route('change.status',['id'=>$user->id])}}" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i> make admin</a>

                        {!! Form::open(['method'=>'DELETE','action'=>['UserController@destroy',$user->id]]) !!}


                            {!! Form::submit('- delete user',['class'=>'btn btn-danger']) !!}

                        {!! Form::close() !!}
                    </td>

                </tr>
                @endif
            @endforeach

            </tbody>
        </table>
    {{--<a href="{{route('user.create')}}" class="btn btn-primary">Add new <i class="fa fa-plus" aria-hidden="true"></i>--}}
    {{--</a>--}}


</div><!-- /content -->

@endsection