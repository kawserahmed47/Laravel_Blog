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
                  <th>Post Title</th>
                  <th>Post Content</th>
                  <th>Created_at</th>
                  <th>Updated_at</th>
                   <th>Action</th>
                </tr>
              </thead>
              <tbody>

              	@foreach(Auth::user()->posts as $post)

                <tr>
                  <td>{{$post->id}}</td>
                  <td><a href="{{route('singlePost', $post->id)}}">{{$post->title}}</a></td>
                  <td>{{$post->content}}</td>
                  <td>{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</td>
                   <td>{{\Carbon\Carbon::parse($post->updated_at)->diffForHumans()}}</td>
                  
                  <td>
                  	<a href="{{route('editPost',$post->id)}}" class="btn btn-info">Edit</a>

                  	<form action="{{route('deletePost',$post->id)}}" method="post" id="deletePost-{{$post->id}}">@csrf</form>
                  	<button class="btn btn-danger" onclick="document.getElementById('deletePost-{{$post->id}}').submit()">Delete</button>
                  	
                  	

                  </td>
                </tr>
               	@endforeach
             
              </tbody>
            </table>
          </div>
        </div>

    </main>


@stop
