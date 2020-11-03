<!DOCTYPE html>
<html>
<head>
	<title>Zarmani</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{asset('mytemplate/bootstrap/css/bootstrap.min.css')}}">
	<script type="text/javascript" src="{{asset('mytemplate/bootstrap/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('mytemplate/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('mytemplate/home.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('mytemplate/fontawesome/css/all.min.css')}}">
	<script type="text/javascript" src="{{asset('mytemplate/jquery.min.js')}}"></script>
	<link rel="icon" href="favicon.ico" type="{{asset('mytemplate/image/x-icon')}}">

<style>
	.content-table {
	  border-collapse: collapse;
	  margin: 25px 0;
	  min-width: 400px;
	  font-size: 0.9em;
	  border-radius: 5px 5px 0 0;
	  overflow: hidden;
	  box-shadow: 0 0 20px rgba(0,0,0,0.15);
	}

	.content-table thead tr{
	   background-color: #009879;
	  color: #ffffff;
	  text-align: left;
	  font-weight: bold;
	 }

	.content-table th,
	.content-table td {
	  padding: 12px 15px;
	}

	.content-table tbody tr {
	  border-bottom: 1px solid #dddddd;
	}
	.content-table tbody tr:nth-of-type(even){
		background-color: #f3f3f3;
	}
	.content-table tbody tr:last-of-type{
		border-bottom: 2px solid #009879;
	}
	.content-table tbody tr.active-row{
		font-weight: bold;
		color: #009879;
	}

	.dropdown {
	  position: relative;
	  display: inline-block;
	}

	.dropdown-content {
	  display: none;
	  position: absolute;
	  background-color: #f9f9f9;
	  min-width: 160px;
	  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	  padding: 12px 16px;
	  z-index: 1;
	}

	.dropdown:hover .dropdown-content {
	  display: block;
	}

</style>

</head>
<body>

<!-- navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="home.html">Zarmani</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('aboutpage')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.html">Sample Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contactpage')}}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('student.index')}}">Student List</a>
          </li>

          <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          User Role
	        </a>
	        <ul class="dropdown-menu">
			    <li class="nav-item"><a href="" class="nav-link" data-target="#detailModal" data-toggle="modal">Staff</a></li>
			    <li class="nav-item"><a href="" class="nav-link" data-target="#detailModal2" data-toggle="modal">Customer</a></li>
			  </ul>

			</li>

        </ul>
      </div>
    </div>
  </nav>

@yield('content')

<!-- footer -->
	<div class="container">
		<div class="row">

			<div class="col-lg-12">
				<nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
					<a href="#" class="navbar-brand">HNIN WAI OO Development</a>

					<ul class="navbar-nav ml-auto navbar-danger">
						<li class="nav-item"><a href="https://web.facebook.com" title="This is Facebook" class="nav-link " style="color: #070707; border-right: 2px solid #333;   padding: 0 10px;">Facebook</a></li>
						<li class="nav-item"><a href="https://www.instagram.com" class="nav-link" title="This is Instagram" style="color: #070707; border-right: 2px solid #333;   padding: 0 10px;">Instagram</a></li>
						<li class="nav-item"><a href="https://twitter.com" class="nav-link" title="This is Twitter" style="color: #070707; padding: 0 10px;">Twitter</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

<!-- Staff -->
	<script type="text/javascript">

		$(document).ready(function(){

			$("#show_form").hide();
			
			$("#login").click(function(){
				$("#login_form").hide();
				$("#show_form").show();
				
			})

		})

	</script>

	<div class="modal fade" id="detailModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="container">

					<div id="login_form">
						<div class="modal-header">					
							<h3>Staff Login Form</h3>
						</div>
						<div class="modal-body">
							<label>Password : </label><br>
						    <input type="password" placeholder="Enter Password" name="password" required><br>				
							<button id="login" class="btn btn-outline-secondary" >Login</button>
						</div>
					</div>

					<div id="show_form">
						<div class="modal-header">
							<h3>Staff Detail</h3>
							<button class="close" data-dismiss="modal">
								<span>&times;</span>
							</button>
						</div>


						<div class="modal-body">
						<div class="container">
							<div class="row">
								<div class="col-md-4">
									<img src="{{asset('mytemplate/images/staff.jpeg')}}" class="img-fluid">
								</div>
								<div class="col-md-8">
									<h3>Assign Table</h3>
										<table border="1" cellpadding="10" class="content-table">
											<thead>
												<th>ID</th>
												<th>Name</th>
												<th>Assign</th>
												<th>Pump No</th>
												<th>Off Day</th>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Phway Phway</td>
													<td>6AM-6PM</td>
													<td>1</td>
													<td>5</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Htet Htet</td>
													<td>6AM-6PM</td>
													<td>2</td>
													<td>10</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Pyae Pyae</td>
													<td>6AM-6PM</td>
													<td>3</td>
													<td>15</td>
												</tr>
												<tr  class="active-row">
													<td>4</td>
													<td>Tun Tun</td>
													<td>7PM-12PM</td>
													<td>Night</td>
													<td>20</td>
												</tr>
												<tr  class="active-row">
													<td>5</td>
													<td>Aung Aung</td>
													<td>12AM-6PM</td>
													<td>Night</td>
													<td>25</td>
												</tr>
											</tbody>
										</table>
								</div>
							</div>
						</div>
						</div>

						<div class="modal-footer">
							<button class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
						</div>
				</div>
				</div>			
			</div>
		</div>
	</div>

<!-- Customer -->
	<script type="text/javascript">

		$(document).ready(function(){

			$("#Cshow_form").hide();
			
			$("#Clogin").click(function(){
				$("#Clogin_form").hide();
				$("#Cshow_form").show();
				
			})

		})

	</script>

	<div class="modal fade" id="detailModal2">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="container">

					<div id="Clogin_form">
						<div class="modal-header">					
							<h3>Customer Login Form</h3>
						</div>
						<div class="modal-body">
						    <form>
						        <div class="container"> 
						            <label>Username : </label><br>
						            <input type="text" placeholder="Enter Username" name="username" required><br>
						            <label>Password : </label> <br>
						            <input type="password" placeholder="Enter Password" name="password" required><br>
						            <button id="Clogin" class="btn btn-outline-secondary" >Login</button><br>
						            <input type="checkbox" checked="checked"> Remember me
						        </div> 
						    </form>  
						</div>
					</div>

					<div id="Cshow_form">
						<div class="modal-header">
							<i class="fas fa-user fa-2x"></i>
							<h3>Customer Detail</h3>
							<button class="close" data-dismiss="modal">
								<span>&times;</span>
							</button>
						</div>

						<div class="modal-body">
						<div class="container">
							<!-- <div class="row">
								<div class="col-md-3">
									<img src="images/staff.jpeg" class="img-fluid">
								</div> -->
								<div class="col-md-12">
									<h3 style="color: #009879">U Myo Thein</h3>
									<h5>Thityarkauk<br>
										09123456789
									</h5>
										<table border="1" cellpadding="10" class="content-table">
											<thead>
												<th>Car No</th>
												<th>Fuel Type</th>
												<th>Date</th>
												<th>Price</th>
												<th>D/C</th>
												<th>Liter Amount</th>
											</thead>
											<tbody>
												<tr>
													<td>1C/1236</td>
													<td>Diesel</td>
													<td>29/9/2020</td>
													<td>70000</td>
													<td>Credit</td>
													<td>100Li</td>
												</tr>
												<tr  class="active-row">
													<td>1C/1865</td>
													<td>Octane</td>
													<td>30/10/2020</td>
													<td>12400</td>
													<td>Debit</td>
													<td>200Li</td>
												</tr>
												<tr>
													<td>9A/4145</td>
													<td>Premium</td>
													<td>1/10/2020</td>
													<td>16000</td>
													<td>Credit</td>
													<td>20Li</td>
												</tr>
												<tr>
													<td colspan="5" class="text-center">Total Liter</td>
													<td>320Li</td>
												</tr>
												<tr>
													<td colspan="5" class="text-center">Debit Amount</td>
													<td>12400</td>
												</tr>
											</tbody>
										</table>
								</div>
							</div>
						</div>

						<div class="modal-footer">
							<button class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
				</div>			
			</div>
		</div>
	</div>

<!-- Staff reg -->
	<div class="modal fade" id="detailModal4">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="container">

				<div class="modal-header">					
					<h3>For Staff</h3>
				</div>	

				<div class="modal-body">
					<div class="container">
					<div class="row">
					<div class="col-md-12">
					<FORM>
						<label for="id">Staff ID</label>
						<input type="text" name="id" id="id" placeholder="Enter ID">
						<br><br>

						<label for="name">Name</label>
						<input type="text" name="name" id="name" placeholder="Enter Name">
						<br><br>

						<label for="assign">Assign Day</label>
						<input type="date" name="id" id="id" placeholder="Enter Assign Day">
						<br><br>

						<label for="pump">Pump Number</label>
						<input type="number" name="id" id="id" placeholder="Enter pump no">
						<br><br>

						<label for="off">Off Day</label>
						<input type="date" name="id" id="id" placeholder="Enter off day">			
					</FORM>

					</div>
					</div>
					</div>

						<div class="modal-footer">
							<button class="btn btn-outline-secondary" data-dismiss="modal">Save</button>
							<button class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
						</div>
				</div>
				</div>			
			</div>
		</div>
	</div>

<!-- customer reg -->

	<div class="modal fade" id="detailModal5">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="container">

				<div class="modal-header">					
					<h3>For Customer</h3>
				</div>	

				<div class="modal-body">
					<div class="container">
					<div class="row">
					<div class="col-md-12">
					<FORM>

						<label for="name">Name</label>
						<input type="text" name="name" id="name" placeholder="Enter Name">
						<br>

						<label for="car">Car No</label>
						<input type="number" name="car" id="car" placeholder="Enter Car no">
						<br>

						<label for="off">Fuel Type</label>
						<input type="text" name="id" id="id" placeholder="Enter type">
						<br>

						<label for="date">Date</label>
						<input type="date" name="date" id="date" placeholder="Enter Date">
						<br>

						<label for="price">Price</label>
						<input type="text" name="price" id="price" placeholder="Enter price">
						<br>	

						<label for="dc">Debit/Credit</label>
						<select name="dc" id="dc">
							<option>Debit</option>
							<option>Credit</option>
						</select>
						<br>

						<label for="amount">Liter Amount</label>
						<input type="number" name="amount" id="amount">
						<br>		
					</FORM>

					</div>
					</div>
					</div>

						<div class="modal-footer">
							<button class="btn btn-outline-secondary" data-dismiss="modal">Save</button>
							<button class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
						</div>
				</div>
				</div>			
			</div>
		</div>
	</div>

</body>
</html>
