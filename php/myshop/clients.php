<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>List of Clients</h2>
        <a class="btn btn-primary" href="create.php" role="button">New Client</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    //Create connection
                    $dbcon=mysqli_connect("localhost","root","","mes");
                    if(!$dbcon){
                        die("Connection Failed");
                    }

                    //read all row from database table
                    $sql="SELECT * FROM clients";
                    $result=mysqli_query($dbcon,$sql);
                    if(!$result){
                        die("Table Not Found!");
                    }

                    //read data of each row
                    $count=mysqli_num_rows($result);
                    while($count>0){
                        $row=mysqli_fetch_array($result);
                        
                            echo "<tr><td>".$row['id']."</td>";
                            echo "<td>".$row['namee']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['phone']."</td>";
                            echo "<td>".$row['addresss']."</td>";
                            echo "<td>".$row['created_at']."</td>";
                            echo "<td>";
                                echo "<a class='btn btn-primary btn-sm' href='edit.php?id=".$row['id']."'>Edit</a>";
                                echo "<a class='btn btn-danger btn-sm' href='delete.php?id=".$row['id']."'>Delete</a>";
                           echo "</td></tr> "; 
                        
                        

                        $count--;
                    }

                ?>
                
            </tbody>
        </table>
    </div>
    
</body>
</html>