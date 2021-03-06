@extends ('master')
@section('content')

<!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('mytemplate/images/about.jpeg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h2>Student Create Form</h2>
            <span class="subheading"> </span>
          </div>
        </div>
      </div>
    </div>
  </header>

<!-- About -->

  <div class="container">
  <div class="row">

  <div class="col-lg-8 col-md-10 mx-auto">
    <form method="post" action="{{route('student.store')}}">
      @csrf
      <div class="form-group row">

        <div class="col-md-6">
          <label>Roll No:</label>
          <input type="text" name="rollno" class="form-control @error('rollno') is-invalid @enderror" value="{{old('rollno')}}" required>
          @error('rollno')
            <span class="invalid-feedback" role="alert">
              <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6">
          <label>Name:</label>
          <input type="text" name="name" class="form-control">
        </div>

      </div>

      <div class="form-group row">

        <div class="col-md-6">
          <label>Email:</label>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
              
        <div class="col-md-6">
           <label>Phone No:</label>
          <input type="text" name="phoneno" class="form-control">
        </div>
        
      </div>

      <div class="form-group">
        <label>Address:</label>
        <textarea class="form-control" name="address"></textarea>
      </div>

      <div class="form-group">
        <input type="submit" name="btnsubmit" value="Save" class="btn btn-info btn-block">
      </div>

      </form>
    </div>

    </div>
    </div>

@endsection