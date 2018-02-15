
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
        <a style="font-size:40px;font-weight:800;text-align" class="btn btn-success" href="../index.php"><p>Home</p></a>
    </div>

</header>
<main>
    <?php
    if(isset($_POST['login']))
    {
        $user_name=$_POST['user_name'];
        $user_pass=$_POST['user_pass'];
        if(empty($user_name)||empty($user_pass))
        {
            echo "<p class='alert alert-danger'>Field Can not be Empty</p>";
        }else{
            $con=mysqli_connect('localhost','root','','project');
            $query="SELECT * FROM users WHERE user_name='$user_name' AND user_pass='$user_pass'";
            $result=mysqli_query($con,$query);


            $row=mysqli_num_rows($result);

            if($row>0 && $row<2)

            {
                $row=mysqli_fetch_assoc($result);
                session_start();
                $_SESSION['id']=$row['user_id'];
                $_SESSION['username']=$row['user_name'];

                header('Location:admin_panel.php');
            }else{
                echo "<p class='alert alert-danger'>Login Invalid</p>";
            }
        }

    }

    ?>
    <form class="well col-md-6 col-sm-6" action="" method="POST">
        <div class="form-group">
            <label>User Name</label>
            <input type="text" class="form-control" name="user_name" placeholder="Enter your User Name">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="user_pass" placeholder="Enter your Password">
        </div>
        <div class="form-group">
            <input type="submit" name="login" class="btn btn-success" value="Login">
        </div>

    </form>
</main>
<footer>
</footer>