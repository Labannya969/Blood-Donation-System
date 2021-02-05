<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,500&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
    #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 90%;
        margin: 5px;
        text-align: center;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 18px;

    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #FF5733;
        color: white;
    }

    .cls1 h2 {
        padding: 15px;
        background-color: #11146b;
        text-align: center;
        font-family: 'Raleway', sans-serif;
        margin: 5px;
        border-radius: 10px;
        color:white;
    }
    .cls1 p{
      text-align: center;
      font-family: 'Raleway', sans-serif;
    }
    </style>
</head>

<body>
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "doner_reg";

// Create a connection
$con = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$con){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    //echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `patient_info`";
$result = mysqli_query($con, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
?>
    

    
    <?php
if($num> 0){
    
$sql= "SELECT * FROM `patient_info`";
$result= mysqli_query($con,$sql);
?>

    <div class="cls1">
        <legend><h2>Requests</h2></legend>
    </div>
    <div class="cls1">
        <?php
echo "<p>There are $num requests</p>";

?>


    </div>
    <table id="customers" style="margin: 0px auto;">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>age</th>
            <th>Gender</th>
            <th>Blood Group</th>
            
            <th>Phone Number</th>
            <th>Address</th>
            <th>Date  Time</th>
        </tr>

        <?php
while($row=mysqli_fetch_assoc($result)){
    //echo $row['name'];
    //echo"<br>";
    $id1= $row['id'];
    $name2=$row['name'];
    $age3=$row['age'];
    $gender4=$row['gender'];
    $blood5=$row['blood_group'];
    $date8=$row['date'];
    $phone9= $row['phone'];
    $address10= $row['address'];

?>
        <tr>

            <td><?php echo  $id1  ?></td>
            <td><?php echo $name2 ?></td>
            <td><?php echo $age3 ?></td>
            <td><?php echo $gender4 ?></td>
            <td><?php echo $blood5 ?></td>
            <td><?php echo $phone9 ?></td>
            <td><?php echo $address10 ?></td>
            <td><?php echo $date8 ?></td>


            <?php
}
?>
        </tr>
        <?php
}
?>
    </table>


</body>

</html>