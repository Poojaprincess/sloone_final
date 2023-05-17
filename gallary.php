

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
    <link rel="stylesheet" href="css/gallary.css">
</head>
<style>

body{
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



    <!-- navbar -->

    <?php include("includes/header.php") ?>

        <!-- middle section -->
        <div class="row " style="font-size: 100%; color: beige; ">

            <div class="col-lg-6">
                <img class="title-image" src="images/anna.jpg" alt="">
            </div>
            <div class="col-lg-6" style="margin-top: 28%; padding-left:15%;">
                <h2 class="mb-0 bread" style="font-size: 300%; font-weight: 900">Gallary</h2>
                <!-- <p class=""><span class="mr-2"><a href="index.php" >Home ><i class=""></i></a></span> <span>About ><i class=""></i></span></p> -->
                <p><a href="index.html" style="color: beige">home ></a> <a href="gallary.html"
                        style="color: beige">gallary
                        ></a></p>
            </div>
        </div>

    </div>


    <!-- content -->

    <div class="about-cont">
        <div class="container-cont">

            

            <form action="gallary.php" method="post" enctype="multipart/form-data" >
            <input type="file" name="my_image" id="file-input" accept="image/png, image/jpeg" onchange="preview()" multiple>
            <label for="file-input" >
                <i class="fas fa-upload"></i> &nbsp; Upload Pictures
            </label> 

            
            <p id="num-of-files">No Files Chosen</p>
            <div id="images" name = "image"></div>
            

            
            </form>
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

    <script src="javascript/script.js"></script>

</body>

</html>