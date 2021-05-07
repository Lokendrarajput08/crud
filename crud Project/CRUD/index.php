<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='index.css'>
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
<div class="login">
        <h1>Login</h1>
        <form action="" method="POST">
            <center>
          <div class="avatar">
              <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
          </div>
            <input type="email" name="Email" required placeholder="Email"><br>
            <input type="password" name="Password" required placeholder="Password"><br>
            <button type="submit" name="submit" >Submit</button><br>
            <!-- <a href="signup.php">or Sign Up?</a> -->
        </center>
        </form> 
    </div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['submit'])){
     $Email=$_POST['Email'];
    //  $DOB=$_POST['DOB'];
     $Password=$_POST['Password'];
    
    $select="select * from register where Email='$Email'";
    $run=mysqli_query($conn,$select);

      $row_user=mysqli_fetch_array($run);
      $dbEmail=$row_user['Email'];
      // $dbDOB=$row_user['DOB'];
        $dbPassword=$row_user['Password'];

      if($Email==$dbEmail && $Password==$dbPassword){
          echo "<script> window.open('main.php','_self') </script>";
          $_SESSION['Email']= $dbEmail;
      }else{
          echo "<h5 style='color:red;text-align:center;'>Wrong Username or Password</h5>";
      }
}
?>
</body>
</html>