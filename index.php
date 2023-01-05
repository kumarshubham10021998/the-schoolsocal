<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php require 'partical/_nav.php' ?>


    <!-- Banner-Sectiom -->

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title text-light">When Milk Met Icecream Love Invitable</h1>
                    <p class="desc text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque sunt
                        corrupti blanditiis consequuntur quasi, facilis neque, praesentium corporis, porro consectetur
                        tenetur qui odio voluptatibus rerum quas vero? Sapiente, est rem.</p>
                    <a href="#" class="btn btn-color">Read More</a>
                    <a href="#" class="btn btn-trans mx-2">Explore More</a>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-tools"></i>
                <h3 class="title">Use Website</h3>
                <span class="container">800</span>
            </div>
            <div class="box">
                <i class="	fas fa-book-reader"></i>
                <h3 class="title">Reading Book</h3>
                <span class="container">700</span>
            </div>
            <div class="box">
                <i class="fas fa-chalkboard-teacher"></i>
                <h3 class="title">Teacher Uses</h3>
                <span class="container">1200</span>
            </div>
            <div class="box">
                <i class="fas fa-book-open"></i>
                <h3 class="title">Books</h3>
                <span class="container">1500</span>
            </div>
        </div>
    <!-- </section>
    <section class=" zIndex-2"> 
        <div class="border" style=" background-color:#f39c12;">
            <div class="container">
                <a href="/#" type="" style=" background-color:#f39c12; border:none;color:blue;"> <i class="fas fa-save"
                        style="font-size:60px;"></i></a>

                <a href="login.php" class="profile" type="btn"
                    style=" background-color:#f39c12; border:none; position:absolute; right: 200px; color:blue;"> <i
                        class="fas fa-user" style="font-size:60px;"></i></a>

            </div>
        </div>
    </section> -->
    <?php require "partical/card.php" ?>

 <?php require 'partical/loginsystem.php' ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="./Js/custom.js"></script>
</body>

</html>