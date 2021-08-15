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
            
            border: 3px solid black;
            background-color: #588e7e;
            color: white;
            padding: 10px;
        }
        tr{
            padding: 10px;
            border: 3px solid black;
            background-color: #f2f2f2;
        }
        td{
            border: 3px solid black;
            color: black;
            padding: 10px;
        }
        button{
            margin-top: 0%;
            float: left;
            width: 80px;
            height:50px;
            font-size: 20px;
        }

    </style>
</head>
<body><center>
<h1>Your search RESULT</h1>
<form action="main.php" method="POST">
        <button type="submit">BACK</button>
</form>
<table>
      <tr> 
          <th>from</th>
          <th>to</th> 
          <th>departure date</th> 
          <th>departure time</th> 
          <th>arrival date</th> 
          <th>arrival time</th> 
          <th>Charge per seat</th>
        </tr>

        <?php

$con = mysqli_connect('localhost','root','');


mysqli_select_db($con,'sessionpractical');

$from=$_POST['from'];
$to=$_POST['to'];
$ddate=$_POST['ddate'];


$q = "select DeparturePlace, ArrivalPlace,DepartureDate, DepartureTime, ArrivalDate, ArrivalTime, charge from assignbus where DeparturePlace='$from' && ArrivalPlace='$to' && DepartureDate='$ddate' ";

$result = mysqli_query($con,$q);

if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>".$row["DeparturePlace"]."</td><td>".$row["ArrivalPlace"]."</td><td>".$row["DepartureDate"]."</td><td>".$row["DepartureTime"]."</td><td>".$row["ArrivalDate"]."</td><td>".$row["ArrivalTime"]."</td><td>".$row["charge"]."</td></tr>";
    }
    echo "</table>";
}
else{
    echo "not available";
}

$con->close();

?>

</table>
</center>
</body>
</html>