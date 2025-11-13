<?php
    session_start();
    if($_SESSION["username"]==""){
        die("Invalid user credentials");
    }
    $user=$_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <center>
        <h1>Welcome <?php echo"$user"; ?></h1>
        <a href="logout.php">Logout</a>
    </center>
</body>
</html>