@extends('layouts.admin')

@section('content')
    <h1>Users</h1>

    @if(Session::has('Delete'))

        <p class="bg-danger">{{session('Delete')}}</p>
        @endif

    @if(Session::has('Update'))

        <p class="bg-success">{{session('Update')}}</p>

           @endif

           @if(Session::has('Create'))

               <p class="bg-success">{{session('Create')}}</p>

           @endif


         <table class="table table-hover">
           <thead>
             <tr>
               <th>Photo</th>
               <th>Role</th>
               <th>Status</th>
               <th>Name</th>
               <th>Email</th>
               <th>Created</th>
               <th>Edit</th>
             </tr>
           </thead>

           <tbody>

           @if($users)

               @foreach($users as $user)
             <tr>
           <td><img height="40" width="40" src="{{$user->photo ? $user->photo->file: '/images/IMG-20160901-WA0000 (2).jpg' }}" alt="" class="img-responsive img-rounded"></td>
               <td>{{$user->role->name}}</td>
               <td>{{$user->isActive == 1 ? 'Active' : 'Not Active'}}</td>
               <td>{{$user->name}}</td>
               <td>{{$user->email}}</td>
               <td>{{$user->created_at->diffForHumans()}}</td>
               <td><a href="{{route('admin.users.edit' ,$user->id)}}"><button class="btn btn-info">Edit user</button></a></td>

             </tr>
               @endforeach

           @endif

           </tbody>
         </table>


       @stop