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
        <form action="buytickets2.php" method="post" id="booking">
            <div id="firstpart">
            <table class="buyticketstable">
                <tr><td><img src="media/prog1.png" alt="header"></td>

                </tr>
                <td><h2>1 Standard Ticket - $8.00</h2></td>
                <tr>
                    <td>
                        <div class="box">
                        <label for="movie">Movie : </label>
                        <select name="movie" id="movie" required="1" >
                            <option disabled selected value> -- select an option -- </option>
                            <option value="marvel">Marvel Studios' Shang-Chi And The Legend Of The Ten</option>
                            <option value="notimetodie">No Time To Die</option>
                            <option value="bossbaby">The Boss Baby: Family Business</option>
                        </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="box">
                        <label for="cinema">Cinema :</label>
                        <select name="cinema" id="cinema" required="1">
                            <option disabled selected value> -- select an option -- </option>
                            <option value="jewel">Kottehclub @ Jewel</option>
                            <option value="payalebar">Kottehclub @ Paya Lebar</option>
                            <option value="northpoint">Kottehclub @ North Point</option>
                            <option value="causewaypoint">Kottehclub @ Causeway Point</option>
                            <option value="jurongpoint">Kottehclub @ Jurong Point</option>
                            <option value="jcube">Kottehclub @ Jcube</option>
                        </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="box">
                    <label for="date">Date :</label>
                    <select name="date" id="date" required="1">
                        <option disabled selected value> -- select an option -- </option>
                        <option value="1311">Saturday, 13th November</option>
                        <option value="1411">Sunday, 14th November</option>
                        <option value="1511">Monday, 15th November</option>
                        <option value="1611">Tuesday, 16th November</option>
                    </select>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="box">
                        <label for="time">Time : </label>
                        <select name="time" id="time" required="1">
                            <option disabled selected value> -- select an option -- </option>
                            <option value="3pm">3.00pm</option>
                            <option value="6pm">6.00pm</option>
                            <option value="9pm">9.00pm</option>
                        </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="box">
                        <label for="pax">Pax : </label>
                        <select name="pax" id="pax" required="1" >
                            <option disabled selected value> -- select an option -- </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        </div>
                        
                        
                        
                    </td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td row='2' style="text-align:center"><input type="submit" class="button" id="temp" value="Proceed to seat selection" ></td>
                </tr>
            </table>
        </form>
        </div>
        </div>
        <div class="footer">
            <h1 class="footer">Connect with us on our social media platforms!</h1>

        </div>
    


</body>
</html> 