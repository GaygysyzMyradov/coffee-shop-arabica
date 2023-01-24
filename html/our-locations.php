<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Locations</title>
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
</head>
<body>
<?php

include_once("header.php");
?>

    <main>
        <div id="our-locations" class="our-locations-banner OLB">
            <div class="background-image-container">
                <div class="our-locations-heading-h1 primary-font">
                    Our Locations
                </div>
            </div>

            <div class="location-container">

                <div class="img-container">
                    <img src="../images/our-location/1.jpg" alt="coffee-shop">
                </div>

                <div class="address-container">
                    <div class="heading-h1 primary-font">
                        Local Café
                    </div>
                    <div class="heading-h2 primary-font">
                        Store Address
                    </div>
                    <div class="heading-h3">
                        Bukit Bintang, Kuala Lumpur, Malaysia <br>
                        Email: enquiry@arabica.com <br>
                        Phone: 011 6166 8991 <br>
                        Phone: 011 6166 8992 <br>
                    </div>
                    <a href="https://goo.gl/maps/rUd2truRkpYy3QeJA">
                        <button class="explore-more"><span>See Location</span></button>
                    </a>
                </div>
                
            </div>

            <div class="location-container">

                <div class="address-container">
                    <div class="heading-h1 primary-font">
                        Local Café
                    </div>
                    <div class="heading-h2 primary-font">
                        Store Address
                    </div>
                    <div class="heading-h3">
                        IOI City Mall, Putrajaya, Malaysia <br>
                        Email: enquiry@arabica.com <br>
                        Phone: 011 6166 8993 <br>
                        Phone: 011 6166 8994 <br>
                    </div>
                    <a href="https://goo.gl/maps/hKQanZWusZWKNaTj7">
                        <button class="explore-more"><span>See Location</span></button>
                    </a>
                </div>

                <div class="img-container">
                    <img src="../images/our-location/2.jpg" alt="coffee-shop">
                </div>
                
            </div>

            <div class="location-container">

                <div class="img-container">
                    <img src="../images/our-location/3.jpg" alt="coffee-shop">
                </div>

                <div class="address-container">
                    <div class="heading-h1 primary-font">
                        Local Café
                    </div>
                    <div class="heading-h2 primary-font">
                        Store Address
                    </div>
                    <div class="heading-h3">
                        Sunway Pyramid, Selangor, Malaysia <br>
                        Email: enquiry@arabica.com <br>
                        Phone: 011 6166 8995 <br>
                        Phone: 011 6166 8996 <br>
                    </div>
                    <a href="https://goo.gl/maps/y5SGERnjrDGjv6Z3A">
                        <button class="explore-more"><span>See Location</span></button>
                    </a>
                </div>
                
            </div>

        </div>

        <div class="subscribe-to-newsletter STN">

<div class="heading-h1 primary-font">
    Subscribe To Our Newsletter
</div>

<form action="our-locations.php" method="POST">
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