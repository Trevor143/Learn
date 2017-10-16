@extends('layouts.admin')

@section('content')

    <h1>Edit Users</h1>

    <div class="col-sm-3">
        <img height="400" width="400" src="{{$user->photo ? $user->photo->file : '/images/IMG-20160901-WA0000 (2).jpg/'}}" alt="" class="img-responsive img-rounded">
    </div>

    <div class="col-sm-9">

    {!! Form::model($user, ['method' => 'PATCH' , 'action' => ['AdminUsersController@update', $user->id], 'files'=>true])!!}


    <div class="form-group">
        {!!Form::label('name', 'Name:') !!}
        {!!Form::text('name', null, ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!!Form::label('photo_id', 'File:') !!}
        {!!Form::file('photo_id', ['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!!Form::label('role_id', 'Role:') !!}
        {!!Form::select('role_id',  $roles , null,   ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!!Form::label('isActive', 'Status:') !!}
        {!!Form::select('isActive', array(1=>'Active', 0=>'Not Active') , null, ['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!!Form::label('email', 'Email:') !!}
        {!!Form::email('email', null, ['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!!Form::label('password', 'Password:') !!}
        {!!Form::password('password',  ['class'=>'form-control']) !!}

    </div>

    <div class ="form-group  ">
        {!! form::submit('Edit User ', ['class' => 'btn btn-primary col-sm-6']) !!}
    </div>





    {!! Form::close()!!}

        {!! Form::open(['method' => 'DELETE', 'action'=>['AdminUsersController@destroy', $user->id] ])!!}

        <div class ="form-group ">
            {!! Form::submit('Delete User', ['class' => 'btn btn-danger col-sm-6']) !!}
        </div>

        {!! Form::close()!!}

        @include('includes.form_error')

    </div>


    {{--<form class="form-horizontal" method="post" action="AdminUsersController@store">--}}
    {{--{!! Form::open(['method'=>'post', 'action' => 'AdminUsersController@store']) !!}--}}
    {{--<div class="form-group">--}}
    {{--<label class="control-label col-sm-2" for="name">Name:</label>--}}
    {{--<div class="col-sm-10">--}}
    {{--<input type="text" class="form-control" id="name" placeholder="Enter name">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<label class="control-label col-sm-2" for="email">Email:</label>--}}
    {{--<div class="col-sm-10">--}}
    {{--<input type="email" class="form-control" id="email" placeholder="Enter email">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<label class="control-label col-sm-2" for="role">Role:</label>--}}
    {{--<div class="col-sm-10">--}}
    {{--<input type="role" class="form-control" id="role" placeholder="Enter role">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<label class="control-label col-sm-2" for="pwd">Password:</label>--}}
    {{--<div class="col-sm-10">--}}
    {{--<input type="password" class="form-control" id="pwd" placeholder="Enter password">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--<label class="control-label col-sm-2" for="pwd">Re-type Password:</label>--}}
    {{--<div class="col-sm-10">--}}
    {{--<input type="password" class="form-control" id="pwd" placeholder="Enter password">--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--<div class="col-sm-offset-2 col-sm-10">--}}
    {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</form>--}}



@stop