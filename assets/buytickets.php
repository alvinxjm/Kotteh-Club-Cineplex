<?php 

$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");


if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	return;
}

$movie=$_POST['movie'];
$cinema=$_POST['cinema'];
$date=$_POST['date'];
$time=$_POST['time'];
$pax=$_POST['pax'];
echo $movie;
echo $cinema;
echo $date;
echo $time;
echo $pax;

$sql = "INSERT INTO f32ee.kottehclub_bookings (booking_id, movie_name,cinema_name, date,  time, pax) VALUES (NULL, '$movie', '$cinema', '$date', '$time', '$pax');";
	if (!mysqli_query($conn, $sql)) {
		echo "Failed to update database: " . mysqli_error($conn);
		mysqli_close($conn);
    } 
?>