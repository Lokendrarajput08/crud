<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sign Up</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='signup.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='main.js'></script>
</head>
<body>
    <div class="registerform">
        <h1>Registration Form</h1>
        <div class="avatar">
            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
        </div>
        <form action="" method="POST" >
            <input type="text" name="FullName" required placeholder="Full Name">
            <input type="email" name="Email" required placeholder="Email"><br>
            <input type="tel"  name="Mobile" pattern="[1-9]{1}[0-9]{9}" maxlength="10" required placeholder="Mobile NO">
            <select class="dropdown" name="State" >
                <option value="">--Select State--</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
            </select> <br>
            <select class="dropdown" name="City">
                <option value="">--Select City--</option>
                <option value="Andhra Pradesh">Visakhapatnam</option>
                <option value="Vijayawada">Vijayawada</option>
                <option value="Srikakulam">Srikakulam</option>
                <option value="Bhimavaram">Bhimavaram</option>
            </select>
            <input type="text" name="Address" required placeholder="Address"><br>
            <input type="password" name="Password" required placeholder="Password">
            <input type="password" name="RePassword" required placeholder="Re-Password"><br>
            <button type="submit" name="submit" >Submit</button>
        </form>
    </div>

    <button class="open-button" onclick="back()">Back</button>

<script>
    function back(){
        window.location="main.php";
    }
</script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['submit'])){
     $FullName=$_POST['FullName'];
     $Email=$_POST['Email'];
     $Mobile=$_POST['Mobile'];
     $State=$_POST['State'];
     $City=$_POST['City'];
     $Address=$_POST['Address'];
     $Password=$_POST['Password'];
     $RePassword=$_POST['RePassword'];
if($Password==$RePassword){

   $insert="insert into register(FullName,Email,Mobile,State,City,Address,Password) values('$FullName','$Email','$Mobile','$State','$City','$Address','$Password')";

   $run_insert=mysqli_query($conn,$insert);
   if($run_insert===true){
       echo "<H5 style='color:green;text-align:center;'>Successfully Inseted</h5>";
   }else{
       echo "<H5 style='color:red;text-align:center;'>Not Inseted Email Already Used</h5>";  //.mysqli_error($conn)
   }
}else{
    echo "<H5 style='color:red;text-align:center;'>Password is not Matched with RE-Entered Password</h5>";
}
}

?>

</body>
</html>