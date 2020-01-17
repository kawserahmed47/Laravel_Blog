@extends('layouts.admin')
@section('content')
  <main class="app-content">
 <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title text-center">User Comments</h3>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Post</th>
                  <th>Comment Content</th>
                  <th>Created_at</th>
                   <th>Action</th>
                </tr>
              </thead>
              <tbody>

              	@foreach(Auth::user()->comments as $comment)

                <tr>
                  <td>{{$comment->id}}</td>
                  <td><a href="{{route('singlePost', $comment->id)}}">{{$comment->post->title}}</a></td>
                  <td>{{$comment->content}}</td>
                  <td>{{\Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</td>
                  <td>
                  	<form action="{{route('deleteComment',$comment->id)}}" method="post" id="deleteComment-{{$comment->id}}">@csrf</form>
                  	<button class="btn btn-danger" onclick="document.getElementById('deleteComment-{{$comment->id}}').submit()">Delete</button>

                  	<a href="" class="btn btn-trash"></a></td>
                </tr>
               	@endforeach
             
              </tbody>
            </table>
          </div>
        </div>

    </main>


@stop
