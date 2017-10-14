@extends('layouts.admin')

@section('content')
    <h1>Users</h1>


      <table class="table table-hover">
        <thead>
          <tr>
            <th>User_ID</th>
            <th>Role</th>
            <th>Status</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created</th>
          </tr>
        </thead>

        <tbody>

        @if($users)

            @foreach($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->isActive == 1 ? 'Active' : 'Not Active'}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
          </tr>
            @endforeach

        @endif

        </tbody>
      </table>


    @stop