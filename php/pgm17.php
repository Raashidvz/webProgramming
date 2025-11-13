<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
</head>
<body>
    <form action="" method="post">
        Enter no. of units <input type="number" name="units" required>
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php
        if(isset($_POST["calculate"])){
            $units=$_POST["units"];
            $bill=0;
            if($units <= 50){
                $bill=$units * 3.5;
            }elseif($units <= 100){
                $bill=503.5+($units-50)*4.0;
            }elseif($units <= 200){
                $bill=50*3.5 + 50*4.0 + ($units-100)*5.2;
            }else{
                $bill=50*3.5+50*4.0+100*5.2+($units-200)*6.5;
            }

            echo "<h1>Total Bill for $units units = Rs ".number_format($bill,2)."/-</h1>";
        }
    ?>
</body>
</html>