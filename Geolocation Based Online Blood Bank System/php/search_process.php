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
    </head>
    <body>
        <div class="jumbotron">
            <h1 style="text-align: center">Search Result</h1>
        </div>

        <a style="font-size:40px;font-weight:800;text-align:center;" class="btn btn-success" href="../index.php"><p>Home</p></a>
<table class="table table-bordered">
    <thead>
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
    <th>Distance from you</th>


    </thead>
    <tbody>

    <?php
    //The main distance calculation is happen in here
    function distance($lat1, $lon1, $lat2, $lon2, $unit) {

        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }


   // echo distance(@$latitude,@$longitude,@$lat,@$long, "M") . " Miles<br>";
    $distance=distance(@$latitude,@$longitude,@$lat,@$long,"K") . " Kilometers<br>";
   // echo distance(@$latitude,@$longitude,@$lat,@$long,"N") . " Nautical Miles<br>";

    ?>
<?php

$con=mysqli_connect('localhost','root','','project');

if(htmlspecialchars($_SERVER['REQUEST_METHOD']=='POST') && isset($_POST['submit']))
{
    $blood_group=validate($_POST['b_group']);
    $city=validate($_POST['city']);
    if(empty($username) || empty($password))
    {
        echo "<p></p>";
    }
    $query="SELECT * FROM registration WHERE b_group='$blood_group' AND City='$city'";
    $result=mysqli_query($con,$query);
    $count=mysqli_num_rows($result);
    if($count>0)
    {

        while($row=mysqli_fetch_assoc($result))
        {
            $id=$row['id'];
            $Name=$row['Name'];
            $Phone=$row['Phone'];
            $Email=$row['Email'];
            $Age=$row['Age'];
            $Gender=$row['Gender'];
            $Address=$row['Address'];
            $City=$row['City'];
            $Blood_Group=$row['b_group'];
            //previous latitude
            $lat=$row['lat'];
            //previous longitude
            $long=$row['longi'];
            // We define our address
// We get the JSON results from this request
            @$geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode('$City').'&sensor=false');
// We convert the JSON to an array
            $geo = json_decode($geo, true);
// If everything is cool
            if ($geo['status'] = 'OK') {
                // We set our values
                @$latitude = $geo['results'][0]['geometry']['location']['lat'];
                @$longitude = $geo['results'][0]['geometry']['location']['lng'];

            }

            echo "<tr><td>$id</td><td>$Name</td><td>$Phone</td><td>$Email</td><td>$Age</td><td>$Gender</td><td>$Address</td><td>$City</td><td>$Blood_Group</td><td>$distance</td><tr>";
        }



    }else{
        echo "<p class='alert alert-danger'>Not Found</p>";
    }


}


function validate($data)
{
    $data=htmlentities($data);
    $data=trim($data);
    return $data;

}

?>

    </tbody>
    </table>
    </body>
</html>
