<?php



    if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$City = $_POST['city'];
		$b_group = $_POST['b_group'];
		$checkbox = $_POST['checkbox'];
		// We define our address

// We get the JSON results from this request
		$geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode('$City') . '&sensor=false');
// We convert the JSON to an array
		$geo = json_decode($geo, true);
// If everything is cool
		if ($geo['status'] = 'OK') {
			// We set our values
			@$latitude = $geo['results'][0]['geometry']['location']['lat'];
			@$longitude = $geo['results'][0]['geometry']['location']['lng'];

			$host = 'localhost';
			$user = 'root';
			$pass = '';
			$dbname = 'project';
			$my_con = mysqli_connect($host, $user, $pass, $dbname);

			$sql = "SELECT email FROM registration";
			$my_result = mysqli_query($my_con, $sql);
			while ($row = mysqli_fetch_assoc($my_result)) {
				$useremail = $row['email'];

			}

				if ($useremail!=$email):
					$my_query = "INSERT INTO registration(name,phone,email,age,gender,address,city,b_group,checkbox,lat,longi)VALUES('$name','$phone','$email','$age','$gender','$address','$City',
	'$b_group','$checkbox','$latitude','$longitude')";

				$result = mysqli_query($my_con, $my_query);
				if ($result) {
					echo "<p class='alert alert-success'>Data Successfully Submitted</p>";
					header('Location:index.php');
				} else {
					echo "<p class='alert alert-warning'>Error!!!</p>";
				}
				else:
					echo "<p class='alert alert-warning'>E-mail already exists</p>";
				endif;
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		div form input{width:350px;}
		.check{width:20px}
	</style>
	</head>
	<body>
	<div class="jumbotron">
		<h2 class="alert alert-success">Welcome to Registration Form</h2>
		<a style="font-size:40px;font-weight:800;text-align:center;" class="btn btn-success" href="../index.php"><p>Home</p></a>
	</div>

		<div class="well col-xs-6 col-sm-6 col-md-6">
			<h2 class='alert alert-warning'>Please Make sure, your are in your home when you fill this form</h2>
			<form class="form-group" action="" method="POST">
				<label>Name</label><br>
				<input type="text" name="name" placeholder="Enter your name" required><br>
				<label>Phone Number</label><br>
				<input type="text" name="phone" placeholder="Enter your phone number" required><br>
				<label>Email</label><br>
				<input type="Email" name="email" placeholder="Enter your email" required><br>
				<label>Age</label><br>
				<input type="text" name="age" placeholder="Enter your age" required><br>
				<label>Gender</label><br>
				<select name="gender">
					<option>Default</option>
					<option>Male</option>
					<option>Female</option>
				</select><br>
				<label>Address</label><br>
				<input type="text" name="address" placeholder="Enter your Address" required><br>
				<label>City</label><br>
				<select name="city">
					<option>Default</option>
					<option>Barisal</option>
					<option>Chittagong</option>
					<option>Dhaka</option>
					<option>Khulna</option>
					<option>Mymensingh</option>
					<option>Rajshahi</option>
					<option>Rangpur</option>
					<option>Sylhet</option>
				</select><br>
				<label>Blood Group</label><br>
				<input type="text" name="b_group" placeholder="Enter your gender" required><br>
				
				<input type="checkbox" class="check" name="checkbox" required>I don't have any problem for donate blood<br>
				<input type="submit" name="submit">
			</form>
		</div>
	</body>
</html>