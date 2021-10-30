<?php 
session_start();

$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	return;
}

$movie = $_SESSION["movie"];
$cinema = $_SESSION["cinema"];
$date = $_SESSION["date"];
$time = $_SESSION["time"];
$pax = $_SESSION["pax"];

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




$seat1 = $_SESSION["seat1"];
$seat2 = $_SESSION["seat2"];
$seat3 = $_SESSION["seat3"];
$seat4 = $_SESSION["seat4"];

$name=$_POST['name'];
$contactnumber=$_POST['contactnumber'];
$email=$_POST['email'];

$_SESSION["name"] = $name;
$_SESSION["contactnumber"] = $contactnumber;
$_SESSION["email"] = $email;





//update booking on server
$sql = "INSERT INTO f32ee.kottehclub_bookings (booking_id, movie_name,cinema_name, date, time, pax, seat1, seat2, seat3, seat4, name, contact_number, email) 
		VALUES (NULL, '$movie', '$cinema', '$date', '$time', '$pax', '$seat1', '$seat2', '$seat3', '$seat4', '$name', '$contactnumber', '$email');";
	if (!mysqli_query($conn, $sql)) {
		echo "Failed to update database: " . mysqli_error($conn);
		mysqli_close($conn);
    } 

//update seat selection booking on server
$table = "kottehclub_".$movie;
$sql = "UPDATE f32ee.$table SET Taken='1' WHERE Seat in ('$seat1','$seat2','$seat3','$seat4') and Cinema='$cinema' and Time ='$time' and Date ='$date' ";
	if (!mysqli_query($conn, $sql)) {
		echo "Failed to update database: " . mysqli_error($conn);
		mysqli_close($conn);
    }

	$to= 'f32ee@localhost';
	$subject = 'KottehClub Cineplex Booking Confirmation';
	$message = 'This is your booking confirmation'."\r\r".
				'Movie: '.$movie1."\r".
				'Cinema: '.$cinema1."\r".
				'Date: '.$date1."\r".
				'Time: '.$time."\r".
				'Pax: '.$pax."\r".
				'Seat(s) selected: '.$seat1.' '.$seat2.' '.$seat3.' '.$seat4;
	$headers = 'From: f32ee@localhost' . "\r\n" .
    'Reply-To: f32ee@localhost' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers,'-ff32ee@localhost');
	echo ("mail sent to : ".$to);

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
            <div class="confirmation">
				<table style="text-align:left; color: white;">
					<tr><td><img src="media/prog5.png" alt="header"></td></tr>
					<tr>
						<td style="text-align:center;"><h1>Booking Confirmation</h1></td>
					</tr>
					<tr>
						<td><label>Movie :&nbsp</label><?php echo $movie1 ?></td>
					</tr>
					<tr>
						<td><label>Cinema :&nbsp</label><?php echo $cinema1 ?></td>
					</tr>
					<tr>
						<td><label>Date :&nbsp</label><?php echo $date1 ?></td>
					</tr>
					<tr>
						<td><label>Time :&nbsp</label><?php echo $time ?></td>
					</tr>
					<tr>
						<td><label>Pax :&nbsp</label><?php echo $pax ?></td>
					</tr>
					<tr>
						<td><label>Seat(s) selected :&nbsp</label><?php echo $seat1." ".$seat2." ".$seat3." ".$seat4 ?></td>
					</tr>
					<tr></tr>
					<tr><td style="text-align:center"><h3>Your booking confirmation has been sent to your email.<br>
								Thank you for choosing Kotteh Club Cineplex, 
							We look forward to serving you at our cinema</h3></td></tr>

				</table>
			</div>
        </div>
    
        <div class="footer">
            <h1 class="footer">Connect with us on our social media platforms!</h1>

        </div>
    </div>


</body>
</html> 