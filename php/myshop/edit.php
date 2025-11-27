<?php
    //Create connection
    $connection=mysqli_connect("localhost","root","","mes");

    $id="";
    $name="";
    $email="";
    $phone="";
    $address="";

    $errorMessage="";
    $successMessage="";

    if($_SERVER['REQUEST_METHOD']=='GET'){
        //GET method: Show he data of the client
        if(!isset($_GET["id"])){
            header("location: clients.php");
            exit;
        }
        $id=$_GET["id"];

        //read the row of the elected client from database table
        $sql="SELECT * FROM clients WHERE id='$id'";
        $result=mysqli_query($connection,$sql);
        $row=mysqli_fetch_array($result);
        
        if(!$row){
            header("location: clients.php");
            exit;
        }

        $name=$row["namee"];
        $email=$row["email"];
        $phone=$row["phone"];
        $address=$row["addresss"];

    }else{
        //POST method: Update the data of the client

        $id=$_POST["id"];
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $address=$_POST["address"];

        do{
            if(empty($id)||empty($name)||empty($email)||empty($phone)||empty($address)){
                $errorMessage="All the fields are required";
                break;
            }

            $sql="UPDATE clients SET namee='$name', email='$email', phone='$phone', addresss='$address' WHERE id=$id";
            $result=mysqli_query($connection,$sql);

            if(!$result){
                $errorMessage="Invalid query: ".$connection->error;
                break;
            }

            $successMessage="Client updated successfully";

            header("location:clients.php");
            exit;

        }while(false);

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>New Client</h2>

        <?php
            if(!empty($errorMessage)){
                echo "
                    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>".$errorMessage."</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                ";
            }
        ?>
        <form method="post">
            <input type="text" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                </div>
            </div>

            <?php
                if(!empty($successMessage)){
                    echo "
                        <div class='row mb-3'>
                            <div class='offset-sm-3 col-sm-6'>
                                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                    <strong>".$successMessage."</strong>
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            </div>
                        </div>
                    ";
                }

            ?>

            <div class="row mb-3 ">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="clients.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>