<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Page</title>
    <link rel="stylesheet" href="../css/header-footer.css">
    <link rel="stylesheet" href="../css/landing-page/welcome-page.css">
    <link rel="stylesheet" href="../css//landing-page/cup-of-coffee-page.css">
    <link rel="stylesheet" href="../css/landing-page/fresh-coffee-banner.css">
    <link rel="stylesheet" href="../css/landing-page/testimonials-banner.css">
    <link rel="stylesheet" href="../css/landing-page/food-tea-coffee-card.css">
    <link rel="stylesheet" href="../css/landing-page/menu-snippet.css">
    <link rel="stylesheet" href="../css/landing-page/read-our-latest-news.css">
    <link rel="stylesheet" href="../css/landing-page/subscibe-to-newsletter.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/our-locations.css">
    <link rel="stylesheet" href="../css/newsletter.css">
    <link rel="stylesheet" href="../css/under-maintenance.css">
    <link rel="stylesheet" href="../css/reservation.css">
</head>
<body>
<?php

include_once("header.php");


if(isset($_POST['reservation'])){
    $id=$_SESSION["id"];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $seats=$_POST['seats'];
    $ddate=$_POST['ddate'];
   
    $qury="insert into reservation (user_id,name,email,seats,r_date) values ('$id','$name','$email','$seats','$ddate')";
    $reg=mysqli_query($connection, $qury);
    if($reg) 
    echo "
    <script>
        window.alert('Reservation has been created!');
        window.location.href = 'reservation.php';
    </script>
    ";

   
    }



?>

    <main>
        <div id="newsletter" class="reservation-page-container RPC">
            <div class="background-image-container">
                <div class="make-reservation-heading-h1 primary-font">
                    Reservation Page
                </div>
            </div>

            <div class="make-reservation-container MRC">

                <?php if(isset($_SESSION["id"])){  ?>

                    <div class="heading-h1 primary-font">
                    Make A Reservation
                    </div>
                <div class="heading-h2">
                    Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elito, 
                    do eiusmod tempor incididunt ut la.
                </div>


                 <form action="reservation.php" method="POST">
                    <div class="form-row-1">
                        <div>
                            <input type="text" placeholder="Name" name="name" required>
                        </div>
                        <div>
                            <input type="text" placeholder="Email" name="email" required>
                        </div>
                    </div>

                    <div class="form-row-1">
                        <div>
                            <input type="number" placeholder="Number of Seats" name="seats" required>
                        </div>
                        <div>
                            <input type="date" placeholder="Date" name="ddate" required>
                        </div>
                    </div>
                    
                    <div class="input-button">
                        <input type="submit" value="Reserve" name="reservation">
                    </div>
                </form>

<?php 
                }
 else {

?>

<a class="heading-h1 primary-font" href="signin.php"><h2 style="font-size:30px; padding-bottom: 30px;" > Please Login Before Reservation </h2> </a>



<?php } ?>


            </div>
            
        </div>

        <div class="subscribe-to-newsletter STN">

<div class="heading-h1 primary-font">
    Subscribe To Our Newsletter
</div>

<form action="reservation.php" method="POST">
    <input type="text" placeholder="Email address" name="mail" required>
    
    <div class="input-button">
        <input type="submit" value="Subscribe" onclick="myFunction()">
    </div>

  </form>

  <script>
function myFunction() {
alert("Subscribed Successfully!");
}
</script>
</div>

    </main>

    <footer>

        <div class="info-container">
            <div class="content-wrapper">
                <div class="heading-h1 primary-font">
                    Contact
                </div>
                <div class="heading-h2">
                    Phone: 011 6166 8990 <br>
                    Email: enquiry@arabica.com <br>
                    Address: KL, Jln Ampang 238
                </div>
            </div>

            <div class="content-wrapper">
                <div class="heading-h1 primary-font">
                    Locations
                </div>
                <div>
                    <a href="https://goo.gl/maps/rUd2truRkpYy3QeJA" class="heading-h2">KL, Bukit Bintang <br></a>
                    <a href="https://goo.gl/maps/hKQanZWusZWKNaTj7" class="heading-h2">PJY, IOI City Mall <br></a>
                    <a href="https://goo.gl/maps/y5SGERnjrDGjv6Z3A" class="heading-h2">SGR, Sunway Pyramid </a>
                </div>
            </div>

            <a href="../index.php#welcome-page"><img class="footer-logo" src="../images/main-logo-transparent-orange-circle-gray.png" alt=""></a>

            <div class="content-wrapper">
                <div class="heading-h1 primary-font">
                    Information
                </div>
                <div>
                    <a class="heading-h2" href="menu.php">Menu</a> <br>
                    <a class="heading-h2" href="about.php">About</a> <br>
                    <a class="heading-h2" href="reservation.php">Reservation</a> <br>
                </div>
            </div>

            <div class="content-wrapper">
                <div class="heading-h1 primary-font">
                    Operating Hours
                </div>
                <div class="day-hour-outer-container">
                    <div class="day-hour-inner-container">
                        <div class="week-day heading-h2">Mon - Fri</div>
                        <div class="icon-time-container">
                            <img src="../images/star-transparent.png" alt="">
                            <div class="heading-h2"> 09-22</div>
                        </div>
                    </div>
                    <div class="day-hour-inner-container">
                        <div class="week-day heading-h2">Saturday</div>
                        <div class="icon-time-container">
                            <img src="../images/star-transparent.png" alt="">
                            <div class="heading-h2"> 09-01</div>
                        </div>
                    </div>
                    <div class="day-hour-inner-container">
                        <div class="week-day heading-h2">Sunday</div>
                        <div class="icon-time-container">
                            <img src="../images/star-transparent.png" alt="">
                            <div class="heading-h2"> 09-23</div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="copyright-container">
            <div class="copyright">
                © 2022 Gaýgysyz Myradov. All Rights Reserved
            </div>
        </div>
    </footer>
    
</body>
</html>