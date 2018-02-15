<?php
$id=$_GET['id'];
$con=mysqli_connect('localhost','root','','project');
if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $b_group=$_POST['b_group'];
    $checkbox=$_POST['checkbox'];
    $sql="UPDATE registration SET Name='$name', Phone='$phone', Email='$email', Age='$age', Gender='$gender', Address='$address', City='$city', b_group='$b_group', Checkbox='$checkbox' WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
		echo "<p class='alert alert-success'>Data Updated </p>";
	}
		    
}    
    
  $sql="SELECT * FROM registration WHERE id=$id";
$result=mysqli_query($con,$sql);
while($data=mysqli_fetch_assoc($result))
{


?>
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
		<div class="well col-xs-6 col-sm-6 col-md-6">
			<h2 class='alert alert-warning'>Please Make sure, your are in your home when you fill this form</h2>
			<form class="form-group" action="" method="POST">
				<label>Name</label><br>
				<input type="text" name="name" value="<?php echo @$data['Name'];?>" placeholder="Enter your name" required><br>
				<label>Phone Number</label><br>
				<input type="text" name="phone" value="<?php echo @$data['Phone'];?>"  placeholder="Enter your phone number" required><br>
				<label>Email</label><br>
				<input type="Email" name="email" value="<?php echo @$data['Email'];?>"  placeholder="Enter your email" required><br>
				<label>Age</label><br>
				<input type="text" name="age" value="<?php echo @$data['Age'];?>"  placeholder="Enter your age" required><br>
				<label>Gender</label><br>
				<select name="gender" value="<?php echo @$data['Gender'];?>" >
					<option>Default</option>
					<option>Male</option>
					<option>Female</option>
				</select><br>
				<label>Address</label><br>
				<input type="text" name="address" value="<?php echo @$data['Address'];?>"  placeholder="Enter your Address" required><br>
				<label>City</label><br>
				<select name="city" value="<?php echo @$data['City'];?>" >
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
				<input type="text" name="b_group" value="<?php echo @$data['b_group'];?>"  placeholder="Enter your gender" required><br>
				
				<input type="checkbox" class="check" value="<?php echo @$data['Checkbox'];?>"  name="checkbox" required>I don't have any problem for donate blood<br>
				<input type="submit" name="update">
			</form>
		</div>
	<?php 
	    }
	?>
	</body>
</html>