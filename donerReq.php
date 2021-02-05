<?php
$insert = false;

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
    }else{ //echo "Success connecting to the db";
   }

    // Collect post variables
  $name=  $_POST['name'];
  $age=$_POST['age'];
  $gender =$_POST['gender'];  
  $blood =$_POST['blood_group'];
  $phone =$_POST['phone'];
  $address =$_POST['address'];
    
    $sql = "INSERT INTO `doner_reg`.`patient_info` (`name`, `age`, `gender`, `blood_group`,`phone`, `address`) VALUES ('$name', '$age', '$gender', '$blood', '$phone', '$address');";
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
}?>
<script> alert(You are added to the doner list.)</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/donerAs.css">


</head>

<body>
    <div class="containers">
        <h1>Patients Information</h1>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks. We will inform you, when we find the correct match</p>";
        }
    ?>

        <div class="container" style="
    font-family: 'Roboto', sans-serif;">

            <form action="donerReq.php" method="Post">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Full Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="name" name="name" placeholder="Your name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="age">Age</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="age" name="age">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="age">Gender</label>
                    </div>
                    <div class="col-75">
                        <input type="radio" id="male" name="gender" value="male">Male
                        <input type="radio" id="female" name="gender" value="female">Female
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="blood group">Blood group</label>
                    </div>
                    <div class="col-75">
                        <select id="blood_group" name="blood_group">
                            <option value="australia">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                </div>



                <div class="row">
                    <div class="col-25">
                        <label for="age">Phone Number</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="phone" name="phone" placeholder="+8801********" required>
                    </div>
                </div>


                <div class="row">
                    <div class="col-25">
                        <label for="subject">Adress</label>
                    </div>
                    <div class="col-75">

                        <textarea name="address" id="address" placeholder="Please include your City & District"
                            style="height:100px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Submit" name="sub_btn">
                </div>
            </form>
        </div>


</body>

</html>