<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $connection=mysqli_connect("localhost","root","","mes");
        $sql="DELETE FROM clients WHERE id='$id'";
        $result=mysqli_query($connection,$sql);
        
    }
    header("location:clients.php");
    exit;
?>