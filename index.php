<?php
session_start();
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop</title>
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/landing-page/welcome-page.css">
    <link rel="stylesheet" href="css/landing-page/cup-of-coffee-page.css">
    <link rel="stylesheet" href="css/landing-page/fresh-coffee-banner.css">
    <link rel="stylesheet" href="css/landing-page/testimonials-banner.css">
    <link rel="stylesheet" href="css/landing-page/food-tea-coffee-card.css">
    <link rel="stylesheet" href="css/landing-page/menu-snippet.css">
    <link rel="stylesheet" href="css/landing-page/read-our-latest-news.css">
    <link rel="stylesheet" href="css/landing-page/subscibe-to-newsletter.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/our-locations.css">
    <link rel="stylesheet" href="css/newsletter.css">
</head>
<body>
    <header>
        <a href="index.php">
            <img class="logo" src="images/main-logo-transparent.png" alt="LOGO - arabica cafe">
        </a>
        
        <nav>
            <ul class="nav-links">
                <li><a href="index.php">HOME</a></li>
                <li><a href="html/menu.php">MENU</a></li>
                <li><a href="html/our-locations.php">OUR LOCATIONS</a></li>
                <li><a href="html/reservation.php">RESERVATION</a></li>
                <li><a href="html/newsletter.php">NEWSLETTER</a></li>
                <li><a href="html/about.php">ABOUT US</a></li>
            </ul>

        </nav>

       <?php if(isset($_SESSION["id"])){  ?>
        
        <div class="signed-buttons">
            <a class="button-profile" href="html/reservation_list.php"><button>Reservation List</button></a>
            <a class="button-profile" href="logout.php"><button>Logout</button></a>  
        </div>
        <?php }
        else {  ?>
        <div class="signed-out-buttons">
            <a class="button-profile" href="html/signin.php"><button>Sign In</button></a>
		    <a class="button-profile" href="html/signup.php"><button>Register</button></a>
        </div>

        <?php }  ?>

    </header>
    
    <main>
        <div id="welcome-page" class="welcome-page-container">

            <img class="wp-logo" src="images/main-logo-transparent-white.png" alt="Coffee">

            <div class="wp-description-container">
                <div class="wp-main-title primary-font">
                    The Coffee Roasters
                </div>

                <div class="wp-title-description">
                    We source our coffee seasonally, from farmers <br> 
                    who care, and roast to highlight what makes them <br>
                    special.
                </div>

                <a class="view-our-menu" href="#menu-snippet"><button>VIEW OUR MENU</button></a>

            </div>
        </div>

        <div id="cafe-features" class="coffee-page cp">

            <img class="head-icon" src="images/landing-page/icons/head-icon.jpeg" alt="">

            <div class="heading-title primary-font">
                We are specialised in making various
                quality of coffee specialties, made with love
                for you to enjoy in the special moments.
            </div>

            <div class="cup-of-coffee-container">
                <div class="col-1">
                    <div class="title-icon-container">
                        <div class="title-container">
                            <div class="heading-h1 primary-font">
                                Indoor Seating
                            </div>
                            <div class="heading-h2">
                                Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry.
                            </div>
                        </div>
                        <img class="cp-icons" src="images/landing-page/icons/icon-1.png" alt="">
                    </div>
    
                    <div class="title-icon-container">
                        <div class="title-container">
                            <div class="heading-h1 primary-font">
                                Pet Friendly
                            </div>
                            <div class="heading-h2">
                                Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry.
                            </div>
                        </div>
                        <img class="cp-icons" src="images/landing-page/icons/icon-2.png" alt="">
                    </div>
    
                    <div class="title-icon-container">
                        <div class="title-container">
                            <div class="heading-h1 primary-font">
                                Take Away
                            </div>
                            <div class="heading-h2">
                                Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry.
                            </div>
                        </div>
                        <img class="cp-icons" src="images/landing-page/icons/icon-3.png" alt="">
                    </div>
                </div>
    
                <img class="cup-of-coffee" src="images/landing-page/cup-of-coffee-background.jpg" alt="Cup of Coffee, a Latte">
    
                <div class="col-2">
                    <div class="title-icon-container">
                        <img class="cp-icons" src="images/landing-page/icons/icon-4.png" alt="">
                        <div class="title-container">
                            <div class="heading-h1 primary-font">
                                Wheelchair Accessible
                            </div>
                            <div class="heading-h2">
                                Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry.
                            </div>
                        </div>
                    </div>
    
                    <div class="title-icon-container">
                        <img class="cp-icons" src="images/landing-page/icons/icon-5.png" alt="">
                        <div class="title-container">
                            <div class="heading-h1 primary-font">
                                Vegan Options
                            </div>
                            <div class="heading-h2">
                                Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry.
                            </div>
                        </div>
                    </div>
    
                    <div class="title-icon-container">
                        <img class="cp-icons" src="images/landing-page/icons/icon-6.png" alt="">
                        <div class="title-container">
                            <div class="heading-h1 primary-font">
                                Cyclist Friendly
                            </div>
                            <div class="heading-h2">
                                Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="fresh-coffee-banner FCB">
            <div class="title-container">
                <div class="heading-h1 primary-font">
                    Looking for a fresh coffee?
                </div>
                <hr>  
                <div class="heading-h2">
                    Come drink a coffee with us on <br>
                    Fleet Street, Chancery Lane or Milkwood Road
                </div>
            </div>

            <a class="book-a-table" href="html/reservation.php"><button>BOOK A TABLE</button></a>

        </div>

        <div class="testimonials-carousel-container TC">
            <div class="carousel-item-container">
                <img class="quote-icon" src="images/landing-page/quote-icon.jpeg" alt="">
                <div class="quote-h1 primary-font">
                    "Incididunt ut labore et dolore magna aliqua adipiscing elit, 
                    sed do eiusmod temporen quamid leo in vitae turpis massa. Ipsum dolor."
                </div>
    
                <div class="quote-author-h2 primary-font">
                    Leonardo Coaxi
                </div>
    
                <div class="quote-author-position-h3">
                    Food Critic
                </div>
            </div>
        </div>

        <div class="food-tea-coffee-card FTC">
            <div class="card-item-container">

                <img class="food" src="images/landing-page/food-tea-cofee/food.jpg" alt="">

                <div class="card-item">
                    <div class="heading-h1 primary-font">
                        Food
                    </div>
                    <a href="html/menu.php#food">
                        <button class="explore-more"><span>Explore More</span></button>
                    </a>
                </div>
            </div>

            <div class="card-item-container">

                <img class="coffee" src="images/landing-page/food-tea-cofee/coffee.jpg" alt="">

                <div class="card-item">
                    <div class="heading-h1 primary-font">
                        Coffee
                    </div>
                    <a href="html/menu.php#coffee-flavours">
                        <button class="explore-more"><span>Explore More</span></button>
                    </a>
                </div>
            </div>

            <div class="card-item-container">

                <img class="tea-blends" src="images/landing-page/food-tea-cofee/tea-blend.jpg" alt="">

                <div class="card-item">
                    <div class="heading-h1 primary-font">
                        Tea Blends
                    </div>
                    <a href="html/menu.php#tea-flavours">
                        <button class="explore-more"><span>Explore More</span></button>
                    </a>
                </div>
            </div>
        </div>

        <div class="menu-snippet-container MSC">

            <div class="menu-heading-title-container MHC">
                <img id="menu-snippet" class="coffee-icon" src="images/landing-page/coffee-icon.jpeg" alt="Coffee Icon">
                <div class="heading-h1 primary-font">
                    Favourite Coffee Flavours
                </div>
                <div class="heading-h2">
                    Vehicula ipsum a arcu cursus vitae. Odio euismod lacinia at qui.
                </div>
            </div>

            <div class="menu-content-wrapper MCW">
                <div class="col-1">
                    <div class="menu-item">
                        <div class="item-upper-heading">
                            <div class="heading-h1 primary-font">
                                Caffe Latte
                            </div>
    
                            <div class="item-heading-line"></div>
    
                            <div class="item-price primary-font">
                                RM 11.90
                            </div>
                        </div>
    
                        <div class="heading-h2">
                            Fresh bewed coffee and steamed milk
                        </div>
                    </div>

                    <div class="menu-item">
                        <div class="item-upper-heading">
                            <div class="heading-h1 primary-font">
                                Caffe Mocha
                            </div>
    
                            <div class="item-heading-line"></div>
    
                            <div class="item-price primary-font">
                                RM 13.90
                            </div>
                        </div>
    
                        <div class="heading-h2">
                            Esspreso with milk and whipped cream
                        </div>
                    </div>

                    <div class="menu-item">
                        <div class="item-upper-heading">
                            <div class="heading-h1 primary-font">
                                White Chocolate Mocha
                            </div>
    
                            <div class="item-heading-line"></div>
    
                            <div class="item-price primary-font">
                                RM 12.00
                            </div>
                        </div>
    
                        <div class="heading-h2">
                            Esspreso, white chocolate, milk, ice and cream
                        </div>
                    </div>

                    <div class="menu-item">
                        <div class="item-upper-heading">
                            <div class="heading-h1 primary-font">
                                Caffe Americano
                            </div>
    
                            <div class="item-heading-line"></div>
    
                            <div class="item-price primary-font">
                                RM 9.90
                            </div>
                        </div>
    
                        <div class="heading-h2">
                            Espresso shots and light layer of crema
                        </div>
                    </div>

                    <div class="menu-item">
                        <div class="item-upper-heading">
                            <div class="heading-h1 primary-font">
                                Capuccino
                            </div>
    
                            <div class="item-heading-line"></div>
    
                            <div class="item-price primary-font">
                                RM 10.90
                            </div>
                        </div>
    
                        <div class="heading-h2">
                            Espresso and smoothened layer of foam
                        </div>
                    </div>
                </div>

                <div class="col-2">
                    <div class="menu-item">
                        <div class="item-upper-heading">
                            <div class="heading-h1 primary-font">
                                Iced Caramel Latte
                            </div>
    
                            <div class="item-heading-line"></div>
    
                            <div class="item-price primary-font">
                                RM 8.90
                            </div>
                        </div>
    
                        <div class="heading-h2">
                            Espresso, milk, ice and caramel sauce
                        </div>
                    </div>

                    <div class="menu-item">
                        <div class="item-upper-heading">
                            <div class="heading-h1 primary-font">
                                Espresso Machiato
                            </div>
    
                            <div class="item-heading-line"></div>
    
                            <div class="item-price primary-font">
                                RM 11.90
                            </div>
                        </div>
    
                        <div class="heading-h2">
                            Rich espresso with milk and foam
                        </div>
                    </div>

                    <div class="menu-item">
                        <div class="item-upper-heading">
                            <div class="heading-h1 primary-font">
                                Caramel Machiato
                            </div>
    
                            <div class="item-heading-line"></div>
    
                            <div class="item-price primary-font">
                                RM 12.00
                            </div>
                        </div>
    
                        <div class="heading-h2">
                            Espresso, vanilla-flavored syrup and milk
                        </div>
                    </div>

                    <div class="menu-item">
                        <div class="item-upper-heading">
                            <div class="heading-h1 primary-font">
                                Iced Smoked Latte
                            </div>
    
                            <div class="item-heading-line"></div>
    
                            <div class="item-price primary-font">
                                RM 11.90
                            </div>
                        </div>
    
                        <div class="heading-h2">
                            Espresso, ice, with smoked butterscotch
                        </div>
                    </div>

                    <div class="menu-item">
                        <div class="item-upper-heading">
                            <div class="heading-h1 primary-font">
                                Iced Caffe Mocha
                            </div>
    
                            <div class="item-heading-line"></div>
    
                            <div class="item-price primary-font">
                                RM 13.90
                            </div>
                        </div>
    
                        <div class="heading-h2">
                            Espresso, bittersweet mocha sauce, milk and ice
                        </div>
                    </div>
                </div>

            </div>

            <div class="view-our-menu">
                <a href="html/menu.php"><button>FULL MENU</button></a>
            </div>

        </div>

        <video class="video-banner" autoplay muted loop src="videos/making-a-coffee.mp4"></video>

        <div class="read-news-container RNC">
            <div class="news-heading-container NHC">
                <div class="heading-h1 primary-font">
                    Read Our Latest Posts
                </div>
                <div class="heading-h2">
                    Vivid libero nunc consequat interdume in amet ferme lorem 
                    ipsum sinto ciaecat cupidatat non proident, sunt in culpa
                </div>
            </div>

            <div class="news-content-wrapper">
                <div class="news-item-wrapper">
                    <div class="news-card">
                        <img class="news-card-img" src="images/landing-page/read-news/image-1.jpg" alt="">
                    </div>

                    <div class="news-title-container">

                        <div class="heading-h2">
                            6 January 2023
                        </div>
                        
                        <div class="heading-h1 primary-font">
                            Best Coffee Shops In The State You Should Know
                        </div>

                        <a href="html/newsletter.php">
                            <button class="explore-more"><span>Explore More</span></button>
                        </a>

                    </div>

                </div>

                <div class="news-item-wrapper">
                    <div class="news-card">
                        <img class="news-card-img" src="images/landing-page/read-news/image-2.jpg" alt="">
                    </div>

                    <div class="news-title-container">

                        <div class="heading-h2">
                            4 January 2023
                        </div>
                        
                        <div class="heading-h1 primary-font">
                            The Culture And Coffee Customs Nowadays
                        </div>

                        <a href="html/newsletter.php">
                            <button class="explore-more"><span>Explore More</span></button>
                        </a>

                    </div>

                </div>

                <div class="news-item-wrapper">
                    <div class="news-card">
                        <img class="news-card-img" src="images/landing-page/read-news/image-3.jpg" alt="">
                    </div>

                    <div class="news-title-container">

                        <div class="heading-h2">
                            1 January 2023
                        </div>
                        
                        <div class="heading-h1 primary-font">
                            Best Cup Of Drinks For Your Break Today
                        </div>

                        <a href="html/newsletter.php">
                            <button class="explore-more"><span>Explore More</span></button>
                        </a>

                    </div>

                </div>
            </div>
        </div>

         <div class="subscribe-to-newsletter STN">

<div class="heading-h1 primary-font">
    Subscribe To Our Newsletter
</div>

<form action="index.php" method="POST">
    <input type="text" placeholder="Email address" name="mail" required>
    
    <div class="input-button">
        <input type="submit" value="Subscribe" onclick="myFunction()">
    </div>

  </form>

  <script>
function myFunction() {
alert("Subscribe Successfully!");
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

            <a href="#welcome-page"><img class="footer-logo" src="images/main-logo-transparent-orange-circle-gray.png" alt=""></a>

            <div class="content-wrapper">
                <div class="heading-h1 primary-font">
                    Information
                </div>
                <div>
                    <a class="heading-h2" href="html/menu.php">Menu</a> <br>
                    <a class="heading-h2" href="html/about.php">About</a> <br>
                    <a class="heading-h2" href="html/reservation.php">Reservation</a> <br>
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
                            <img src="images/star-transparent.png" alt="">
                            <div class="heading-h2"> 09-22</div>
                        </div>
                    </div>
                    <div class="day-hour-inner-container">
                        <div class="week-day heading-h2">Saturday</div>
                        <div class="icon-time-container">
                            <img src="images/star-transparent.png" alt="">
                            <div class="heading-h2"> 09-01</div>
                        </div>
                    </div>
                    <div class="day-hour-inner-container">
                        <div class="week-day heading-h2">Sunday</div>
                        <div class="icon-time-container">
                            <img src="images/star-transparent.png" alt="">
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