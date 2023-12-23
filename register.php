<?php
    $conn = mysqli_connect('localhost','root','','jenicedb');
    $registrationMessage = ""; 
    
    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['psw']);
        $repeatpassword = mysqli_real_escape_string($conn, $_POST['psw-repeat']);

       
        if ($password !== $repeatpassword) {
            echo '<script>alert("Passwords do not match. Please try again.");</script>';
        } else {
            $query = "INSERT INTO jenicetbl (email, password, repeatpassword)
                      VALUES ('$email', '$password', '$repeatpassword')";
            
            if(mysqli_query($conn, $query)){
                $registrationMessage = "You are now registered! <br> Please Sign In!"; 
            } else {
                echo mysqli_error($conn);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
    <script>
        function validatePassword() {
            var password = document.getElementById("psw").value;
            var repeatpassword = document.getElementById("psw-repeat").value;

            if (password !== repeatpassword) {
                alert("Passwords do not match. Please try again.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>REGISTER</h1>
        <p>Please fill in this form to register.</p>
        <form method="POST" action="register.php" onsubmit="return validatePassword();">
            <label for="email">Email</label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="psw">Password</label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

            <label for="psw-repeat">Repeat Password</label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

            <button type="submit" name="submit" class="registerbtn">Register</button>
            <p><?php echo $registrationMessage; ?></p> 
            <p>Already have an account? <a href="frontdesign.php">Sign In</a></p>
        </form>
    </div>


</body>
</html>
