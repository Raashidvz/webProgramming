<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="details.php" method="REQUEST">
        Name <input type="text" name="name" required> <br>
        Email ID <input type="email" name="email" required> <br>
        Address <input type="text" name="address" required> <br>
        Gender <input type="radio" name="gender" value="male" checked> Male <input type="radio" name="gender" value="female"> female <br>
        Date of birth <input type="date" name="dob" required><br>
        <button type="submit" name="details">Submit</button>
    </form>

    <?php
        if(isset($_REQUEST["details"])){
            $name=$_REQUEST["name"];
            $email=$_REQUEST["email"];
            $address=$_REQUEST["address"];
            $gender=$_REQUEST["gender"];
            $dob=$_REQUEST["dob"];

            echo "<br><br>Name : $name<br>Email : $email<br>Address : $address<br>Gender : $gender<br>Date of Birth : $dob<br>";
        }
    ?>
</body>
</html>