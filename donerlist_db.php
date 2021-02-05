<?php

if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
   else{ //echo "Success connecting to the db";
   }

    // Collect post variables
    $name=  $_POST['name'];
  $age=$_POST['age'];
  $gender =$_POST['gender'];  
  $blood =$_POST['blood_group'];
  $weight =$_POST['weight'];
  $division =$_POST['division'];
  $date =$_POST['date'];
  $phone =$_POST['phone'];
  $address =$_POST['address'];
    
    $sql = "INSERT INTO `doner_reg`.`doner` (`name`, `age`, `gender`, `blood_group`,`weight` ,`division`,`date`,`phone`, `address`) VALUES ('$name', '$age', '$gender', '$blood','$weight','$division','$date', '$phone', '$address');";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>



















?>