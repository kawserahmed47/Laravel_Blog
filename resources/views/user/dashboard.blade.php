@extends('layouts.admin')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-6">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>All Comments</h4>
              <p><b>{{Auth::user()->comments->count()}}</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
              <h4>Comments Post</h4>
              <p><b>{{Auth:: user()->comments->unique('user_id')->count()}}</b></p>
            </div>
          </div>
        </div>
        
      
      </div>
     
      
    </main>
    @stop