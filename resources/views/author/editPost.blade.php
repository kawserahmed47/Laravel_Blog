@extends('layouts.admin')
@section('content')

<main class="app-content">

<div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Author Post</h3>

            @if(Session::has('success'))
            <div class="btn btn-success">
            	
            	{{Session::get('success')}}
            </div>

            @endif


             @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                    

                  </ul>
                  
                </div>
                @endif

            <div class="tile-body">

              <form method="post" action="{{route('updatePost', $post->id)}}">
              	@csrf
                <div class="form-group">
                  <label class="control-label">Title</label>
                  <input class="form-control" value="{{$post->title}}" name="title" type="text">
                </div>
               
                <div class="form-group">
                  <label class="control-label">Post Content</label>
                  <textarea class="form-control" name="content" rows="4" ">{{$post->content}}
                    
                  </textarea>
                </div>

                <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>&nbsp;&nbsp;&nbsp;
            </div>
               
             
              </form>
            </div>
            
          </div>
        </div>
    </main>

@stop