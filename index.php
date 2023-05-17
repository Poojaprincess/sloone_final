
<?php

require_once "conn.php";

try {
    
   if(isset($_POST['submit'])){


    $firstname = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $msg = $_POST['msg'];

  

    $insert = $conn->prepare("INSERT INTO BeautyCare.appo (cName, email, phNo, Adate, Atime, message) VALUES (:cName, :email, :phNo, :Adate, :Atime, :message)");
    
    $insert->execute([
        ':cName' => $firstname,
        ':email' => $email,
        ':phNo' => $mobile,
        ':Adate' => $date,
        ':Atime' => $time,
        ':message' => $msg


    ]);
    
   }

} catch (PDOException $e) {
   echo $e->getMessage();
}
   

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Slone</title>
    <!-- bootstrap -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- loader  -->

  

    <!-- favicon -->

    <link rel="icon" href="favicon_io (1)/favicon.ico">

    <!-- css -->
    <link rel="stylesheet" href="css/index.css">
</head>
<style>

body{
    color: aliceblue;
    height: 100vh;
    background-image: url("images/delicate-viola-leaves.jpg");
    background-color: rgb(11, 10, 3);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  
}</style>
<body>

<!-- preloader -->

<script src="https://soploader.sh20raj.repl.co/sl.js?id=UGVlhCH&t=2"></script>
  
  

    <!-- navbar -->

    <?php include("includes/header.php") ?>

        <!-- middle section -->

        <div class="row" style="margin-top: 5%; margin-bottom: 10%;">
            <div class="col-lg-6">
                <div class="">
                    <h1 class="big-heading">Soundarya Beauty Care </h1>

                </div>
                <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                    survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                    containing Lorem Ipsum passages, and more recently with desktop publishing software like
                    Aldus PageMaker including versions of Lorem Ipsu
                </p>
            </div>
            <div class="col-lg-6">
                <div>
                    <img class="title-image" style="float:right" src="images/bg9.jpg" alt="">
                </div>

            </div>
        </div>
    </div>
    </div>


    <!-- content -->

    
    <div class="about-cont">
        <h1>Make An Appointment</h1>
        <div class="row">
          
        <div class="innerCont" style="z-index: 1; margin-top: 10%; margin-left: 2%;">



            <!-- appointment -->
           

            <form action="appo.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone number:</label>
                    <input type="tel" name="mobile" class="form-control" id="phone" placeholder="Enter your phone number" required>
                </div>
                <div class="form-group">
                    <label for="date">Appointment date:</label>
                    <input type="date" name="date" class="form-control" id="date" required>
                </div>
                <div class="form-group">
                    <label for="time">Appointment time:</label>
                    <input type="time" name="time" class="form-control" id="time" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" name="msg" id="message" rows="3" placeholder="Enter your message"></textarea>
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Send">
            </form>

        </div>

        <div style=" position: absolute; left: 40%;">

            <img src="images/element5-digital-8FXAJ1Qzhho-unsplash.jpg" style="width: 97%; border: 2px inset #fff; padding: 30px;" alt="">
<?php

?>
        </div>
    </div>
    </div>


    
    


    <!-- footer -->

    <?php include("includes/footer.php") ?>
    <script>
        'use strict'
        var myNav = document.getElementById('ftco-navbar');
        window.onscroll = function () {
            if (document.body.scrollTop >= 200) {
                myNav.classList.add("nav-colored");
                myNav.classList.remove("nav-transparent");
            }
            else {
                myNav.classList.add("nav-transparent");
                myNav.classList.remove("nav-colored");
            }
        };
    </script>



</body>

</html>