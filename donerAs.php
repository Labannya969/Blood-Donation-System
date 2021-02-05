<?php //include('donerAsdb.php') ?>
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
        <h1>Donor Registration</h1>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
        }
    ?>

        <div class="container" style="
    font-family: 'Roboto', sans-serif;">

            <form action="donerAs.php" method="Post">
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
                            <option value="A+">A+</option>
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
                        <label for="age">Weight</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="weight" name="weight" placeholder="kg">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="division">Division</label>
                    </div>
                    <div class="col-75">
                        <select id="division" name="division">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Borishal">Borishal</option>
                            <option value="khulna">khulna</option>
                            <option value="Rangpur">Rangpur</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="subject">Last doneted</label>
                    </div>
                    <div class="col-75">
                        <input id="date" type="date" name="date" value="2020-01-01">
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