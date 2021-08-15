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
    sem:6 (BE)
    college: dilkap research institute of engineering & management studies
    contact: 9503022165
    email: anjaliramlolarakhpandey.0503@gmail.com-->

<!DOCTYPE html>
<html lang="en">

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

  <div class="container-fluid">
  <!-- login failed message -->
  <?php
                    if(isset($_SESSION['statu'])){
                ?>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                       <strong>Sorry</strong><br><?php echo $_SESSION['statu']; ?>
                    </div>
                </div>
                <?php
                    unset($_SESSION['statu']);
                 }
                ?>

  <!-- register message -->      
  <?php
                    if(isset($_SESSION['status'])){
                ?>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                       <strong>SUCESSFUL</strong><br><?php echo $_SESSION['status']; ?>
                    </div>
                </div>
                <?php
                    unset($_SESSION['status']);
                 }
                ?>  

  <!-- registration failed mesage -->
  <?php
                    if(isset($_SESSION['Error'])){
                ?>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                       <strong>Failed!</strong><br><?php echo $_SESSION['Error']; ?>
                    </div>
                </div>
                <?php
                    unset($_SESSION['Error']);
                 }
                ?>  



    <nav class="navbar navbar-expand-lg navbar-light navv">
      <a class="navbar-brand" href="#"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active btns" href="#" style="color:red" id="btns">Home <span
              class="sr-only">(current)</span></a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active btns mx-4" style="color: red" href="#" id="navbarDropdown"
              role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Our Services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#booking">Search bus</a>
              
              
            </div>
          </li>
          <a class="nav-item nav-link active mx-4 btns" href="#footer" style="color: red">Contact us</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active btns mx-4" style="color: red" href="#" id="navbarDropdown"
              role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Login
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" onclick="document.getElementById('id03').style.display='block'">Login/Sign up</a>
             
            </div>
          </li>



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
              <img src="https://www.dropbox.com/s/1ujmjila9z5ombe/bus1.png?raw=1"
                class="d-block w-100 rounded-lg img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://www.dropbox.com/s/ag6r3cmusfda4f8/bus2.png?raw=1"
                class="d-block w-100 rounded-lg  img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://www.dropbox.com/s/e28rqkmmexik3cu/bus3.png?raw=1"
                class="d-block  w-100 rounded-lg  img-fluid" alt="...">
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
        <img src="https://www.dropbox.com/s/3a380ua4nu0xqk6/rem.png?raw=1" class="img-fluid" alt=""
          data-aos="fade-right" data-aos-anchor-placement="top-center" style="width:500px;">


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
        <div class="card cardd" data-aos="fade-up-right" data-aos-anchor-placement="center-center">
          <div class="card-body ">
            <h3 class="card-title">Why Choose Us</h3>
            <p class="card-text">
              Our team makes sure to give you clean buses on time. all that is important to us is your journey.
            </p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <img src="https://www.dropbox.com/s/6zy8xhd04f8ws42/buss.png?raw=1" class="img-fluid" alt="" data-aos="fade-up"
          width="640px" data-aos-anchor-placement="center-center">
      </div>

    </div>


  </div>



  <!--login-->






  <style>



  </style>

  <div class="container">
    <form  action="searchbus.php" method="post">






      <form>
        <div class="form-row " id="booking">




          <div class="card w-100 carder">
            <br>
            <center>
              <h3>Search Buses</h3>
            </center>
            <hr>
            <div class="card-body ">

              <br>

              <div class="row">
                <div class="col-sm-6">
                  <label class="sr-only" for="from">From</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                          class="bi bi-geo-alt icon mr-3" viewBox="-2 0 16 16">
                          <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                          <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                          class="bi bi-geo-alt icon mr-3" viewBox="-2 0 16 16">
                          <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                          <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                      </div>
                    </div>
                    <input type="text" class="form-control" id="to" placeholder="To" name="to" required>
                  </div>
                </div>

              </div>

              <br>

              <div class="row">

                <div class="col-sm-4 my-1">
                  <label class="sr-only" for="date">date</label>
                  Departure Date
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-arrow-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
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
              <button class="btn btn-outline-dark">Submit</button>
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
    .foot {
      background: rgb(73, 73, 73) fixed;
      width: cover;
      color: white;
    }

    .emaill .mail {
      visibility: hidden;
      z-index: 1;
      display: inline-block;
    }

    .emaill:hover .mail {
      visibility: visible;
      transition: 2s ease-in;
    }




    .whatsapp .numb {
      visibility: hidden;
      z-index: 1;
      display: inline-block;
    }

    .whatsapp:hover .numb {
      visibility: visible;
      transition: 2s ease-in;
    }

    .address .add {
      visibility: hidden;
      z-index: 1;
      display: inline-block;
    }

    .address:hover .add {
      visibility: visible;
      transition: 2s ease-in;
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
          <div class="emaill">
            <p>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope"
                viewBox="0 0 16 16">
                <path
                  d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
              </svg>
              <span class="mail"><a href="mailto:strakgroup5@project.com"
                  style="text-decoration:none; color:white;">strakgroup5@project.com</a></span>
            </p>
          </div>


          <div class="whatsapp">
            <p>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp"
                viewBox="0 0 16 16">
                <path
                  d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
              </svg>
              <span class="numb"><a href="https://api.whatsapp.com/send?phone=1234567890"
                  style="text-decoration:none; color:white;">1234567890</a></span>
            </p>
          </div>


          <div class="address">
            <p>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
              </svg><pre><span class="add"><a href=""style="text-decoration:none; color:white;"> shaitan gali
 khatra mahal
andher nagar
samshan ke saamne

               </a></span>
             </pre>
            </p>
          </div>


          <footer class="blockquote-footer"></footer>
        </blockquote>
      </div>
    </div>
  </div>






 


  <!--login/sing up -->

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
      margin: 8px 0;
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
      padding: 10px;

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
  <div id="id03" class="modal">
  
  <div class="col-lg-6">
    <form class="modal-content animate" action="validation.php" method="post">
      <center>
        <h2>Sign in</h2>
      </center>
      <div class="imgcontainer">
        <span onclick="document.getElementById('id03').style.display='none'" class="close"
          title="Close Modal">&times;</span>
        <img src="https://www.dropbox.com/s/3a380ua4nu0xqk6/rem.png?raw=1" alt="Avatar" class="avatar img-fluid">
      </div>

           
        <label for="user"><b>email</b></label>
        <input type="email" placeholder="Enter email" name="user" required class="form-control">
        <div class="container full">
        <label for="password"><b>password</b></label>
        <input type="password" placeholder="password" name="password" required class="form-control">

        <center>
          <button type="submit" class="btn btn-danger loginn">Sign in</button>

        </center>
      </div>

      <div class="container full">
        <button type="button" onclick="document.getElementById('id01').style.display='none'"
          class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
    </div>
    <div class="col-lg-6">
    <form class="modal-content animate" action="registration.php" method="post">
      <center>
        <h2>Sign up</h2>
      </center>
      <div class="imgcontainer">
        <span onclick="document.getElementById('id03').style.display='none'" class="close"
          title="Close Modal">&times;</span>
        <img src="https://www.dropbox.com/s/3a380ua4nu0xqk6/rem.png?raw=1" alt="Avatar" class="avatar img-fluid">
      </div>

           
        <label for="user"><b>email</b></label>
        <input type="email" placeholder="Enter email" name="user" required class="form-control">
        <div class="container full">
        <label for="password"><b>password</b></label>
        <input type="password" placeholder="password" name="password" required class="form-control">

        <center>
          <button type="submit" class="btn btn-danger loginn">Sign up</button>

        </center>
      </div>

      <div class="container full">
        <button type="button" onclick="document.getElementById('id01').style.display='none'"
          class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
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
      duration: 1000, disable: 'mobile'
    }

    )


    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }



    var modal = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

  </script>
  </body>

</html>