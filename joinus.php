<?php
    $conn = mysqli_connect('localhost', 'root', '', 'jenicedb');
    $registrationMessage = ""; // Initialize the registration message variable
    
    if(isset($_POST['submit'])){
        $teamName = mysqli_real_escape_string($conn, $_POST['teamName']);
        $pos1 = mysqli_real_escape_string($conn, $_POST['pos1']);
        $pos2 = mysqli_real_escape_string($conn, $_POST['pos2']);
        $pos3 = mysqli_real_escape_string($conn, $_POST['pos3']);
        $pos4 = mysqli_real_escape_string($conn, $_POST['pos4']);
        $pos5 = mysqli_real_escape_string($conn, $_POST['pos5']);

        $query = "INSERT INTO jointbl (teamName, pos1, pos2, pos3, pos4, pos5)
                  VALUES ('$teamName', '$pos1', '$pos2', '$pos3', '$pos4', '$pos5')";
        
        if(mysqli_query($conn, $query)){
        } else {
            echo mysqli_error($conn);
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
</head>
<body>
    <div class="container">
        <h1>Join the Battle!</h1>
        <p><?php echo $registrationMessage; ?></p>
        <form method="POST" action="#">
            <label for="teamName">Team Name</label>
            <input type="text" placeholder="Enter Team Name" name="teamName" id="teamName" required>

            <label for="pos1">Position 1 (IGN)</label>
            <input type="text" placeholder="Enter IGN" name="pos1" id="pos1" required>

            <label for="pos2">Position 2 (IGN)</label>
            <input type="text" placeholder="Enter IGN" name="pos2" id="pos2" required>

            <label for="pos3">Position 3 (IGN)</label>
            <input type="text" placeholder="Enter IGN" name="pos3" id="pos3" required>

            <label for="pos4">Position 4 (IGN)</label>
            <input type="text" placeholder="Enter IGN" name="pos4" id="pos4" required>

            <label for="pos5">Position 5 (IGN)</label>
            <input type="text" placeholder="Enter IGN" name="pos5" id="pos5" required>

            <button type="submit" name="submit" class="registerbtn" a href="enddesign.php">Register Your Team!</button>
        </form>
    </div>


</body>
</html>
