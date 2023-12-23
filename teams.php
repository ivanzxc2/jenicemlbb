<?php

$conn = mysqli_connect('localhost', 'root', '', 'jenicedb');

$query = 'SELECT * FROM jointbl';

$result = mysqli_query($conn, $query);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="teams.css">
    <title>Teams Participants</title>
</head>

<body>

    <h1 class="display-4 my-3 text-center fw-bold">Team Participants</h1>

    <table class="table" >
        <thead >
            <tr>
                <th scope="col" >Team Name</th>
                <th scope="col">Pos1</th>
                <th scope="col">Pos2</th>
                <th scope="col">Pos3</th>
                <th scope="col">Pos4</th>
                <th scope="col">Pos5</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user['Teamname']; ?></td>
                    <td><?php echo $user['Pos1']; ?></td>
                    <td><?php echo $user['Pos2']; ?></td>
                    <td><?php echo $user['Pos3']; ?></td>
                    <td><?php echo $user['Pos4']; ?></td>
                    <td><?php echo $user['Pos5']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <button class="cn"><a href="enddesign.php" style="font-weight: bold; color: white;">Back</a></button>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



</html>
