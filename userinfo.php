<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection Successful";
}
else{
    echo "No Connection";
}
mysqli_select_db($con,'formdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$service = $_POST['service'];
$booking_date = $_POST['booking_date'];


$query = " insert into userinfodata (user,email,mobile,service,booking_date)
values ('$user','$email','$mobile','$service','$booking_date') ";

echo "$query";

mysqli_query($con,$query);
header('location:index.php');

?>