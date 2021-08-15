<?php

/*PROJECT: BUS MANAGEMENT SYSTEM (SRI KALABHAIRAVA TRAVELS)
    name: DHARANI K
    sem: 6 (BE)
    college: MVJ college of engineering
    contact: 9945948108
    email: dharanikenchu@gmail.com
    
    
    name: BHAVANA
    class:10th
    school: sainik school, bijapur
    contact: 7019370603
    email: bhavanash5475@gmail.com
    
    
    name: ANJALI
    sem:6 (
    college: dilkap research institute of engineering & management studies
    contact: 9503022165
    email: anjaliramlolarakhpandey.0503@gmail.com*/
    
session_start();
header('location:adminpage.php');


$con = mysqli_connect('localhost','root','');


mysqli_select_db($con,'sessionpractical');

$dname = $_POST['driver_name'];
$regno = $_POST['regno'];
$bnum = $_POST['bus_no'];
$seats = $_POST['total_seats'];
$dplace = $_POST['d_place'];
$aplace = $_POST['s_place'];
$ddate = $_POST['d_date'];
$adate = $_POST['a_date'];
$dtime = $_POST['d_time'];
$atime = $_POST['a_time'];
$charge = $_POST['charge'];

$q = " select * from assignbus where DriverName = '$dname' && RegNo = '$regno' && BusNo = '$bnum' && TotalSeats ='$seats' && DeparturePlace = '$dplace' && ArrivalPlace = '$aplace' && DepartureDate = '$ddate' ArrivalDate = '$adate' && DepartureTime = '$dtime' && ArrivalTime = '$atime' && charge = '$charge' ";


    $_SESSION['status'] = "bus assigned";
    $qy = " insert into assignbus(DriverName , RegNo , BusNo , 	TotalSeats , DeparturePlace , ArrivalPlace , DepartureDate , ArrivalDate , DepartureTime , ArrivalTime, charge ) values('$dname' , '$regno' , '$bnum' , '$seats' , '$dplace' , '$aplace' , '$ddate' , '$adate' , '$dtime' , '$atime' , '$charge' )";
    mysqli_query($con, $qy);
    
?>
    

