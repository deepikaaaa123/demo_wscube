<?php
$insert == false;
if(isset($_POST['name'])){

    
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to this database fail due to" . mysqli_connect_error());
    }
    //echo "Success connecting to the tb";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO trip . `trip` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `other`, `dd`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
//echo $sql;

if($con->query($sql)==true){
    //echo "Successfully inserted";
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg2" src="bg2.jpeg" alt="IIT Khadakpur">
    <div class="container">
        <h1>Welcome to IIT Khadakpur US Trip Form</h1>
        <p>Enter your details and submit this form to conform your participation in the trip</p>
    <?php
    if($insert == true){

       echo "<p class='submitmsg'><i>Thanks for submitting your form. we are happy to see you joining us for the US trip</i></p>";
    }
    ?>
        <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name:">
        <input type="text" name="age" id="age" placeholder="Enter your age:">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender:">
        <input type="email" name="email" id="email" placeholder="Enter your email:">
        <input type="text" name="phone" id="phone" placeholder="Enter your phone:">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
        <button class="btn">Submit</button>
        </form> 
    </div>

<script src="index.js"></script>
</body>
</html>



