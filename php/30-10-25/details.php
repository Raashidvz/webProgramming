<?php
    if(isset($_REQUEST["details"])){
        $name=$_REQUEST["name"];
        $email=$_REQUEST["email"];
        $address=$_REQUEST["address"];
        $gender=$_REQUEST["gender"];
        $dob=$_REQUEST["dob"];
        echo "<h1>Personal Details</h1>";
        echo "Name : $name<br>Email : $email<br>Address : $address<br>Gender : $gender<br>Date of Birth : $dob<br>";
    }
?>