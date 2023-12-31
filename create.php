<?php
$name= " ";
$email= " ";
$phone= " ";
$address= " ";

$errorMessage="";
$successMessage="";

if( $_SERVER['REQUEST_METHOD']=='POST')
{
   $name = $_POST["name"];
   $email = $_POST["email"];
   $phone = $_POST["phone"];
   $address = $_POST["address"];

 


    do{
        if(empty($name) || empty($email) || empty($phone) || empty($address) )
        {
            $errorMessage= "All the fields are required";
            break;

        }
        //add new client to database
        $name="";
        $email="";
        $phone= "";
        $address= "";
        $successMessage= "Client added correctly";

    
    }
    while(false);
 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container my-5">
        <h2>New Client</h2>

        <?php 
        if(!empty($errorMessage))
        {
            echo"
            <div class='alert alert-warning alert-dismissable fade show' role='alert'>
            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
            </div>


            
            ";

        }
        
        ?>

        <form method="post" action="">
            <div class="row mb-3">
                <label class=" col-sm-3 col-form-label" for="">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name;?>">

                </div>
            </div>

            <div class="row mb-3">
                <label class=" col-sm-3 col-form-label" for="">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
                    
                </div>
            </div>

            <div class="row mb-3">
                <label class=" col-sm-3 col-form-label" for="">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Phone" value="<?php echo $phone;?>">
                    
                </div>
            </div>

            <div class="row mb-3">
                <label class=" col-sm-3 col-form-label" for="">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="Address" value=" <?php echo $address;?>">
                    
                </div>
            </div>

            <?php 
              if( !empty($successMessage))
              {
                echo"
                <div class='row mb-3'>
                
                <div class='offset-sm-3 col-sm-6'>
                <div class='alert alert-success alert-dismissable fade show' role='alert'>
                <strong>$successMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                </div>
                </div>
    
                </div>
                
                ";
              }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/myshop/index.php" role="button">Cancel</a>

                </div>

            </div>



        </form>

    </div>
</body>
</html>