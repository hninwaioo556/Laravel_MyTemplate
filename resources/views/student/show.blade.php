@extends('master')
@section('title','Student Detail')

@section('content')

<!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('mytemplate/images/about.jpeg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h2>Student Detail</h2>
            <span class="subheading"> </span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>Name: <span>{{$student->name}}</span></p>

        <p>Email: <span>{{$student->email}}</span></p>

        <p>Phoneno: <span>{{$student->phoneno}}</span></p>

        <p>Address: <span>{{$student->address}}</span></p>
        
      </div>
    </div>
  </div>
@endsection