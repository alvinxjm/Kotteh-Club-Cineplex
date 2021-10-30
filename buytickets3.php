<?php

session_start();

$seat1=$_POST['seat1'];
$seat2=$_POST['seat2'];
$seat3=$_POST['seat3'];
$seat4=$_POST['seat4'];

$_SESSION["seat1"] = $seat1;
$_SESSION["seat2"] = $seat2;
$_SESSION["seat3"] = $seat3;
$_SESSION["seat4"] = $seat4;

$movie = $_SESSION["movie"];
$cinema = $_SESSION["cinema"];
$date = $_SESSION["date"];
$time = $_SESSION["time"];
$pax = $_SESSION["pax"];


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
</head>
<body>
    <div class="gridcontainer">
        <div class="item1">
            <img src="media/wallpaper1.jpg" alt="header" class="wallpaper">
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
            <div id="particulars">
            <form action="buytickets4.php" method="post">
            <table>
                <tr><td colspan='2'><img src="media/prog3.png" alt="header"></td></tr>
                <tr>
                    <td>Personal Particulars</td>
                </tr>
                <tr >
                    <td style="width: 600px;">
                        
                        <label for="name">Name :</label>
                        <input type="text" id="name" name="name" required="1">
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        
                        <label for="contactnumber">Contact Number :</label>
                        <input type="text" id="contactnumber" name="contactnumber" required="1">
                        
                    </td>
                </tr>
                <tr> 
                    <td>
                        
                        <label for="email">Email Address :</label>
                        <input type="email" id="email" name="email" required="1">
                        
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" class="button" id="submit" value="Review Booking"></td>
                </tr>
            </table>
        </div>
        </form>
        </div>
    
        <div class="footer">
            <h1 class="footer">Connect with us on our social media platforms!</h1>

        </div>
    </div>


</body>
</html> 