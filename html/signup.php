<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
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

		if(isset($_POST['register'])){
		$name=$_POST['name'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$password1=$_POST['password1'];
        $dbemail="";
		$qury1="select * from user where email='$email'";
		$check=mysqli_query($connection, $qury1);
	
        $rowcount1=mysqli_num_rows($check);
        if($rowcount1>0){
            $rows=mysqli_fetch_array($check);
        $dbemail=$rows['email'];
        }

		if($name==null || $lastname==null || $email==null || $password==null || $password1==null) echo "<h3 class='text-center'>Please Fill Full Form</h3>";
		else{
		if($dbemail==$email){echo "
            <script>
                window.alert('This Email Is Already Registered!');
                window.history.back();
            </script>
            ";}
		else {
		if($password1==$password){
		$fullpass=md5($password);
		$qury="insert into user (name,lastname,email,password) values ('$name','$lastname','$email','$fullpass')";
		$reg=mysqli_query($connection, $qury);
		if($reg) echo "
		<script>
			window.alert('Registeration Successful!');
			window.location.href = 'signin.php';
		</script>
		";
		
		}else echo "
		<script>
			window.alert('Your Both Passwords are not Matched!');
			window.history.back();
		</script>
		";
		}
		
		}
		}
	





?>

    <main>
        <div id="sign-up" class="reservation-page-container RPC">
            <div class="background-image-container">
                <div class="make-reservation-heading-h1 primary-font">
                    Register Page
                </div>
            </div>

        
            
        </div>

        <div class="subscribe-to-newsletter STN">

            <div class="heading-h1 primary-font">
                REGISTER
            </div>

            <form action="signup.php" method="POST">
                <input type="text" placeholder="Name" name="name" required> <br>
                <input type="text" placeholder="Last Name" name="lastname" required> <br>
                <input type="email" placeholder="Email address" name="email" required> <br>
                <input type="password" placeholder="password" name="password" required> <br>
                <input type="password" placeholder="Re-Enter Password" name="password1" required>
               
                
                <div class="input-button">
                    <input type="submit" value="Signup" name="register">
                </div>

            </form>
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