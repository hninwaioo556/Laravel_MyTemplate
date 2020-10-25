@extends ('master')
@section('content')

<!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('mytemplate/images/about.jpeg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h2>About Page</h2>
            <span class="subheading"> </span>
          </div>
        </div>
      </div>
    </div>
  </header>

<!-- About -->

    <div class="container">
      <div class="row">

        <div class="col-md-5">
          <div class="row">
            <div class="col-sm-12" style="padding-top:0px; padding-bottom:0px;  padding-left:0px; padding-right:20px;">
              <img src="{{asset('mytemplate/images/prices.jpg')}}" class="card-img-top">
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="row">
            <div class="col-sm-12" style="padding-top:0px; padding-bottom:0px;  padding-left:20px; padding-right:0px;">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>


@endsection