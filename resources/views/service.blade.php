@extends ('master')
@section('content')

<!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('mytemplate/images/contactus.jpeg')}})">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h2>Service Page</h2>
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
          {{--<h1>{{$name}}</h2> --}}

          {{--Array of arrays --}}            
          @foreach($students as $row)
          <p>Name: {{$row['name']}}</p>
          <p>Age: {{$row['age']}}</p>
          @endforeach

          {{-- May be Array of objects--}}
          {{-- @foreach($students as $row)
              <p>Name: {{$row['name']}}</p>
              <p>Age: {{$row['age']}}</p>
          @endforeach  --}}

        </div>
    </div>
  </div>

@endsection