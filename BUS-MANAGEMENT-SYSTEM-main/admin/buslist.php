<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri KBT Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
  body{

background: linear-gradient(-45deg, #FF5B01, #FCFF01);
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;
  }
  .nav{
    background-color: transparent;
  }
  .side{
    background-color: transparent;
  }
  .side:hover{
    background-color: transparent;
    text-decoration: none;
    font-size: 20px;
    color: black;
  }
  .sidee{
    background-color: transparent;
  }
  .sin{
    position: absolute;
    top: -10px;
  }
 
 h1{
   font-family: Comic Sans MS, Comic Sans, cursive;
 }

 table{
            
            border: 3px solid black;
            width: 50%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: center;
            margin-left: 25%;
        }
        th{
            
            border: 3px solid black;
            background-color: #588e7e;
            color: white;
        }
        tr{
            
            border: 3px solid black;
            background-color: #f2f2f2;
        }
        td{
            border: 3px solid black;
            color: black;
        }


 .title {
      color: red;
      font-family: Garamond;
      padding: 20px;
      margin-left: 20px;
      text-shadow: 2px 2px 3px orange, 1px 1px 4px black;
    }

    @media screen and (min-width: 601px) {
      p.title {
        font-size: 5vw;
      }
    }

    @media screen and (max-width: 600px) {
      p.title {
        font-size: 7vw;
      }
    }



    .cardd {
      background-color: transparent;
      border: 0px;
      width: 40vw;
      text-align: center;
      font-size: 20px;
    }


    @media only screen and (max-width: 1000px) {
      .cardd {
        width: 100vw;
      }
    }



    
</style>
<body>
<?php
                    if(isset($_SESSION['username'])){
                ?>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                       <strong>welcome</strong><br><?php echo $_SESSION['username']; ?>
                    </div>
                </div>
                <?php
                    unset($_SESSION['username']);
                 }
                ?>


  <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none;background-image: linear-gradient(to right top, #ff0000, #ff5b00, #ff8700, #ffad00, #ffd000);" id="mySidebar">
    <button onclick="w3_close()" class="w3-bar-item w3-large side">Close &times;</button> <hr>
    <a href="#" class="w3-bar-item  side">Dashboard</a>
    <a href="#" class="w3-bar-item  side" onclick="document.getElementById('assign_bus').style.display='block'">Assign bus</a>
    <a href="#" class="w3-bar-item  side" onclick="document.getElementById('add_bus').style.display='block'">Add Bus</a>
    <a href="driver.php" class="w3-bar-item  side" >Add Driver</a>
    <a href="driverlist.php" class="w3-bar-item  side">Driver List</a>
    <a href="buslist.php" class="w3-bar-item  side">Bus List</a>
    <a href="booking.php" class="w3-bar-item  side">Book Bus</a>
    <a href="idcard.php" class="w3-bar-item  side">ID card</a>
    
  </div>
  
  <!-- Page Content -->
  <div class="nav">
    <button class="btn  w3-xlarge ico" onclick="w3_open()">☰</button>

    <div class="btn-group dropleft justify-content-end" style="position: absolute;right: 10px;">
    <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg> 
    </button>
    <div class="dropdown-menu sidee">
      <!-- Dropdown menu links -->
          <a class="dropdown-item" href="logout.php">Log Out</a>
          <a class="dropdown-item" href="#">Change Password</a>
    </div>
  </div>
  </div>
  

    <br>
    
<!-- buslist code-->

    <table>
      <tr>
          <th>id</th>
          <th>bus_no</th>  
          <th>total_seats</th> 
          <th>AddedOn</th> 
        </tr>

        <?php

$con = mysqli_connect('localhost','root','');


mysqli_select_db($con,'sessionpractical');

$q = "select id, bus_no, total_seats, AddedOn from addbus";

$result = mysqli_query($con,$q);

if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["id"] ."</td><td>".$row["bus_no"]."</td><td>".$row["total_seats"]."</td><td>".$row["AddedOn"]."</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 results";
}

$con->close();

?>

</table>
  
  
  
  <!-- ended -->


  
  
  
  
  
   <!-- assign bus -->
   <style>
   * Full-width input fields */ input[type=text],
    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;

    }


    .loginn {
      background-color: #04AA6D;
      color: white;
     
      border: none;
      cursor: pointer;
      width: fit-content;
    }

    .loginn:hover {
      opacity: 0.8;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }

    img.avatar {
      width: 30%;

    }

    .full {
      margin:auto;

    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.4);
      padding-top: 60px;
    }

    .modal-content {
      background: linear-gradient(315deg, #fbb034 0%, #ffdd00 74%) fixed;
      margin: 1% auto 5% auto;
      border: 1px solid #888;
      box-shadow: 4px 4px 20px black;
      width: 70vw;
    }

    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {
        -webkit-transform: scale(0)
      }

      to {
        -webkit-transform: scale(1)
      }
    }

    @keyframes animatezoom {
      from {
        transform: scale(0)
      }

      to {
        transform: scale(1)
      }
    }

    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }

      .cancelbtn {
        width: 100%;
      }
    }

    
  </style>
  <div id="assign_bus" class="modal">
    <form class="modal-content animate" action="abvalidation.php" method="post">
      <center>
        <h2>Assign Bus</h2>
      </center>

      <div class="imgcontainer">
        <span onclick="document.getElementById('assign_bus').style.display='none'" class="close"
          title="Close Modal">&times;</span>
        <img src="https://www.dropbox.com/s/3a380ua4nu0xqk6/rem.png?raw=1" alt="" class="avatar img-fluid">
      </div>

      <div class="container full">
        <label for="driver_name"><b>Driver Name</b></label>
        <input type="text" placeholder="Enter Username" name="driver_name" required class="form-control">
      <br>
        <div class="row">
          <div class="col-sm">
            <label for="bus_no"><b>Bus number</b></label>
            <input type="text" name="bus_no" id="bus_no" placeholder="Enter Bus Number" required class="form-control">
          </div>
          <br>
          <div class="col-sm">
            <label for="total_seats"><b>Total Number Of Seats</b></label>
            <input type="text" name="total_seats" id="total_seats" placeholder="Enter total number of seats" required class="form-control">
          </div>
        </div>
    <br>

      <div class="row">
        <div class="col-sm">
          <label for="departure_place"><b>Departure Place</b></label>
          <input type="text" name="d_place" id="departure_place" placeholder="Departure Place" required class="form-control">
        </div>
        <div class="col-sm">
          <label for="stop_place"><b>Stop Place</b></label>
          <input type="text" name="s_place" id="stop_place" placeholder="Stop Place" required class="form-control">
        </div>
      </div>


      <br>

<div class="row">
  <div class="col-sm">
    <label for="departure_date"><b>Departure Date</b></label>
    <input type="date" name="d_date" id="departure_date" placeholder="Departure date" required class="form-control">
  </div>
  <div class="col-sm">
    <label for="arrival_date"><b>Arrival Date</b></label>
    <input type="date" name="a_date" id="arrival_date" placeholder="Arrival date" required class="form-control">
  </div>
</div>

      <br>

      <div class="row">
        <div class="col-sm">
          <label for="departure_time"><b>Departure Time</b></label>
          <input type="time" name="d_time" id="departure_time" placeholder="Departure Time" required class="form-control">
        </div>
        <div class="col-sm">
          <label for="arrival_time"><b>Arrival Time</b></label>
          <input type="time" name="a_time" id="arrival_time" placeholder="Arrival Time" required class="form-control">
        </div>
        <div class="col-sm">
          <label for="charge"><b>Charge</b></label>
          <input type="text" name="charge" id="arrival_time" placeholder="charge per seat" required class="form-control">
        </div>
      </div>
      <br>
        <br>
        <div class="row">
        
        <button type="submit" class="btn btn-danger loginn mx-auto ">Submit</button>
        </div>
                 
        
      </div>
      <br> <br>
    </form>
  </div>
</div>


<style>
  * Full-width input fields */ input[type=text],
    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;

    }


    .loginn {
      background-color: #04AA6D;
      color: white;
     
      border: none;
      cursor: pointer;
      width: fit-content;
    }

    .loginn:hover {
      opacity: 0.8;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }

    img.avatar {
      width: 30%;

    }

    .full {
      margin:auto;

    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.4);
      padding-top: 60px;
    }

    .modal-content {
      background: linear-gradient(315deg, #fbb034 0%, #ffdd00 74%) fixed;
      margin: 1% auto 5% auto;
      border: 1px solid #888;
      box-shadow: 4px 4px 20px black;
      width: 70vw;
    }

    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {
        -webkit-transform: scale(0)
      }

      to {
        -webkit-transform: scale(1)
      }
    }

    @keyframes animatezoom {
      from {
        transform: scale(0)
      }

      to {
        transform: scale(1)
      }
    }

    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }

      .cancelbtn {
        width: 100%;
      }
    }
</style>

<!--Add bus-->
<div id="add_bus" class="modal">
    <form class="modal-content animate" action="addbusregistration.php" method="post">
      <center>
        <h2>Add Bus</h2>
      </center>

      <div class="imgcontainer">
        <span onclick="document.getElementById('add_bus').style.display='none'" class="close"
          title="Close Modal">&times;</span>
        <img src="https://www.dropbox.com/s/3a380ua4nu0xqk6/rem.png?raw=1" alt="" class="avatar img-fluid">
      </div>

      <div class="container full">
       
      <br>
        <div class="row">
          <div class="col-sm">
            <label for="bus_no"><b>Bus number</b></label>
            <input type="text" name="bus_no" id="bus_no" placeholder="Enter Bus Number" required class="form-control">
          </div>
          <br>
          <div class="col-sm">
            <label for="total_seats"><b>Total Number Of Seats</b></label>
            <input type="text" name="total_seats" id="total_seats" placeholder="Enter total number of seats" required class="form-control">
          </div>
        </div>
        <br>
        <div class="row mx-auto">
         <div class="col-sm"></div>
        <div class="col-sm">
        <label for="added_on"><b>Added On</b></label>
        <input type="date" name="added_on" id="added_on" required class="form-control">
        </div>
      
        <div class="col-sm"></div>

    <br>
    <br><br>
        
      </div> <br><br>
     <center> <button type="submit" class="btn btn-danger loginn mx-auto ">Submit</button></center>
      <br>
        <br>
    </form>
  </div>


      
      <script>
      function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
      }
      
      function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
      }

      var modal = document.getElementById('assign_bus');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }


    var modal = document.getElementById('add_bus');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
    

        </script>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>