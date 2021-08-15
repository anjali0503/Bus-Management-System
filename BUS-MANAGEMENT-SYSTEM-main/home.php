<?php


session_start();
if(!isset($_SESSION['username'])){
    header('location:main.php');
}


?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
  <style>
       body {


background: linear-gradient(315deg, #fbb034 0%, #ffdd00 74%) fixed;

color: rgb(73, 73, 73);
}

html {
scroll-behavior: smooth
}


.btns {
border: 0px;
font-size: 21px;
text-shadow: 1px 1px 3px orange, 1px 1px 4px orange;
}

.btns:hover {
font-size: 23px;
/* border-top:2px solid white; */
border-bottom: 2px solid red;
animation: odu o.1s ease;
transition: 0.1s ease-in-out;
}

@media (min-width: 800px) and (max-width: 850px) {
.navbar:not(.top-nav-collapse) {
  background: rgba(0, 0, 0, 0.2) !important;
}
}

.view,
body,
html {
height: 100%;
}

.navbar {
background-color: rgba(0, 0, 0, 0.2);
}

.page-footer,
.top-nav-collapse {
background-color: aqua;
}

@media only screen and (max-width: 768px) {
.navbar {
  background-color: rgba(0, 0, 0, 0.2);
}
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
<!-- register message -->      
<?php
                    if(isset($_SESSION['statu'])){
                ?>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                       <strong>SUCESSFUL</strong><br><?php echo $_SESSION['statu']; ?>
                    </div>
                </div>
                <?php
                    unset($_SESSION['statu']);
                 }
                ?> 
<div class="container-fluid">

  <nav class="navbar navbar-expand-lg navbar-light navv">
    <a class="navbar-brand" href="#"> </a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a
          class="nav-item nav-link active btns"
          href="#"
          style="color: white"
          id="btns"
          >Home <span class="sr-only">(current)</span></a
        >
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle active btns mx-4"
            style="color: white"
            href="#"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            Our Services
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#booking">book bus</a>
            
            
          </div>
        </li>
        <a
          class="nav-item nav-link active mx-4 btns"
          href="#footer"
          style="color: white"
          >Contact us</a
        >
        
        <a
          class="nav-item nav-link active mx-4 btns"
          href="main.php"
          style="color: white"
          >LOGOUT</a
        >
      </div>
    </div>
  </nav>

  <div class="row">
    <p class="title p">Sri Kalabhairava Travels</p>
  </div>

  <!--cards-->
  <div class="row">
  <div class="col-sm-6">
  <div class="card  cardd" data-aos="fade-up-right">
    <div class="card-body">
      <h3 class="card-title">Our Services</h3>
      <p class="card-text">
        Our services provide you unlimited vehicles with clean and hygenic
        surroundings in way better price! we also make sure you reach your
        destiny on time happily with your hands and legs broken
      </p>
    </div>
  </div>
  </div>



  <div class="col-sm-6 h-25">
  <div id="carouselExampleIndicators" class="carousel slide car" data-ride="carousel">
  <ol class="carousel-indicators ">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.dropbox.com/s/1ujmjila9z5ombe/bus1.png?raw=1" class="d-block w-100 rounded-lg img-fluid" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.dropbox.com/s/ag6r3cmusfda4f8/bus2.png?raw=1" class="d-block w-100 rounded-lg  img-fluid" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.dropbox.com/s/e28rqkmmexik3cu/bus3.png?raw=1" class="d-block  w-100 rounded-lg  img-fluid" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
  </div>

 <br><br>


<div class="row justify-content-end">
  
<br>
<div class="col-sm-6">
<img src="https://www.dropbox.com/s/3a380ua4nu0xqk6/rem.png?raw=1" class="img-fluid" alt="" data-aos="fade-right" data-aos-anchor-placement="top-center">

  
</div>

  <div class="col-sm-6">
  <div class="card cardd" data-aos="fade-up-left" data-aos-anchor-placement="top-center">
    <div class="card-body ">
      <h3 class="card-title">Our Aim</h3>
      <p class="card-text">
        Our Aim is to provide you unlimited vehicles with clean and hygenic
        surroundings in way better price! we also make sure you reach your
        destiny on time happily with your hands and legs broken
      </p>
    </div>
  </div>
</div>



</div>


 <br>
 <br><br>
<div class="row">
 
<div class="col-sm-8">
<div class="card cardd" data-aos="fade-up-left" data-aos-anchor-placement="center-center">
    <div class="card-body ">
      <h3 class="card-title">Why Choose Us</h3>
      <p class="card-text">
        Our team makes sure to give you clean buses on time. all that is important to us is your journey.
      </p>
    </div>
  </div>
</div>

<div class="col-sm-4">
    <img src="https://www.dropbox.com/s/6zy8xhd04f8ws42/buss.png?raw=1" class="img-fluid" alt="" data-aos="fade-left" width="640px" data-aos-anchor-placement="center-center">
  </div>

</div>


</div>


<!--login-->



  
 

  
  <div class="container">
  <form action="book.php" method="post">
  
  
  
    
  
  
  <form>
    <div class="form-row " id="booking">
  
  
  
  
    <div class="card w-100 carder" >
    <br>
     <center> <h3>Book bus</h3></center>
     <hr>
        <div class="card-body ">
          
        <br>
  
        <div class="row">
        <div class="col-sm-6">
      <label class="sr-only" for="from">From</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt icon mr-3" viewBox="-2 0 16 16">
        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
      </svg> 
            </div>
          </div>
          <input type="text" class="form-control" id="from" placeholder="From" name="from" required>
        </div>
      </div>
  
  
  
      <div class="col-sm-6">
        <label class="sr-only" for="to">to</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt icon mr-3" viewBox="-2 0 16 16">
        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
      </svg>
            </div>
          </div>
          <input type="text" class="form-control" id="to" placeholder="To" name="to" required>
        </div>
      </div>
    
        </div>
        
        <br>
  
      <div class="row">
    
      <div class="col-sm-6 my-1">
        <label class="sr-only" for="date">date</label>
        Departure Date
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
  </svg>
            </div>
          </div>
          <input type="date" class="form-control" id="inlineFormInputGroupUsername" placeholder="date" name="ddate" required>
        </div>
      </div>
  
      <div class="col-sm-2"></div>
  
      
      </div>
      </div>
      <br><br><br>
  
      <center>
    <button class="btn btn-outline-dark" name="submit">BOOK</button>
    </center>
    <br><br>
        </div>
      </div>
  
  
  
  
  
      
  </form>
  
  
  
  
  </div>
  
  
   
  
    <br>
   
  </form>
  </div>
  
  
  
  
  
  
  
  
  
  <br><br><br><br><br>
<!--footer-->
<style>
    .foot{
      background:rgb(73, 73, 73) fixed;
  width:cover;
  color:white ;
    }
  </style>
  <div class="container-fluid">
  <div class="card sticky-bottom foot " id="footer">
  
  <div class="card-header">
    <center>
      <p>
      designed and developed by Stark G5
      </p>
    </center>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>contact us at: <br>
  email: <a href="mailto:G5@example.com" style="text-decoration:none; color:white;">G5@gmail.com</a></p>
    
      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
  </div>
  </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script>

    AOS.init({
  duration: 1000,disable: 'mobile'}
  
  )

    </script>
</body>
</html>