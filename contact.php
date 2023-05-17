

<?php 
  
  require_once "conn.php";

  try {
    


    if(isset($_POST['submit'])){
       
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $mobile = $_POST['mobileNo'];
        $message = $_POST['message'];
    
       
        $insert = $conn->prepare("INSERT INTO BeautyCare.info (firstName, lastName, email, mobileNo, message) VALUES (:firstName, :lastName, :email, :mobileNo, :message)");
       
        $insert->execute(array(
            
          ':firstName' => $firstName,
          ':lastName' => $lastName,
          ':email' => $email,
          ':mobileNo' => $mobile,
          ':message' => $message
           
          
    
        ));
        echo "hey!!!!!SSSSSS";
    
        echo "Inserted!";
    
      }


    
  } catch (PDOException $e) {
   echo $e->getMessage();
  }
 

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beauty Slone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- favicon -->
    <link rel="icon" href="favicon_io (1)/favicon.ico">

    <!-- css -->
    <link rel="stylesheet" href="css/contact.css">
</head>
<style>body{
    height: 100vh;
    background-image: url("images/pink.jpg");
    background-color: rgb(22, 17, 3);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
 
}
</style>

<body>
    <!-- preloader -->

<script src="https://soploader.sh20raj.repl.co/sl.js?id=UGVlhCH&t=2"></script>

    <!-- navbar -->

    <?php include("includes/header.php") ?>

        <!-- middle section -->
        <div class="row " style="font-size: 100%; color: beige; ">

            <div class="col-lg-6">
                <img class="title-image" src="images/anna.jpg" alt="">
            </div>
            <div class="col-lg-6" style="margin-top: 28%; padding-left:15%;">
                <h2 class="mb-0 bread" style="font-size: 300%; font-weight: 900">Contact Us</h2>
                <!-- <p class=""><span class="mr-2"><a href="index.php" >Home ><i class=""></i></a></span> <span>About ><i class=""></i></span></p> -->
                <p><a href="index.html" style="color: beige">home ></a> <a href="about.php" style="color: beige">contact
                        ></a></p>
            </div>
        </div>

    </div>


    <!-- content -->

    <div class="about-cont">
        <div class="contactUs">
            <div class="title">
                <h2>Get in touch</h2>
            </div>
            <div class="box">
                <div class="contact form">
                    <h3>send a Message</h3>
                    <form action="contact.php" method="post">
                        <div class="formBox">
                            <div class="row50">
                                <div class="inputBox">
                                    <span>First name</span>
                                    <input type="text" name="firstName" placeholder="">
                                </div>
                                <div class="inputBox">
                                    <span>Last name</span>
                                    <input type="text" name="lastName" placeholder="">
                                </div>
                            </div>

                            <div class="row50">
                                <div class="inputBox">
                                    <span>Email</span>
                                    <input type="text" name="email" placeholder="">
                                </div>
                                <div class="inputBox">
                                    <span>mobile</span>
                                    <input type="text" name="mobileNo" placeholder="">
                                </div>
                            </div>

                            <div class="row50">
                                <div class="inputBox">
                                    <span>Message</span>
                                    <textarea name="message" placeholder="write your message here..."></textarea>
                                </div>
                            </div>

                            <div class="row50">
                                <div class="inputBox">

                                    <input type="submit" name="submit" value="Send">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="contact info">
                    <h3>Contact Info</h3>
                    <div class="infoBox">
                        <div>
                            <span>
                                <ion-icon name="pin"></ion-icon>
                            </span>
                            <p>1/1 B plot no 8 sarkar chowk, airport road, ujalaiwadi, kolhapur, Maharashtra
                                416003</p>
                        </div>
                        <div>
                            <span>
                                <ion-icon name="mail"></ion-icon>
                            </span>
                            <a href="mailto: exhjkd@gmail.com">exhjkd@gmail.com</a>
                        </div>
                        <div>
                            <span>
                                <ion-icon name="call"></ion-icon>
                            </span>
                            <a href="telto:96876876876">96876876876</a>
                        </div>
                        <ul class="sci">
                            <li><a href="">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a></li>
                            <li><a href="">
                                    <ion-icon name="logo-twitter">
                                    </ion-icon>
                                </a>
                            </li>
                            <li><a href="">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a></li>
                            <li><a href="">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="contact map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3822.161352304573!2d74.26677541705607!3d16.66880729617563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc0ff0a1abc38ad%3A0xe481f9a852385ce2!2sSoundarya%20beauty%20care%20center!5e0!3m2!1sen!2sin!4v1676619062100!5m2!1sen!2sin"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>


    </div>




    <!-- footer -->

    <?php include("includes/footer.php") ?>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
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