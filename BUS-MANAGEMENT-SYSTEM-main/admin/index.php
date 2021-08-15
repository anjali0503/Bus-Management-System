



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ticket</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <meta name="viewport" content="width = device-width,initial-scale=1.0">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display");
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins",sans-serif;
}
body{
   

    justify-content: center;
    align-items: center;
    padding: 10px;
    background: #D287FF;
background: -webkit-linear-gradient(top left, #D287FF, #5DD5F9);
background: -moz-linear-gradient(top left, #D287FF, #5DD5F9);
background: linear-gradient(to bottom right, #D287FF, #5DD5F9);
background-attachment:fixed;
}
.main{
    max-width: 700px;
    width: 100%;
    background: #fff;
    padding: 10px 30px;
    border-radius: 5px;
    margin-top:-20px;
    
}
.main .title{
    font-size: 30px;
    font-weight: 600;
    position: relative;
}
.main .title::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 4px;
    width: 30px;
    background: linear-gradient(135deg, #71b7e6,#9b59b6);
}



.butn{
    height: 45px;
    margin: 45px 0;
}
.butn input{
    height: 100%;
    width: 100%;
    outline: none;
    color: #fff;
    border: none;
    font-size: 20px;
    font-weight: 500;
    border-radius: 5px;
    letter-spacing: 2px;
    background:linear-gradient(135deg, #71b7e6,#9b59b6);
} 
.butn:hover{
    background:linear-gradient(-135deg, #71b7e6,#9b59b6);
}
@media (max-width: 584px){
    .main{
        max-width: 100%;
    }
    form .user-details .input-box{
        margin-bottom :15px; ;
        width: 100%;
    }
    form .gender-details .category{
        width: 100%;
    }
    .main form .user-details{
        max-height: 300px;
        overflow-y: scroll;
    }
    .user-details::-webkit-scrollbar{
        width: 0;
    }
    
}
.back{
    background:linear-gradient(135deg, #71b7e6,#9b59b6);

            background-color: #588e7e;
            width: fit-content;
            height:50px;
            font-size: 20px;
            display: block;
            color:white;
        }
        a{
            text-decoration-style:none;
            color:black;
        }
        a:hover{
            text-decoration-style:none;
            color:black;
        }
#download{
    padding: 10px;
    position: relative;
}
    </style>
    </head>
<body>

<div class="row">
<button type="submit" class="btn back sticky-top"> <a href="adminpage.php">go to admin page</a></button>
</div>

<br>
    <div class="container main"  id="invoice">
        
        <div class="title">Sri Kalabhairava Travels</div>
        
        
            <div class="user-details">
                <div class="input-box">
                    <span class="details"><b>Passenger Name :</b></span> <?php echo $_POST['name']; ?>
                </div>
                <br>
                <div class="input-box">
                    <span class="details"><b>email:</b></span> <?php echo $_POST['email']; ?>
                </div>
                <br>
                <div class="input-box">
                    <span class="details"><b>Bus Number :</b></span> <?php echo $_POST['bno']; ?>
                    
                </div>
                <br>
                <div class="input-box">
                    <span class="details"><b>Source:</b></span> <?php echo $_POST['source']; ?>
                </div>
                <br>
                <div class="input-box">
                    <span class="details"><b>Payment UTR no: </b></span> <?php echo $_POST['utr']; ?>
                </div>
                <br>
                <div class="input-box">
                    <span class="details"><b>Destination : </b></span> <?php echo $_POST['destination']; ?>
                </div>
                <br>
                <div class="input-box">
                    <span class="details"><b>Date of Departure: </b></span> <?php echo $_POST['ddate']; ?>
                </div>
                <br>
                <div class="input-box">
                    <span class="details"><b>CHARGE: </b></span> <?php echo $_POST['charge']; ?>
                </div>
                <br>
                <div class="input-box">
                    <span class="details"><b>Payment STATUS:</b> Driver will verify your payment using utr number. If your payment not done your seat will be cancelled</span>
                </div>
                <div class="button butn">
                <input type="submit" id="download" value="Download Ticket">
            </div>
            </div>        
    </div>
    
    <script>
        window.onload = function(){
            document.getElementById("download")
            .addEventListener("click",()=>{
                const invoice = this.document.getElementById("invoice");
                console.log(invoice);
                console.log(window);
                html2pdf().from(invoice).save();
            })
        }
    </script>
    <script
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"
  ></script>
</body>

</html>