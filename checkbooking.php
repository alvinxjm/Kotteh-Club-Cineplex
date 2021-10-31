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
            <div class="retrieve" style="color: white">
				<table>
                <form action="checkbooking2.php" method="post">
					<tr>
						<td><h2>Enter your booking details</h2></td>
					</tr>
					<tr>
                        <td style="width:600px">
                        <label for="name">Name :</label>
                        <input type="text" id="bookedname" name="bookedname" required="1">
                        </td>       
					</tr>
					<tr>
						<td>
                        <label for="contactnumber">Contact Number :</label>
                        <input type="text" id="bookedcontactnumber" name="bookedcontactnumber" required="1">
                        </td>
					</tr>
					<tr>
						<td>
                        <label for="email">Email Address :</label>
                        <input type="email" id="bookedemail" name="bookedemail" required="1">
                        </td>
					</tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
						<td>
                        <input type="submit" class="button" value="Retreive Booking">
                        </td>
					</tr>
                </form>
				</table>
			</div>
        </div>
    
        <div class="footer">
            <footer class="footer">
                <div class="container1">
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
                            <h4>About Us</h4>
                            <p class="footerContact"> 
                                Providing you affordable entertainment since 1997<br>
                                Everyone should have a chance to enjoy
                                
                                </p>
                        </div>
                    </div>
                </div>
           </footer>

        </div>
    </div>


</body>
</html> 