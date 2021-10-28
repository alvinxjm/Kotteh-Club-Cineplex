<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kotteh Club Cineplex</title>
    <link rel="stylesheet" href="assets/cinema.css">
    <script type="text/javascript" src="assets\booking.js"></script>
</head>
<body>
    <div class="gridcontainer">
        <div class="item1">
            <img src="media/wallpaper.jpg" alt="header" class="wallpaper">
        </div>
        <div class="item2">
            <ul class="navbar" style="list-style-type: none;">
                <li class="nav"><a href="index.html">Home</a></li>
                <li class="nav"><a href="movies.html">Movies</a></li>
                <li class="nav"><a href="cinemas.html">Cinemas</a></li>
                <li class="nav"><a href="buytickets.php">Buy Tickets</a></li>
                <li class="nav"><a href="checkbooking.php">Check Booking</a></li>
            </ul>
        </div>
        <div class="item3">
            <div class="retrieve" style="color: white">
				<table>
                <form action="checkbooking2.php" method="post">
					<tr>
						<td>Enter your booking details</td>
					</tr>
					<tr>
                        <td>
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
                        <input type="submit" value="Retreive Booking">
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