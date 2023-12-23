<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn = mysqli_connect('localhost', 'root', '', 'jenicedb');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $query = "SELECT * FROM jenicetbl WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {

        header("Location: enddesign.php");
        exit();
    } else {
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontenddesign.css">
    <title>Jenice MLBB Tournament</title>
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo" style="font-size: 40px;">JeNice</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#" >HOME</a></li>
                    <li><a href="#" >CONTACTS</a></li>
                </ul>
            </div>
        </div>

        <div class="content" style="margin-top:7%">
            <h1>JeNice Online <br><span>Registration</span> <br>MLBB Tournament</h1>
            <p class="par">Grab your team, choose your hero, and compete against the best <br>Mobile Legends: Bang Bang players across Brgy.Timbain Calaca City, Batangas. <br>Battle online and then take your team to the finals for a chance at 10,000 Pesos with Trophies<br> and medals. Don’t miss out, sign up today!</p>

            <button class="cn"><a href="#" onclick="showPopup('joinPopup')" style="font-weight: bold; color: white;">JOIN US</a></button>

            <div class="form">
                <h2>Login Here</h2>
                <form method="POST" action="">
                    <input type="email" name="email" placeholder="Enter Email Here" required>
                    <input type="password" name="password" placeholder="Enter Password Here" required>
                    <button type="submit" class="btnn">Login</button>
                </form>
                <p class="link">Don't have an account<br>
                    <a href="register.php">Sign up </a> here</p>

                <?php
                if (isset($loginMessage)) {
                    echo "<p>$loginMessage</p>";
                }
                ?>
            </div>
        </div>
    </div>

    <div id="contactsPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup('contactsPopup')">&times;</span>
            <p>Contact Information:</p>
            <p>Jerwin V. Perez <br>09919395150 <br>Jerwinperez023@gmail.com <br>Elijah P. Laberinto <br>09453057954 <br>elijahlaberinto1509@gmail.com <br>Nicholo I. Manalo <br>09695694234 <br>manalonicholo16@gmail.com <br>Ivan Dick P. Araja <br>09265575085 <br>Arajaivan775@gmail.com <br>Clifford C. Maliwat <br>09067032810 <br>maliwatclifford1@gmail.com <br>Erwin P. Tenorio <br>09363510185 <br>erwintenorio98@gmail.com </p>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2023 JeNice. All rights reserved.</p>
    </footer>
</body>
</html>
