<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="num" placeholder="Enter number to find factorial">
        <button type="submit" name="factorial">Submit</button>
    </form>

    <?php
        if(isset($_POST["num"])){
            $num=$_POST["num"];
            $factorial=1;
            if($num > 1){            
                for($i=2;$i<=$num;$i++){
                    $factorial*=$i;
                }
            }
            echo "<br>Factorial of $num is $factorial";
            
        }else{
            echo "Hello";
        }
    ?>
</body>
</html>