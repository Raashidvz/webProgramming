<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","raashid");
    if(!$conn){
        die("Connection Failed : ");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        Username <input type="text" name="username" required><br><br>
        Password <input type="password" name="pswd" required><br><br>
        <button type="submit" name="login">Login</button>
        <button type="submit" name="register">Register</button>
    </form>

    <?php
        
        if(isset($_POST["login"])){
            
            $username=$_POST["username"];
            $pswd=$_POST["pswd"];

            $sql="SELECT * FROM users WHERE username='$username' OR pswd='$pswd'";
            $result=mysqli_query($conn,$sql);
            $user=mysqli_fetch_assoc($result);
            if($user){
                if($username == $user['username'] && $pswd == $user['pswd']){
                    $_SESSION["username"]=$username;
                    $s_v=$_SESSION["username"];
                    header("Location:welcome.php");
                    echo"<p>$username</p><br>";
                }else{
                    echo"Invalid username or password";
                }
            }else{
                echo"No such user";
            }
        }

        if(isset($_POST["register"])){
            // echo "register button clicked";
            $username=$_POST["username"];
            $pswd=$_POST["pswd"];

            $sql="INSERT INTO users(username,pswd) VALUES('$username','$pswd')";
            $result=mysqli_query($conn,$sql);
            
            $sql2="SELECT * FROM users WHERE username='$username' AND pswd='$pswd'";
            $result2=mysqli_query($conn,$sql2);
            $user2=mysqli_fetch_assoc($result2);
            if($user2){
                echo"Registration successfull";
            }else{
                echo"Registration failed";
            }
        }
    ?>
</body>
</html>