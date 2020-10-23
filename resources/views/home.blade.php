@extends ('master')
@section('content')

<!-- heading photo -->	
	<header class="masthead" style="background-image: url({{asset('mytemplate/images/header.jpeg')}})">
	    <div class="overlay"></div>
	    <div class="container">
	      <div class="row">
	        <div class="col-lg-8 col-md-10 mx-auto">
	          <div class="site-heading">
	            <h2>Home Page</h2>
	            <span class="subheading"> </span>
	          </div>
	        </div>
	      </div>
	    </div>
	  </header>

<!-- Categories -->
	<div class="container my-3">
		<h2 class="text-center">Why Choose Us</h2>
		<hr class="divider my-2"/>
	</div>
	<div class="container my-4 d-none d-md-block">
		<div class="row">
			<div class="col-md-3 text-center">
				<a href="" class="text-decoration-none wrapper">
					<span class="fa-stack fa-2x">
						<i class="fas fa-circle fa-stack-2x text-info"></i>
                        <i class="fas fa-pump-soap fa-stack-1x fa-inverse"></i>
                    </span>
                    <p class="font-weight-bold text-dark pt-1">100% Pure Oil</p>
				</a>
			</div>

			<div class="col-md-3 text-center">
				<a href="" class="text-decoration-none wrapper">
					<span class="fa-stack fa-2x">
						<i class="fas fa-circle fa-stack-2x text-info"></i>
						<i class="fas fa-gas-pump fa-stack-1x fa-inverse"></i>                        
                    </span>
                    <p class="font-weight-bold text-dark pt-1">Latest Mechinary</p>

				</a>
			</div>
	
			<div class="col-md-3 text-center">
				<a href="" class="text-decoration-none wrapper">
					<span class="fa-stack fa-2x">
						<i class="fas fa-circle fa-stack-2x text-info"></i>
                        <i class="fas fa-fire-extinguisher fa-stack-1x fa-inverse"></i>
                    </span>
                    <p class="font-weight-bold text-dark pt-1">Fire Safety</p>

				</a>
			</div>

			<div class="col-md-3 text-center">
				<a href="" class="text-decoration-none wrapper">
					<span class="fa-stack fa-2x">
						<i class="fas fa-circle fa-stack-2x text-info"></i>
                        <i class="fas fa-clock fa-stack-1x fa-inverse"></i>
                    </span>
                    <p class="font-weight-bold text-dark pt-1">24hr Services</p>
				</a>
			</div>

		</div>
	</div>

<!-- Pricing -->
	<div class="container my-5">
		<h2 class="text-center">Fuel Pricing (Liter)</h2>
		<hr class="divider my-2"/>
	</div>
	<div class="container my-3">
		<div class="row">

			<div class="col-md-3">
				<div class="card">
					<img src="images/octane.jpeg" width="250" height="170">

					<div class="card-body text-center">
						<p class="my-2">Octane</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">620 MMk</p>
						  <div class="dropdown">
							  <span>
							  	<button class="btn btn-outline-info btn-block" class="dropdown">More Detail</button></span>
							  <div class="dropdown-content">
							  <p>1gl: 2800<br>
							  	 5gl: 14000<br>
							  	  1P: 140000
							  </p>
							  </div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card">
					<img src="images/preminum.jpeg" width="250" height="170">

					<div class="card-body text-center">
						<p class="my-2">Preminum</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">800 MMk</p>
						<div class="dropdown">
							  <span>
							  	<button class="btn btn-outline-info btn-block" class="dropdown">More Detail</button></span>
							  <div class="dropdown-content">
							  <p>1gl: 3600<br>
							  	 5gl: 18000<br>
							  	  1P: 180000
							  </p>
							  </div>
						</div>

					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card">
					<img src="images/disel.jpeg"  width="250" height="170">

					<div class="card-body text-center">
						<p class="my-2">Disel</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">700 MMk</p>
						<div class="dropdown">
							  <span>
							  	<button class="btn btn-outline-info btn-block" class="dropdown">More Detail</button></span>
							  <div class="dropdown-content">
							  <p>1gl: 3150<br>
							  	 5gl: 15750<br>
							  	  1P: 157500
							  </p>
							  </div>
						</div>

					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card">
					<img src="images/engineoil.png" class="img-fluid">

					<div class="card-body text-center">
						<p class="my-2">Engine Oil</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">1000 MMk</p>
						<div class="dropdown">
							  <span>
							  	<button class="btn btn-outline-info btn-block" class="dropdown">More Detail</button></span>
							  <div class="dropdown-content">
							  <p>1gl: 4500<br>
							  	 5gl: 22500<br>
							  	 1P: 22500
							  </p>
							  </div>
						</div>

					</div>
				</div>
			</div>

		</div>
	</div>	

<!-- Present -->

	<div class="container my-5 pt-1">
		<h2 class="text-center">Membership</h2>
		<hr class="divider my-2"/>
	</div>
	<div class="container my-3">
		<div class="row">

			<div class="col-md-3">
				<div class="card">
					<img src="images/water.jpg" width="260" height="170">

					<div class="card-body text-center">
						<p class="my-2">Water</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">Every Customer</p>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card">
					<img src="images/pasoe.jpg" width="250" height="170">

					<div class="card-body text-center">
						<p class="my-2">Longyi</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">1000Li</p>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card">
					<img src="images/shirt.jpeg"  width="250" height="170">

					<div class="card-body text-center">
						<p class="my-2">Coat</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">2000Li</p>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card">
					<img src="images/mobile.jpeg" width="250" height="170">

					<div class="card-body text-center">
						<p class="my-2">Mobile</p>
						<hr class="item-divider my-1"/>
						<p class="my-2">3000Li</p>
					</div>
				</div>
			</div>

		</div>
	</div>

@endsection