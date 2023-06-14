<?php require_once("config.php");
if (!isset($_SESSION["login_sess"])) {
    header("location:login.php");
}
$email = $_SESSION["login_email"];
$findresult = mysqli_query($dbc, "SELECT * FROM users WHERE email= '$email'");
if ($res = mysqli_fetch_array($findresult)) {
    $username = $res['username'];
    $fname = $res['fname'];
    $lname = $res['lname'];
    $email = $res['email'];
    $image = $res['image'];
}
?>
<!DOCTYPE html>
<html lang="">

<head>
    <link rel="shortcut icon" type="x-icon" href="images\ico.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <title>Home-EGO</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        a,
        a:visited {
            color: #090909;
        }

        a:hover {
            color: #EE0000;
        }
    </style>

</head>
<link rel="stylesheet" href="css\home.css" media="all" type="text/css">

<body>
    <header>
        <div class="nav container">
            <i class='bx bx-menu' id="menu-icon"></i>
            <a href="#" class="logo">E<span>GO</span></a>
            <h1>hello &nbsp;<span>
                    <a href="account.php"><?php echo $username; ?></a>
                </span></h1>
            <a href="logout.php">Logout</a>
            <ul class="navbar">
                <li><a href="#Home" class=active>Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="maps.html">Maps</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="feedback.html">Feedback</a></li>
            </ul>
            <i class='bx bx-search' id="search-icon"></i>
            <div class="search-box container">
                <input type="search" name="" placeholder="search here...">
            </div>
        </div>
    </header>
    <section class="home" id="home">
        <div class="home-text">
            <h2>The time is right for <br>electric<span>scooters</span>
            </h2>
            <p>When you’re on your Bird, but can’t fly over morons in the traffic that make it impossible to<br>
                commute on an electric scooter… “That awkward moment when you’re wearing Nikes and<br> you can’t do
                it!”</p>
            <a href="scanner.html" class="btn">Scan now</a>
        </div>
    </section>
    <section class="footer">
        <div class="footer-container container">
            <div class="footer-box">
                <a href="#" class="logo">E<span>GO</span></a>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                </div>
            </div>
            <div class="footer-box">
                <h3>call us</h3>
                <p>04692 8276765241</p>
                <p>04692 8925616345</p>
            </div>
            <div class="footer-box">
                <h3>legal</h3>
                <a href="#">privacy</a>
                <a href="#">refund policy</a>
                <a href="#">cookie policy</a>
            </div>
            <div class="footer-box">
                <h3>contact</h3>
                <p>United States</p>
                <p>Germany</p>
                <p>Japan</p>
                <p>India</p>
            </div>
        </div>
    </section>
    <div class="copyright">
        <p>$#169; Electric Scooter All Right Reserved</p>
    </div>


    <script src="javascript\home.js"></script>


</body>

</html>