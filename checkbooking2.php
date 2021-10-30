<?php

$bookedname = $_POST["bookedname"];
$bookedcontactnumber = $_POST["bookedcontactnumber"];
$bookedemail = $_POST["bookedemail"];

$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	return;
}
function found(){
    $conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
    $search = "SELECT * FROM f32ee.kottehclub_bookings WHERE name='$bookedname' and contact_number ='$bookedcontactnumber' and email = '$bookedemail';";
    if ($result = mysqli_query($conn, $search)){
        echo "Booking has been retrieved";
    }
    else{
        echo "Booking not found";
    }
}


function retrieve($item){
    
    $bookedname = $_POST["bookedname"];
    $bookedcontactnumber = $_POST["bookedcontactnumber"];
    $bookedemail = $_POST["bookedemail"];
    $bookedmovie1=null;
    $bookedcinema1=null;
    $bookeddate1=null;
    $conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
    if($item=='1'){
        $sqlmovie = "SELECT movie_name FROM f32ee.kottehclub_bookings WHERE name='$bookedname' and contact_number ='$bookedcontactnumber' and email = '$bookedemail';";
            if ($result = mysqli_query($conn, $sqlmovie)){
                $bookedmovie = mysqli_fetch_row($result);
                if($bookedmovie[0]=="marvel"){
                    $bookedmovie1="Marvel Studios' Shang-Chi And The Legend Of The Ten";
                }
                else if($bookedmovie[0]=="notimetodie"){
                    $bookedmovie1="No Time To Die";
                }
                else if($bookedmovie[0]=="bossbaby"){
                    $bookedmovie1="The Boss Baby: Family Business";
                }
                else {
                    $bookedmovie1=null;
                }
                echo $bookedmovie1;
            
        }
    }
    else if($item=='2'){
        $sqlcinema = "SELECT cinema_name FROM f32ee.kottehclub_bookings WHERE name='$bookedname' and contact_number ='$bookedcontactnumber' and email = '$bookedemail';";
            if ($result = mysqli_query($conn, $sqlcinema)){
                $bookedcinema = mysqli_fetch_row($result);
                if($bookedcinema[0]=="jewel"){
                    $bookedcinema1="Kottehclub @ Jewel";
                }
                else if($bookedcinema[0]=="payalebar"){
                    $bookedcinema1="Kottehclub @ Paya Lebar";
                }
                else if($bookedcinema[0]=="northpoint"){
                    $bookedcinema1="Kottehclub @ North Point";
                }
                else if($bookedcinema[0]=="causewaypoint"){
                    $bookedcinema1="Kottehclub @ Causeway Point";
                }
                else if($bookedcinema[0]=="jurongpoint"){
                    $bookedcinema1="Kottehclub @ Jurong Point";
                }
                else if($bookedcinema[0]=="jcube"){
                    $bookedcinema1="Kottehclub @ Jcube";
                }
                else{
                    $bookedcinema1=null;
                }
                echo $bookedcinema1;   
            }
    }
    else if($item=='3'){
        $sqldate = "SELECT date FROM f32ee.kottehclub_bookings WHERE name='$bookedname' and contact_number ='$bookedcontactnumber' and email = '$bookedemail';";
            if ($result = mysqli_query($conn, $sqldate)){
                $bookeddate = mysqli_fetch_row($result);
                if($bookeddate[0]=="1311"){
                    $bookeddate1="Saturday, 13th November";
                }
                else if($bookeddate[0]=="1411"){
                    $bookeddate1="Sunday, 14th November";
                }
                else if($datbookeddate[0]=="1511"){
                    $bookeddate1="Monday, 15th November";
                }
                else if($bookeddate[0]=="1611"){
                    $bookeddate1="Tuesday, 16th November";
                }
                else{
                    $bookeddate1==null;
                }
                echo $bookeddate1;
            }
    }
    else if($item=='4'){
        $sqltime = "SELECT time FROM f32ee.kottehclub_bookings WHERE name='$bookedname' and contact_number ='$bookedcontactnumber' and email = '$bookedemail';";
            if ($result = mysqli_query($conn, $sqltime)){
                $bookedtiime = mysqli_fetch_row($result);
                echo $bookedtiime[0];
            }
    }
    else if($item=='5'){
        $sqlpax = "SELECT pax FROM f32ee.kottehclub_bookings WHERE name='$bookedname' and contact_number ='$bookedcontactnumber' and email = '$bookedemail';";
            if ($result = mysqli_query($conn, $sqlpax)){
                $bookedpax = mysqli_fetch_row($result);
                echo $bookedpax[0];
            }
    }
    else if($item=='6'){
        $sqlseat1 = "SELECT seat1 FROM f32ee.kottehclub_bookings WHERE name='$bookedname' and contact_number ='$bookedcontactnumber' and email = '$bookedemail';";
        $sqlseat2 = "SELECT seat2 FROM f32ee.kottehclub_bookings WHERE name='$bookedname' and contact_number ='$bookedcontactnumber' and email = '$bookedemail';";
        $sqlseat3 = "SELECT seat3 FROM f32ee.kottehclub_bookings WHERE name='$bookedname' and contact_number ='$bookedcontactnumber' and email = '$bookedemail';";
        $sqlseat4 = "SELECT seat4 FROM f32ee.kottehclub_bookings WHERE name='$bookedname' and contact_number ='$bookedcontactnumber' and email = '$bookedemail';";
        if ($result1 = mysqli_query($conn, $sqlseat1)){
            if ($result2 = mysqli_query($conn, $sqlseat2)){
                if ($result3 = mysqli_query($conn, $sqlseat3)){
                    if ($result4 = mysqli_query($conn, $sqlseat4)){
                        $bookedseat1 = mysqli_fetch_row($result1);
                        $bookedseat2 = mysqli_fetch_row($result2);
                        $bookedseat3 = mysqli_fetch_row($result3);
                        $bookedseat4 = mysqli_fetch_row($result4);
                        echo $bookedseat1[0]."  ".$bookedseat2[0]."  ".$bookedseat3[0]."  ".$bookedseat4[0];
                    }
                }
                         
            }

        }
    }
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
    <script src="scrollToTop.js" defer></script>
</head>
<body>
<button id="scrollToTopBtn"><img src="media/upArrow.png" id="scrollToTopImg" ></button>
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
            <img src="media/wallpaper.jpg" alt="header" class="wallpaper">
        </div>
        <div class="item3">
            <div class="retrieve" style="color: white;">
				<table id="retrievedbooking" style="text-align:left;">
                <form action="checkbooking2.php" method="post">
					<tr>
						<td><?php found() ?></td>
					</tr>
					<tr>
                        <td>Movie :&nbsp<?php retrieve(1) ?></td>       
					</tr>
					<tr>
						<td>Cinema :&nbsp<?php retrieve(2) ?></td>
					</tr>
					<tr>
						<td>Date :&nbsp<?php retrieve(3) ?></td>
					</tr>
                    <tr>
						<td>Time :&nbsp<?php retrieve(4) ?></td>
					</tr>
                    <tr>
						<td>Pax :&nbsp<?php retrieve(5) ?></td>
					</tr>
                    <tr>
						<td>Seat selected :&nbsp<?php retrieve(6) ?></td>
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