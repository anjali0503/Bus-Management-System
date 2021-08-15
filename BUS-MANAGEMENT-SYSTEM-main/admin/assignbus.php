<?php

session_start();
header('location:adminpage.php');

$con = mysqli_connect('localhost','root','');


mysqli_select_db($con,'sessionpractical');

$dname = $_POST['dname'];
$bnum = $_POST['bnum'];
$bname = $_POST['b-name'];
$from = $_POST['from'];
$to = $_POST['to'];
$seats = $_POST['seats'];
$ddate = $_POST['ddate'];
$rdate = $_POST['rdate'];
$dtime = $_POST['dtime'];
$rtime = $_POST['rtime'];
$charge = $_POST['charge'];

$q = " select * from addbus where driver_name = '$dname' && bus_no = '$bnum' && bus_name = '$bname' && departure_place = '$from' && stop_place = '$to' && total_seats = '$seats' && departure_date = '$ddate' && return_date = '$rdate' && departure_time = '$dtime' && return_time = '$rtime' && charge = '$charge' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num > 0){
   $_SESSION['Error'] = "already registered";
}else{
    $_SESSION['status'] = "registered";
    $qy = " insert into addbus(driver_name , bus_no , bus_name , departure_place , stop_place , total_seats , departure_date, return_date , departure_time , return_time, charge) values('$dname' , '$bnum' , '$bname' , '$from' , '$to' , '$seats' , '$ddate' , '$rdate' , '$dtime' , '$rtime' , '$charge')";
    
    mysqli_query($con, $qy);
}


?>