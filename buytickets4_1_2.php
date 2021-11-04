<?php

session_start();

$movie=$_POST['movie'];
$cinema=$_POST['cinema'];
$date=$_POST['date'];
$time=$_POST['time'];
$pax=$_POST['pax'];

$_SESSION["movie"] = $movie;
$_SESSION["cinema"] = $cinema;
$_SESSION["date"] = $date;
$_SESSION["time"] = $time;
$_SESSION["pax"] = $pax;


$seat1 = $_SESSION["seat1"];
$seat2 = $_SESSION["seat2"];
$seat3 = $_SESSION["seat3"];
$seat4 = $_SESSION["seat4"];

$name = $_SESSION["name"];
$contactnumber = $_SESSION["contactnumber"];
$email = $_SESSION["email"];



function valid1(){
    $pax=$_POST['pax'];
    if($pax=='1'||$pax=='2'||$pax=='3'||$pax=='4'){
        echo "required";
    }
}
function valid2(){
    $pax=$_POST['pax'];
    if($pax=='2'||$pax=='3'||$pax=='4'){
        echo "required";
    }
}
function valid3(){
    $pax=$_POST['pax'];
    if($pax=='3'||$pax=='4'){
        echo "required";
    }
}
function valid4(){
    $pax=$_POST['pax'];
    if($pax=='4'){
        echo "required";
    }
}



function insert($seat_id){
    session_start();
    $movie = $_SESSION["movie"];
    $cinema = $_SESSION["cinema"];
    $date = $_SESSION["date"];
    $time = $_SESSION["time"];
    $pax=$_POST['pax'];

    if($pax=='1'){
        $require1 = 'required';
        $require2 = null;
        $require3 = null;
        $require4 = null;
    }
    else if($pax=='2'){
        $require1 = 'required';
        $require2 = 'required';
        $require3 = null;
        $require4 = null;
    }
    else if($pax=='3'){
        $require1 = 'required';
        $require2 = 'required';
        $require3 = 'required';
        $require4 = null;
    }
    else if($pax=='4'){
        $require1 = 'required';
        $require2 = 'required';
        $require3 = 'required';
        $require4 = 'required';
    }

    $table = "kottehclub_".$movie;
	$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
	$sql = "SELECT Seat FROM f32ee.$table WHERE Cinema='$cinema' and Time ='$time' and Date = '$date' and Seat_ID =$seat_id;";
    $sql2 = "SELECT Taken FROM f32ee.$table WHERE Cinema='$cinema' and Time ='$time' and Date = '$date' and Seat_ID =$seat_id;";
	if ($result = mysqli_query($conn, $sql)) {
        if ($result2 = mysqli_query($conn, $sql2)){
		    $seat_prompt = mysqli_fetch_row($result);
            $taken = mysqli_fetch_row($result2);
            if ($taken[0]=='0'){
		        echo $seat_prompt[0];
            }
            else{
                echo $seat_prompt[0]."  (Unavailable)";
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
                
                <form action="buytickets4_2_3.php" method="post">
                <table>
                <tr><td colspan='2'><img src="media/prog2.png" alt="header"></td></tr>
                <tr>
                    <td><img src="media/seating.JPG" alt="seating" ></td>
                    <td>
                        <div class="box">
                        <div id="showseat1"><label for="seat1">Select your seat : </label>
                            <select name="seat1" id="seat1" onchange="noduplicate1()" <?php valid1() ?>>
                                <option disabled selected value> -- select an option -- </option>
                                <option selected value="<?php echo $seat1 ?>"><?php echo $seat1 ?></option>
                                <option value="<?php insert(1) ?>"><?php insert(1) ?></option>
                                <option value="<?php insert(2) ?>"><?php insert(2) ?></option>
                                <option value="<?php insert(3) ?>"><?php insert(3) ?></option>
                                <option value="<?php insert(4) ?>"><?php insert(4) ?></option>
                                <option value="<?php insert(5) ?>"><?php insert(5) ?></option>
                                <option value="<?php insert(6) ?>"><?php insert(6) ?></option>
                                <option value="<?php insert(7) ?>"><?php insert(7) ?></option>
                                <option value="<?php insert(8) ?>"><?php insert(8) ?></option>
                                <option value="<?php insert(9) ?>"><?php insert(9) ?></option>
                                <option value="<?php insert(10) ?>"><?php insert(10) ?></option>
                                <option value="<?php insert(11) ?>"><?php insert(11) ?></option>
                                <option value="<?php insert(12) ?>"><?php insert(12) ?></option>
                                <option value="<?php insert(13) ?>"><?php insert(13) ?></option>
                                <option value="<?php insert(14) ?>"><?php insert(14) ?></option>
                                <option value="<?php insert(15) ?>"><?php insert(15) ?></option>
                                <option value="<?php insert(16) ?>"><?php insert(16) ?></option>
                                <option value="<?php insert(17) ?>"><?php insert(17) ?></option>
                                <option value="<?php insert(18) ?>"><?php insert(18) ?></option>
                                <option value="<?php insert(19) ?>"><?php insert(19) ?></option>
                                <option value="<?php insert(20) ?>"><?php insert(20) ?></option>
                                <option value="<?php insert(21) ?>"><?php insert(21) ?></option>
                                <option value="<?php insert(22) ?>"><?php insert(22) ?></option>
                                <option value="<?php insert(23) ?>"><?php insert(23) ?></option>
                                <option value="<?php insert(24) ?>"><?php insert(24) ?></option>
                                <option value="<?php insert(25) ?>"><?php insert(25) ?></option>
                            </select>
                            </div>
                            <br>
                        </div>
                        <div id="showseat2">
                            <div class="box">
                            <label for="seat2">Select your 2nd seat : </label>
                            <select name="seat2" id="seat2" onchange="noduplicate2()" <?php echo valid2() ?>>
                                <option disabled selected value> -- select an option -- </option>
                                <option selected value="<?php echo $seat2 ?>"><?php echo $seat2 ?></option>
                                <option value="<?php insert(1) ?>"><?php insert(1) ?></option>
                                <option value="<?php insert(2) ?>"><?php insert(2) ?></option>
                                <option value="<?php insert(3) ?>"><?php insert(3) ?></option>
                                <option value="<?php insert(4) ?>"><?php insert(4) ?></option>
                                <option value="<?php insert(5) ?>"><?php insert(5) ?></option>
                                <option value="<?php insert(6) ?>"><?php insert(6) ?></option>
                                <option value="<?php insert(7) ?>"><?php insert(7) ?></option>
                                <option value="<?php insert(8) ?>"><?php insert(8) ?></option>
                                <option value="<?php insert(9) ?>"><?php insert(9) ?></option>
                                <option value="<?php insert(10) ?>"><?php insert(10) ?></option>
                                <option value="<?php insert(11) ?>"><?php insert(11) ?></option>
                                <option value="<?php insert(12) ?>"><?php insert(12) ?></option>
                                <option value="<?php insert(13) ?>"><?php insert(13) ?></option>
                                <option value="<?php insert(14) ?>"><?php insert(14) ?></option>
                                <option value="<?php insert(15) ?>"><?php insert(15) ?></option>
                                <option value="<?php insert(16) ?>"><?php insert(16) ?></option>
                                <option value="<?php insert(17) ?>"><?php insert(17) ?></option>
                                <option value="<?php insert(18) ?>"><?php insert(18) ?></option>
                                <option value="<?php insert(19) ?>"><?php insert(19) ?></option>
                                <option value="<?php insert(20) ?>"><?php insert(20) ?></option>
                                <option value="<?php insert(21) ?>"><?php insert(21) ?></option>
                                <option value="<?php insert(22) ?>"><?php insert(22) ?></option>
                                <option value="<?php insert(23) ?>"><?php insert(23) ?></option>
                                <option value="<?php insert(24) ?>"><?php insert(24) ?></option>
                                <option value="<?php insert(25) ?>"><?php insert(25) ?></option>
                            </select>
                            </div>
                            <br>
                        </div>
                        <div id="showseat3">
                            <div class="box">
                            <label for="seat3">Select your 3rd seat : </label>
                            <select name="seat3" id="seat3" onchange="noduplicate3()" <?php echo valid3() ?>>
                                <option disabled selected value> -- select an option -- </option>
                                <option selected value="<?php echo $seat3 ?>"><?php echo $seat3 ?></option>
                                <option value="<?php insert(1) ?>"><?php insert(1) ?></option>
                                <option value="<?php insert(2) ?>"><?php insert(2) ?></option>
                                <option value="<?php insert(3) ?>"><?php insert(3) ?></option>
                                <option value="<?php insert(4) ?>"><?php insert(4) ?></option>
                                <option value="<?php insert(5) ?>"><?php insert(5) ?></option>
                                <option value="<?php insert(6) ?>"><?php insert(6) ?></option>
                                <option value="<?php insert(7) ?>"><?php insert(7) ?></option>
                                <option value="<?php insert(8) ?>"><?php insert(8) ?></option>
                                <option value="<?php insert(9) ?>"><?php insert(9) ?></option>
                                <option value="<?php insert(10) ?>"><?php insert(10) ?></option>
                                <option value="<?php insert(11) ?>"><?php insert(11) ?></option>
                                <option value="<?php insert(12) ?>"><?php insert(12) ?></option>
                                <option value="<?php insert(13) ?>"><?php insert(13) ?></option>
                                <option value="<?php insert(14) ?>"><?php insert(14) ?></option>
                                <option value="<?php insert(15) ?>"><?php insert(15) ?></option>
                                <option value="<?php insert(16) ?>"><?php insert(16) ?></option>
                                <option value="<?php insert(17) ?>"><?php insert(17) ?></option>
                                <option value="<?php insert(18) ?>"><?php insert(18) ?></option>
                                <option value="<?php insert(19) ?>"><?php insert(19) ?></option>
                                <option value="<?php insert(20) ?>"><?php insert(20) ?></option>
                                <option value="<?php insert(21) ?>"><?php insert(21) ?></option>
                                <option value="<?php insert(22) ?>"><?php insert(22) ?></option>
                                <option value="<?php insert(23) ?>"><?php insert(23) ?></option>
                                <option value="<?php insert(24) ?>"><?php insert(24) ?></option>
                                <option value="<?php insert(25) ?>"><?php insert(25) ?></option>
                            </select>
                            </div>
                            <br>
                        </div>
                        <div id="showseat4">
                            <div class="box">
                            <label for="seat4">Select your 4th seat : </label>
                            <select name="seat4" id="seat4" onchange="noduplicate4()" <?php echo valid4() ?>>
                                <option disabled selected value> -- select an option -- </option>
                                <option selected value="<?php echo $seat4 ?>"><?php echo $seat4 ?></option>
                                <option value="<?php insert(1) ?>"><?php insert(1) ?></option>
                                <option value="<?php insert(2) ?>"><?php insert(2) ?></option>
                                <option value="<?php insert(3) ?>"><?php insert(3) ?></option>
                                <option value="<?php insert(4) ?>"><?php insert(4) ?></option>
                                <option value="<?php insert(5) ?>"><?php insert(5) ?></option>
                                <option value="<?php insert(6) ?>"><?php insert(6) ?></option>
                                <option value="<?php insert(7) ?>"><?php insert(7) ?></option>
                                <option value="<?php insert(8) ?>"><?php insert(8) ?></option>
                                <option value="<?php insert(9) ?>"><?php insert(9) ?></option>
                                <option value="<?php insert(10) ?>"><?php insert(10) ?></option>
                                <option value="<?php insert(11) ?>"><?php insert(11) ?></option>
                                <option value="<?php insert(12) ?>"><?php insert(12) ?></option>
                                <option value="<?php insert(13) ?>"><?php insert(13) ?></option>
                                <option value="<?php insert(14) ?>"><?php insert(14) ?></option>
                                <option value="<?php insert(15) ?>"><?php insert(15) ?></option>
                                <option value="<?php insert(16) ?>"><?php insert(16) ?></option>
                                <option value="<?php insert(17) ?>"><?php insert(17) ?></option>
                                <option value="<?php insert(18) ?>"><?php insert(18) ?></option>
                                <option value="<?php insert(19) ?>"><?php insert(19) ?></option>
                                <option value="<?php insert(20) ?>"><?php insert(20) ?></option>
                                <option value="<?php insert(21) ?>"><?php insert(21) ?></option>
                                <option value="<?php insert(22) ?>"><?php insert(22) ?></option>
                                <option value="<?php insert(23) ?>"><?php insert(23) ?></option>
                                <option value="<?php insert(24) ?>"><?php insert(24) ?></option>
                                <option value="<?php insert(25) ?>"><?php insert(25) ?></option>
                            </select>
                            </div>
                            <br>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:center"><input type="submit" class="button" id="seatsdone" value="Proceed to enter particulars"></td>
                </tr>
            </table>
            </form>   
            
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
        
    </div>

    <script type="text/javascript">
            var numberofpax1 = "<?php echo $pax ?>";
            console.log(numberofpax1)
            var showseat1 = document.getElementById("showseat1");
            var showseat2 = document.getElementById("showseat2");
            var showseat3 = document.getElementById("showseat3");
            var showseat4 = document.getElementById("showseat4");

            if (numberofpax1 == "1") {
            paxnumber="1"
            showseat1.style.display = "block";
            showseat2.style.display = "none";
            showseat3.style.display = "none";
            showseat4.style.display = "none";
            }

            if (numberofpax1 == "2") {
                paxnumber="2"
                showseat1.style.display = "block";
                showseat2.style.display = "block";
                showseat3.style.display = "none";
                showseat4.style.display = "none";
            }

            if (numberofpax1 == "3") {
                paxnumber="3"
                showseat1.style.display = "block";
                showseat2.style.display = "block";
                showseat3.style.display = "block";
                showseat4.style.display = "none";
            }

            if (numberofpax1 == "4") {
                paxnumber="4"
                showseat1.style.display = "block";
                showseat2.style.display = "block";
                showseat3.style.display = "block";
                showseat4.style.display = "block";
            }
    </script>    

</body>
<footer>
    
</footer>
</html> 



