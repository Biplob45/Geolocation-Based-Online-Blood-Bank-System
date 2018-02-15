<?php
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','project');
$query="DELETE FROM registration where id='$id' ";
echo $query;
$result=mysqli_query($conn,$query);
if($result)
{
    header('Location:admin_panel.php');
}
