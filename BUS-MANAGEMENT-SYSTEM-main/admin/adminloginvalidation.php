<?php

session_start();

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

$con = mysqli_connect('localhost','root','');
if($con){
    echo "connection sucessful";
}else{
    echo "no connection";
}

mysqli_select_db($con,'sessionpractical');

$name = $_POST['user'];
$pass = $_POST['password'];


$q = " select * from admin where name = '$name' && password = '$pass' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
    header('location:adminpage.php');
    
}else{
    $_SESSION['status'] = "not an admin";
    header('location:admin.php');
   
}

?>