<?php

/* PROJECT: BUS MANAGEMENT SYSTEM (SRI KALABHAIRAVA TRAVELS)
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

$bus_no = $_POST['bus_no'];
$total_seats = $_POST['total_seats'];
$added_on = $_POST['added_on'];




$q = " select * from addbus where bus_no = '$bus_no' && total_seats = '$total_seats' && AddedOn = '$added_on' ";


    $_SESSION['status'] = "bus added to bus list";
    $qy = " insert into addbus(bus_no , total_seats , AddedOn  ) values('$bus_no' , '$total_seats' , '$added_on' )";
    mysqli_query($con, $qy);
    
?>