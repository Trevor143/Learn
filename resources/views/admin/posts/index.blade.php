@extends('layouts.admin')


@section ('content')
<h1 class="fa-ellipsis-h">Tasks</h1>

<table class="table table-hover">
    <thead>
    <tr>
        <th>Owner</th>
        <th>Photo</th>
        <th>Title</th>
        <th>Content</th>
        <th>Category</th>
        <th>Created</th>
        <th>Updated</th>
    </tr>
    </thead>

    <tbody>

    @if($posts)

        @foreach($posts as $post)
            <tr>
                {{--<td><img height="40" width="40" src="{{$post->photo->id ? $post->photo->file: 'images' }}" alt="" class="img-responsive img-rounded"></td>--}}
                <td><img height="50" width="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->category_id}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
                {{--<td><a href="{{route('admin.users.edit' ,$user->id)}}"><button class="btn btn-info">Edit user</button></a></td>--}}

            </tr>
        @endforeach

    @endif

    </tbody>
</table>


    @endsection