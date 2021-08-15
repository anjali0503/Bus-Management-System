<?php

session_start();
header('location:adminpage.php');


$con = mysqli_connect('localhost','root','');


mysqli_select_db($con,'sessionpractical');

$regno = $_POST['regno'];
$dname = $_POST['driver_name'];
$email = $_POST['mail'];
$doj= $_POST['joined_on'];

$q = " select * from adddriver where RegNo = '$regno' && DriverName = '$dname' && email = '$email' && DateOfJoin = '$doj' ";


    $_SESSION['statu'] = "registered";
    $qy = " insert into adddriver(RegNo , DriverName , email , DateOfJoin) values('$regno' , '$dname' , '$email' , '$doj') ";
    mysqli_query($con, $qy);


?>