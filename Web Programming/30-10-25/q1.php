<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd or Even</title>
</head>
<body>
    <form action="" method="GET">
        Enter a number <input type="text" name="num">
        <button type="submit" name="oddcheck">Submit</button>
    </form>

    <?php
        if(isset($_GET["oddcheck"])){
            $num=$_GET["num"];
            if($num%2==0){
                echo "$num is Even";
            }else{
                echo "$num is Odd";
            }
        }
    ?> 
</body>
</html>