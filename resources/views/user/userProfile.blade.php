@extends('layouts.admin')
@section('content')

<main class="app-content">
      <div class="row user">
       
        <div class="col-md-3">
          <div class="tile p-0">
            <ul class="nav flex-column nav-tabs user-tabs">
              
              <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Settings</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            
            <div class="tab-pane fade" id="user-settings">
              <div class="tile active user-settings">
                <h4 class="line-head">Settings</h4>
                @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                    

                  </ul>
                  
                </div>
                @endif



                <form action="{{route('userProfile')}}" method="post">
                  @csrf
                  
                  <div class="row">
                    <div class="col-md-8 mb-4">
                      <label>Name</label>
                      <input value="{{Auth::user()->name}}" name="name" class="form-control" type="text">
                    </div>

                    <div class="col-md-8 mb-4">
                      <label>Email</label>
                      <input value="{{Auth::user()->email}}" name="email" class="form-control" type="text">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 mb-4">
                      <label>Current Passowrd</label>
                      <input name="password" class="form-control" type="text">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 mb-4">
                      <label>New Password</label>
                      <input name="new_password" class="form-control" type="text">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-8 mb-4">
                      <label>Confirm Password</label>
                      <input name="new_password_confirmation" class="form-control" type="text">
                    </div>
                  </div>
                  <div class="row mb-10">
                    <div class="col-md-12">
                      <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    @stop