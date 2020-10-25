@extends ('master')
@section('content')

<!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('mytemplate/images/about.jpeg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h2>All Student</h2>
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
        	@foreach ($students as $row)
        	<p>{{$row->id}} | {{$row->name}} | {{$row->email}} | {{$row->phoneno}}</p>
        	@endforeach
        </div>

      </div>
    </div>

@endsection