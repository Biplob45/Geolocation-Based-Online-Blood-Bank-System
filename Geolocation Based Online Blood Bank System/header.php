<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Geo-location Based Blood Bank</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

		<link rel="stylesheet" href="assets/css/bootstrap.css">  <!--new Enter-->
<!--		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">  <!--new Enter-->
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/main.css">
		
		<link rel="stylesheet" href="assets/css/animate.css">

	
		<script src="assets/js/main.js"></script>
		
        <script src="assets/js/jquery-3.0.0.min.js"></script>

        <script src="assets/js/jquery-1.12.4.js"></script>
        <script src="assets/js/bootstrap.min.js"></script> 
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
				<!--jquery-ui.com-->
				<script
			  src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
			  integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
			  crossorigin="anonymous"></script>
		<link rel="stylesheet" href="assets/css/jquery-ui.css"/>
		  

    </head>
<body>
<!--Header Part start-->
	<header class="headsection navbar-fixed-top">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">

                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
           <a class="navbar-brand my_class" href="#">
					<div class="logo">
						<img src = "assets/images/logo.gif"/>
					</div>
					<div class="title">
						<h2><span>Blood</span>Bank</h2>
					</div>
				  </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="index.php"><button type="button" class="btn btn-danger btn_danger_modified">Home</button></a></li>
					<li><a href="information.php"><button type="button" class="btn btn-danger btn_danger_modified">Information Center</button></a></li>

					<li><a href="donate_blood.php"><button type="button" class="btn btn-danger btn_danger_modified">Why Donate Blood</button></a></li>
					<li><a href="php/index.php"><button type="button" class="btn btn-danger btn_danger_modified">Member Registration</button></a></li>
										<!--Member Login Part Start-->
                      <li><a href="php/admin.php"><button type="button" class="btn btn-danger btn_danger_modified">Admin</button></a></li>
						<!-- Trigger/Open The Modal -->
					<li><a href="php/search_pannel.php"><button type="button" class="btn btn-danger btn_danger_modified" >Blood Search</button></a></li>  <!-- data-toggle="modal"  this create the modal problem-->



						<!-- The Modal -->
						<div id="myModal" class="modal modal-modified">

						  <!-- Modal content -->
						  <div class="modal-content">
							<span class="close">x</span>
						   <form action="" method="POST">
						   <div class="form-group">
						   <label style="color:white !important">Username:</label>
						   <input type="text" class="form-control" placeholder="Enter your Username">

						   </div>
						   <div class="form-group">
						   <label style="color:white !important">Password</label>
						   <input type="password" class="form-control" placeholder="Your Password">
						   </div>
						   <div class="form-group">
						   <input type="submit" class="btn btn-success btn-success-modified" value="Login">
						   </div>
						   </form>
						  </div>

						</div>
            </ul>
        </div>
    </div>
</nav>
	</header>
<!--Header Part End-->