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
      
      <div class="col-md-12">
         <a href="{{route('student.create')}}" class="btn btn-info">Add New</a>
      </div>

      <div class="col-lg-8 col-md-10 mx-auto">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Email</th>
              <th>PhoneNo</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @php
              $i=1;
            @endphp
            @foreach ($students as $row)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$row->name}}</td>
              <td>{{$row->email}}</td>
              <td>{{$row->phoneno}}</td>
              <td>
                <a href="{{route('student.edit',$row->id)}}" class="btn btn-warning">Edit</a>
                <form method="post" action="{{route('student.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                @csrf
                @method('DELETE')
                <input type="submit" name="btnsubmit" class="btn btn-danger" value="Delete">
                </form>
                <a href="{{route('student.show',$row->id)}}" class="btn btn-primary">Detail</a>

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      	
      </div>

    </div>
  </div>

@endsection