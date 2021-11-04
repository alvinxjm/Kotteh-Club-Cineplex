<?php

session_start();


$seat1 = $_SESSION["seat1"];
$seat2 = $_SESSION["seat2"];
$seat3 = $_SESSION["seat3"];
$seat4 = $_SESSION["seat4"];

$movie = $_SESSION["movie"];
$cinema = $_SESSION["cinema"];
$date = $_SESSION["date"];
$time = $_SESSION["time"];
$pax = $_SESSION["pax"];

$name = $_SESSION["name"];
$contactnumber = $_SESSION["contactnumber"];
$email = $_SESSION["email"];

if($movie="marvel"){
	$movie1="Marvel Studios' Shang-Chi And The Legend Of The Ten";
}
else if($movie="notimetodie"){
	$movie1="No Time To Die";
}
else if($movie="bossbaby"){
	$movie1="The Boss Baby: Family Business";
}
if($cinema="jewel"){
	$cinema1="Kottehclub @ Jewel";
}
else if($cinema="payalebar"){
	$cinema1="Kottehclub @ Paya Lebar";
}
else if($cinema="northpoint"){
	$cinema1="Kottehclub @ North Point";
}
else if($cinema="causewaypoint"){
	$cinema1="Kottehclub @ Causeway Point";
}
else if($cinema="jurongpoint"){
	$cinema1="Kottehclub @ Jurong Point";
}
else if($cinema="jcube"){
	$cinema1="Kottehclub @ Jcube";
}

if($date="1311"){
	$date1="Saturday, 13th November";
}
else if($date="1411"){
	$date1="Sunday, 14th November";
}
else if($date="1511"){
	$date1="Monday, 15th November";
}
else if($date="1611"){
	$date1="Tuesday, 16th November";
}


?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kotteh Club Cineplex</title>
    <link rel="stylesheet" href="assets/cinema.css">
    <script type="text/javascript" src="assets\booking.js"></script>
    <script src="scrollToTop.js" defer></script>
</head>
<body>
<button id="scrollToTopBtn"><img src="media/upArrow.png" id="scrollToTopImg" ></button>
<nav class="navbar3">
        <ul class="navbar-nav">
        <div style="background: #080808;">
            <li class="logo">
                <img src="media/B&W Logo.png" style="height: 80px; width: 80px;">
                <span class="link-text logo-text"></span>
                </a>
            </li>
        </div>
    
            <li class="nav-item">
                <a href="index.html" class="nav-link">
                    <img src="media/home.png">
                    <span class="link-text">Home</span>
    
                </a>
            </li>
    
            <li class="nav-item">
                <a href="movies.html" class="nav-link">
                    <img src="media/movies.png">
                    <span class="link-text">Movies</span>
                </a>
            </li>
    
            <li class="nav-item">
                <a href="cinemas.html" class="nav-link">
                    <img src="media/cinemas.png">
                    <span class="link-text">Cinemas</span>
                </a>
            </li>
    
            <li class="nav-item">
    
                <div class="nav-link">
                    <img src="media/booking.png">
                    <div class="dropdown">
                        <button class="dropbtn"> <span class="link-text">Bookings <img src="media/arrowDown.png"
                                    class="arrowDown"> </span>
    
                        </button>
                        <div class="dropdown-content">
                            <a href="buytickets.php">Buy Tickets</a>
                            <a href="checkbooking.php">Check Booking</a>
                        </div>
    
                        </a>
                    </div>
    
            </li>
    
    </nav>
    <div class="gridcontainer">
        <div class="item1">
            <img src="media/wallpaper.jpg" alt="header" class="wallpaper">
        </div>
        <div class="item3">
        <form action="buytickets4_1_2.php" method="post" id="booking">
            <div id="firstpart">
            <table class="buyticketstable">
                <tr ><td><img src="media/prog1.png" alt="header"></td>

                </tr>
                <td><h2>Reaffirming our affordability prices<br>1 Standard Ticket for all ages<br><h1>$8.00</h1></h2></td>
                <tr>
                    <td>
                        <div class="box">
                        <label for="movie">Movie : </label>
                        <select name="movie" id="movie" required="1" >
                            <option disabled selected value> -- select an option -- </option>
                            <option selected value="<?php echo $movie ?>"><?php echo $movie1 ?></option>
                            <option value="marvel">Marvel Studios' Shang-Chi And The Legend Of The Ten</option>
                            <option value="notimetodie">No Time To Die</option>
                            <option value="bossbaby">The Boss Baby: Family Business</option>
                        </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="box">
                        <label for="cinema">Cinema :</label>
                        <select name="cinema" id="cinema" required="1">
                            <option disabled selected value> -- select an option -- </option>
                            <option selected value="<?php echo $cinema ?>"><?php echo $cinema1 ?></option>
                            <option value="jewel">Kottehclub @ Jewel</option>
                            <option value="payalebar">Kottehclub @ Paya Lebar</option>
                            <option value="northpoint">Kottehclub @ North Point</option>
                            <option value="causewaypoint">Kottehclub @ Causeway Point</option>
                            <option value="jurongpoint">Kottehclub @ Jurong Point</option>
                            <option value="jcube">Kottehclub @ Jcube</option>
                        </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="box">
                    <label for="date">Date :</label>
                    <select name="date" id="date" required="1">
                        <option disabled selected value> -- select an option -- </option>
                        <option selected value="<?php echo $date ?>"><?php echo $date1 ?></option>
                        <option value="1311">Saturday, 13th November</option>
                        <option value="1411">Sunday, 14th November</option>
                        <option value="1511">Monday, 15th November</option>
                        <option value="1611">Tuesday, 16th November</option>
                    </select>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="box">
                        <label for="time">Time : </label>
                        <select name="time" id="time" required="1">
                            <option disabled selected value> -- select an option -- </option>
                            <option selected value="<?php echo $time ?>"><?php echo $time ?></option>
                            <option value="3pm">3.00pm</option>
                            <option value="6pm">6.00pm</option>
                            <option value="9pm">9.00pm</option>
                        </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="box">
                        <label for="pax">Pax : </label>
                        <select name="pax" id="pax" required="1" >
                            <option disabled selected value> -- select an option -- </option>
                            <option selected value="<?php echo $pax ?>"><?php echo $pax ?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        </div>
                        
                        
                        
                    </td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td row='2' style="text-align:center"><input type="submit" class="button" id="temp" value="Proceed to seat selection" ></td>
                </tr>
            </table>
        </form>
        </div>
        </div>
        <div class="footer">
            <footer class="footer">
                <div class="container1" style="text-align:left;">
                    <div class="row">
                        <div class="footer-col">
                            <h4>Contact Us</h4>
                            <p class="footerContact"> 
                                Office: Mulberry Drive 827292 #04-22<br>
                                Tel: (+65) 6237 8328<br>
                                Email: Kotteh@Club.com</p>
                        </div>
                        <div class="footer-col">
                            <h4>Follow Us</h4>
                            <div class="social-links">
                                <a href="#"><img src="media/twitter.png" alt="Twitter" class="socialMediaIcons"></a>
                                <a href="#"><img src="media/facebook.png" alt="Facebook" class="socialMediaIcons"></a>
                                <a href="#"><img src="media/instagram.png" alt="Instagram" class="socialMediaIcons"></a>
                            </div>
                        </div><div class="footer-col">
                            <h4>Kotteh Club Cineplex</h4>
                            <p class="footerContact"> 
                                Providing you affordable entertainment since 1997<br>
                                Everyone should have a chance to enjoy
                                
                                </p>
                        </div>
                    </div>
                </div>
            
           </footer>

        </div>
    


</body>
</html> 