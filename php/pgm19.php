<?php
    $conn=mysqli_connect("localhost","root","","raashid");
    if($conn){
        echo "Connected";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book Details</title>
</head>
<body>
    <h3>Add Book Details</h3>
    <form action="" method="post">
        Book No. <input type="number" name="book_no" required><br>
        Title <input type="text" name="title"><br>
        Edition <input type="text" name="edition"><br>
        Publisher <input type="text" name="publisher"><br>
        <button type="submit" name="add_book">Add Book</button>
    </form>
    <h3>Search Book</h3>
    <form action="" method="get">
        Title <input type="text" name="search">
        <button type="submit" name="search_book">Search</button>
    </form>

    <?php
        $conn=mysqli_connect("localhost","root","","raashid");
        if(!$conn){
            die("Connection Failed : ".mysql_connect_error());
        }

        if(isset($_POST["add_book"])){
            $book_no=$_POST["book_no"];
            $title=$_POST["title"];
            $edition=$_POST["edition"];
            $publisher=$_POST["publisher"];

            $sql="INSERT INTO book_details VALUES('$book_no','$title','$edition','$publisher')";
            if(mysqli_query($conn,$sql)){
                echo "<p>Book Added Successully</p>";
            }
        }

        if(isset($_GET["search"])){
            $query="SELECT * FROM book_details";
            if(!$_GET["search"]==""){
                $query="SELECT * FROM book_details WHERE title like '%".$_GET['search']."%'";
            }
                
            // }
            $result=mysqli_query($conn,$query);
            // print($query);

            echo "<h3>Book Records</h3>";
            echo "
                <table border='1' cellpadding='5'>
                <tr>
                    <th>Book No.</th>
                    <th>Title</th>
                    <th>Edition</th>
                    <th>Publisher</th>
                </tr>";
                while($row=mysqli_fetch_assoc($result)){
                    echo "
                        <tr>
                            <td>{$row['book_no']}</td>
                            <td>{$row['title']}</td>
                            <td>{$row['edition']}</td>
                            <td>{$row['publisher']}</td>
                        </tr>";
                }
            echo "</table>";
            mysqli_close($conn);
            }
            
        // }
    ?>
</body>
</html>