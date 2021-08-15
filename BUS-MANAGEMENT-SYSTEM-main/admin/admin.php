<?php
session_start();

?>

<!-- PROJECT: BUS MANAGEMENT SYSTEM (SRI KALABHAIRAVA TRAVELS)
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
    email: anjaliramlolarakhpandey.0503@gmail.com-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus management & system | Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    
    <style>
        body{
            background-image: linear-gradient(to left, #fffd00, #ffcc00, #ff9a00, #fd6300, #eb1212);
        }

.box{
    /* position: absolute;
    top: 4%;
    left: 25vw;
   
    
    
    height: fit-content;
     */
     width: fit-content;
     margin-top: 10vh;
    padding: 8vh 10vw;
    border-radius: 1vh;
    background-image: linear-gradient(to right bottom, #fffd00, #ffcc00, #ff9a00, #fd6300, #eb1212);
        box-shadow: 5px 5px 19px black;
}
.input{
    width: 30vw;
    margin: auto;
}

@media only screen 
   and (min-width : 320px) {
   .input{width: 50vw;}
   }
.lab{
    position: absolute;
    left:25vw;
    margin: auto;
    
}
button{
    width:fit-content;
    height: 6vh;

}

h1{
    margin-top: 5%;
    font-family: Georgia, 'Times New Roman', Times, serif;
}


    </style>
</head>
<body>

<!-- login failure message -->
    <?php
                    if(isset($_SESSION['status'])){
                ?>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                       <strong>Sorry</strong><br><?php echo $_SESSION['status']; ?>
                    </div>
                </div>
                <?php
                    unset($_SESSION['status']);
                 }
                ?>
<center><h1>Sri Kalabhairava Travels Bus Management System</h1></center>
    
    <div class="container-fluid">
        <form action="adminloginvalidation.php" method="POST">
            <center>
                <div class="container box">
                    <label><b class="lab"> USERNAME</b></label><br><br>
                    <input type="text" placeholder="Enter Username" name="user" id="user" class="form-control input"><br>
              
                     <label><b class="lab">PASSWORD</b></label><br> <br>
                    <input type="password" placeholder="Enter Password" name="password" id="psw" class="form-control input"><br>
                    <br>
                    <button type="submit" class="btn btn-outline-dark" id="login">Login</button>                  
                </div> 
            </center>   
        </form>
        
    </div>
    
</body>
</html>