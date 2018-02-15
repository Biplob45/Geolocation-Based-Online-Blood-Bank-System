<?php
session_start();
if(!isset($_SESSION['username'] )AND !isset($_SESSION['id']))
{
    header('Location:../index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<header>
    <div class="jumbotron">
        <h1 class="text-center">Admin Login</h1>
        <nav class="nav navbar-inverse">
            <ul class="nav navbar-nav">
                <li><a href="logout.php">Logout</a></li>

            </ul>
        </nav>
    </div>

</header>
<main>
    <h3 class="text-center">Register Member List</h3>
    <table class="table table-bordered col-sm-8 col-md-8">
        <thead>
        <th>Serial</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Address</th>
        <th>City</th>
        <th>Blood Group</th>
        <th>I agree</th>
        <th>latitude</th>
        <th>longitude</th>
        <th>Action</th>

        </thead>
        <tbody>
        <?php
        $con=mysqli_connect('localhost','root','','project');
        $sql="SELECT * FROM registration";
        $result=mysqli_query($con,$sql);
        $i=1;
        while($row=mysqli_fetch_array($result))

        {
            $id=$row['id'];
            echo "<tr><td>".@$i++."</td><td>".@$row['Name']."</td><td>".@$row['Phone']."</td><td>".@$row['Email']."</td><td>".@$row['Age']."</td><td>".@$row['Gender']."</td><td>".@$row['Address']."</td><td>".@$row['City']."</td><td>".@$row['b_group']."</td><td>".@$row['Checkbox']."</td><td>".@$row['lat']."</td><td>".@$row['longi']."</td><td><a href='delete.php?id=$id'>Delete</a><br><a href='update.php?id=$id'>update</a></td></tr>";
        }


        ?>
        </tbody>

    </table>
</main>
<footer>
</footer>