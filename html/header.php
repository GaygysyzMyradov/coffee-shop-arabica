<?php
session_start();
include("../connection.php");
?>

<header>
        <a href="../index.php">
            <img class="logo" src="../images/main-logo-transparent.png" alt="LOGO - arabica cafe">
        </a>
        
        <nav>
            <ul class="nav-links">
                <li><a href="../index.php">HOME</a></li>
                <li><a href="menu.php">MENU</a></li>
                <li><a href="our-locations.php">OUR LOCATIONS</a></li>
                <li><a href="reservation.php">RESERVATION</a></li>
                <li><a href="newsletter.php">NEWSLETTER</a></li>
                <li><a href="about.php">ABOUT US</a></li>
            </ul>

        </nav>

        <?php if(isset($_SESSION["id"])){  ?>

            <div>
                <a class="button-profile" href="reservation_list.php"><button>Reservation List</button></a>
                <a class="button-profile" href="../logout.php"><button>Logout</button></a>  
            </div>
            
            <?php }
            else {  ?>
            <div>
                <a class="button-profile" href="signin.php"><button>Sign In</button></a>
                <a class="button-profile" href="signup.php"><button>Register</button></a>
            </div>
        <?php }  ?>
        
    </header>