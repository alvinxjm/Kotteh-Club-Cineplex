<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kotteh Club Cineplex</title>
    <link rel="stylesheet" href="assets/cinema.css">
    <script type="text/javascript" src="assets/javascript.js"></script>
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
                <li class="nav"><a href="checkbooking.html">Check Booking</a></li>
            </ul>
        </div>
        <div class="item3">
        <form action="assets/buytickets.php" method="post">
            <table class="buyticketstable">
                <tr>
                    <td>
                        <label for="movie">Movie : </label>
                        <select name="movie" id="movie">
                            <option value="marvel">Marvel Studios' Shang-Chi And The Legend Of The Ten</option>
                            <option value="notimetodie">No Time To Die</option>
                            <option value="bossbaby">The Boss Baby: Family Business</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cinema">Cinema :</label>
                        <select name="cinema" id="cinema">
                            <option value="jewel">Jewel</option>
                            <option value="payalebar">Paya Lebar</option>
                            <option value="northpoint">North Point</option>
                            <option value="causewaypoint">Causeway Point</option>
                            <option value="jurongpoint">Jurong Point</option>
                            <option value="jcube">Jcube</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="movies">Date :</label>
                        <input type="date" name="date" id="date"  min='2021-10-16' max='2021-11-11'></input>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="time">Time : </label>
                        <select name="time" id="time">
                            <option value="3pm">3.00pm</option>
                            <option value="6pm">6.00pm</option>
                            <option value="9pm">9.00pm</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pax">Pax : </label>
                        <select name="pax" id="pax">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" id="submit"></td>
                </tr>
            </table>
        </form>
        </div>
    
        <div class="footer">
            <h1 class="footer">Connect with us on our social media platforms!</h1>

        </div>
    </div>


</body>
</html>