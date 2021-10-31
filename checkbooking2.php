<?php

$bookedname = $_POST["bookedname"];
$bookedcontactnumber = $_POST["bookedcontactnumber"];
$bookedemail = $_POST["bookedemail"];
$result2;
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	return;
}
function found(){
    $conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
    $bookedname = $_POST["bookedname"];
    $bookedcontactnumber = $_POST["bookedcontactnumber"];
    $bookedemail = $_POST["bookedemail"];
    $search = "SELECT 1 FROM f32ee.kottehclub_bookings WHERE name='$bookedname' and contact_number ='$bookedcontactnumber' and email = '$bookedemail';";
    if ($result = mysqli_query($conn, $search)){
        $result1 = mysqli_fetch_row($result);
        if($result1[0]==null){
            $results2=$result1[0];
            echo "We could not find your booking &#128542";
            return $results2;
        }
        else{
            $results2=$result1[0];
            echo "Booking Found";
            return $results2;
        }
    }
    
}
$results2=found();


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
            <div class="retrieve" style="color: white;">


						<br><br><h1><?php found() ?></h1>
                
                    <div id="bookingfound" style="display:none">
                    <table id="retrievedbooking" style="text-align:left;color:white">
					<tr>
                        <td><label>Movie :&nbsp</label><?php retrieve(1) ?></td>       
					</tr>
					<tr>
						<td><label>Cinema :&nbsp</label><?php retrieve(2) ?></td>
					</tr>
					<tr>
						<td><label>Date :&nbsp</label><?php retrieve(3) ?></td>
					</tr>
                    <tr>
						<td><label>Time :&nbsp</label><?php retrieve(4) ?></td>
					</tr>
                    <tr>
						<td><label>Pax :&nbsp</label><?php retrieve(5) ?></td>
					</tr>
                    <tr>
						<td><label>Seat selected :&nbsp</label><?php retrieve(6) ?></td>
					</tr>
                    <tr></tr>
                    <tr><td style="text-align:center"><h2>See you at our cinema!</h2></td></tr>
                    </table>
                    </div>
                    <div id="bookingnotfound" style="display:block">
                        <br><br><br>
                        <a href="buytickets.php" class="button">Buy Tickets Now</a>
                        <br><br><br>
                    </div>
				
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

    <script type="text/javascript">
        var bookingfoundshow = document.getElementById("bookingfound");
        var bookingnotfoundshow = document.getElementById("bookingnotfound");
        var bookingfound = "<?php echo $results2; ?>";
        if(bookingfound=="1"){
            bookingfoundshow.style.display="block";
            bookingnotfoundshow.style.display="none";
        }
        else{
            bookingfoundshow.style.display="none";
            bookingnotfoundshow.style.display="block";
        }
    </script>

</body>
</html>