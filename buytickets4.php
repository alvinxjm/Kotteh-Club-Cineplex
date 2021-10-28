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
            <div class="confirmation" style="color: white">
				<table>
					<tr>
						<td>Booking Confirmation</td>
					</tr>
					<tr>
						<td>Movie :&nbsp<?php echo $movie1 ?></td>
					</tr>
					<tr>
						<td>Cinema :&nbsp<?php echo $cinema1 ?></td>
					</tr>
					<tr>
						<td>Date :&nbsp<?php echo $date1 ?></td>
					</tr>
					<tr>
						<td>Time :&nbsp<?php echo $time ?></td>
					</tr>
					<tr>
						<td>Pax :&nbsp<?php echo $pax ?></td>
					</tr>
					<tr>
						<td>Seat(s) selected :&nbsp<?php echo $seat1." ".$seat2." ".$seat3." ".$seat4 ?></td>
					</tr>
					<tr>
						<td>Name :&nbsp<?php echo $name ?></td>
					</tr>
					<tr>
						<td>Contact number :&nbsp<?php echo $contactnumber ?></td>
					</tr>
					<tr>
						<td>Email Address :&nbsp<?php echo $email ?></td>
					</tr>
				</table>
			</div>
        </div>
    
        <div class="footer">
            <h1 class="footer">Connect with us on our social media platforms!</h1>

        </div>
    </div>


</body>
</html> 