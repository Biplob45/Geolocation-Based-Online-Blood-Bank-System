<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="bootstrap.css">
		<link rel="stylesheet" href="bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .search_div{
                height: 200px;width: 300px;margin: 0 auto;
            }
            input{width: 300px;}

        </style>
    </head>
    <body>
    <div class="jumbotron"> <h1>Blood Search pannel</h1></div>
	
	
	<a style="font-size:40px;font-weight:800;text-align:center;" class="btn btn-success" href="../index.php"><p>Home</p></a>
	<div class="search_div">

            <form action="search_process.php" method="POST">
                <label>Blood Group</label><br>
                <input type="text" required placeholder="Please enter the required blood group" name="b_group"><br>
                <label>City</label><br>
                <select name="city" required>
                    <option>Default</option>
                    <option>Barisal</option>
                    <option>Chittagong</option>
                    <option>Dhaka</option>
                    <option>Khulna</option>
                    <option>Mymensingh</option>
                    <option>Rajshahi</option>
                    <option>Rangpur</option>
                    <option>Sylhet</option>
                </select><br><br>
                <input type="submit" name="submit">
            </form>
        </div>

    </body>
</html>