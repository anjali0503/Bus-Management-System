<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
       body {


background: linear-gradient(315deg, #fbb034 0%, #ffdd00 74%) fixed;

color: rgb(73, 73, 73);
}
table{
            margin-top: 5%;
            border: 3px solid black;
            width: fit-content;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: center;
        }
        th{
            padding: 10px;
            border: 3px solid black;
            background-color: #588e7e;
            color: white;
        }
        tr{
            padding: 10px;
            border: 3px solid black;
            background-color: #f2f2f2;
        }
        td{
            padding: 10px;
            border: 3px solid black;
            color: black;
        }
        button{
            background-color: #588e7e;
            margin-top: 0%;
            width: 80px;
            height:50px;
            font-size: 20px;
            display: block;
        }
        button:hover{
            background-color: white;
        }
        #submit{
            float: left;
            width: 100px;
            
        }
        fieldset{
            background-color: white;
            width: fit-content;
            position: relative;
            top: 50px;
            padding: 30px;
            border-radius: 20px;
        }

    </style>
</head>
<body><center>
<h1>Your search RESULT</h1>
<form action="adminpage.php" method="POST">
        <button type="submit"  id="submit">BACK</button>
</form>
<table>
      <tr> 
          <th>Bus no</th>
          <th>from</th> 
          <th>to</th> 
          <th>departure date</th> 
          <th>departure time</th> 
          <th>arrival date</th> 
          <th>arrival time</th> 
          <th>Charge</th> 
        </tr>

        <?php

$con = mysqli_connect('localhost','root','');


mysqli_select_db($con,'sessionpractical');

$from=$_POST['from'];
$to=$_POST['to'];
$ddate=$_POST['ddate'];


$q = "select BusNo,DeparturePlace, ArrivalPlace,DepartureDate, DepartureTime, ArrivalDate, ArrivalTime, charge from assignbus where DeparturePlace='$from' && ArrivalPlace='$to' && DepartureDate='$ddate' ";

$result = mysqli_query($con,$q);

if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>".$row["BusNo"]."</td><td>".$row["DeparturePlace"]."</td><td>".$row["ArrivalPlace"]."</td><td>".$row["DepartureDate"]."</td><td>".$row["DepartureTime"]."</td><td>".$row["ArrivalDate"]."</td><td>".$row["ArrivalTime"]."</td><td>".$row["charge"]."</td></tr>";
    }
    echo "</table>";
}
else{
    echo "not available";
}

$con->close();

?>
</table>

<fieldset>
<form action="index.php" method="post">
<h2>Please enter the details of the bus</h2>
<p><strong>NOTE: Book Bus By paying to the mobile number which is visible in the payment UTR no(9945948108 / 7019370603). after done enter the UTR no in the Payment UTR no</strong></p>
<div class="row">
    <div class="col-sm-6">
    <label>Name:</label>
    <input type="text" name="name" required>
    </div>
    <div class="col-sm-6">
    <label>email:</label>
    <input type="email" name="email" required>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
    <label>From:</label>
    <input type="text" name="source" required>
    </div>
    <div class="col-sm-6">
    <label>To:</label>
    <input type="text" name="destination" required>
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-6">
    <label>Payment UTR no:</label>
    <input type="text" name="utr" placeholder="9945948108/7019370603" required>
    </div>
    <div class="col-sm-6">
    <label>Bus no:</label>
    <input type="text" name="bno" required>
    </div>
</div><br>
<div class="row">
    <div class="col-sm-6">
        <label>Depart Date:</label>
        <input type="date" name="ddate" required>
    </div>
    <div class="col-sm-6">
        <label>payment done amount:</label>
        <input type="text" name="charge" required>
    </div>
<div>
<br>
<button type="submit">submit</button>
</form>
</fieldset>
</center>
</body>
</html>