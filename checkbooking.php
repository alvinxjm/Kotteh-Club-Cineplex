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
<button id="scrollToTopBtn"><img src="media\scrollToTop.jpeg" id="scrollToTopImg" ></button>
<nav class="navbar3">
        <ul class="navbar-nav">
            <li class="logo">
                <img src="media/B&W Logo.png" style="height: 48px; width: 48px;">
                    <span class="link-text logo-text"></span>
                </a>
            </li>
    
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
                <a href="buytickets.php" class="nav-link">
                    <img src="media/booking.png">
                    <span class="link-text">Bookings</span>
                </a>
            </li>
    
                </nav>
    <div class="gridcontainer">
        <div class="item1">
            <img src="media/wallpaper1.jpg" alt="header" class="wallpaper">
        </div>
        <div class="item3">
            <div class="retrieve" style="color: white">
				<table>
                <form action="checkbooking2.php" method="post">
					<tr>
						<td>Enter your booking details</td>
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
            <h1 class="footer">Connect with us on our social media platforms!</h1>

        </div>
    </div>


</body>
</html> 