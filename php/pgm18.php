<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Names</title>
</head>
<body>
    <h3>Enter student names</h3>
    <form action="" method="post">
        <p>Enter names seperated by commas</p>
        <input type="text" name="names" required size="60">
        <button type="submit" name="display_names">Display</button>
    </form>

    <?php
        if(isset($_POST["display_names"])){

            // $names=$_POST["names"];
            // echo "<h6>INPUT</h6>";
            // print_r($names);

            $names=explode(",",$_POST['names']);
            // echo "<h6>After explode</h6>";
            // print_r($names);

            $names=array_map('trim',$names);
            // echo "<h6>After array_map</h6>";
            // print_r($names);

            echo "<h3>Original Array: <h3>";
            print_r($names);

            $asc=$names;
            asort($asc);
            echo "<h3>Sorted in Ascending order (asort): <h3>";
            print_r($asc);

            $dsc=$names;
            arsort($dsc);
            echo "<h3>Sorted in Descending order (arsort): <h3>";
            print_r($dsc);
        }
    ?>
</body>
</html>