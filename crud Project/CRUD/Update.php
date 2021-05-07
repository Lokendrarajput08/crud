<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Updata </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='signup.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
        <?php 
            $conn = mysqli_connect('localhost', 'root', '', 'crud');
            if(isset($_GET['edit'])){
              $edit_email=$_GET['edit'];
        
            $select="select * from register where Email='$edit_email'";
            $run=mysqli_query($conn,$select);
        
              $row_user=mysqli_fetch_array($run);
              $FullName=$row_user['FullName'];
              $Mobile=$row_user['Mobile'];
              $Email=$row_user['Email'];
              $State=$row_user['State'];
              $City=$row_user['City'];
              $Address=$row_user['Address'];
              $Password=$row_user['Password'];
        }
        ?>
               <div class="registerform">
        <h1>Update Form</h1>
        <div class="avatar">
            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
        </div>
        <form action="" method="POST" >
            <input type="text" name="FullName" value="<?php echo $FullName; ?>" required placeholder="Full Name">
            <input type="email" name="Email"value="<?php echo $Email; ?>" required placeholder="Email"><br>
            <input type="tel"  name="Mobile" value="<?php echo $Mobile; ?>" pattern="[1-9]{1}[0-9]{9}" maxlength="10" required placeholder="Mobile NO">
            <select class="dropdown" name="State" >
                <option value=""><?php echo $State; ?></option>
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
                <option value=""><?php echo $City; ?></option>
                <option value="Andhra Pradesh">Visakhapatnam</option>
                <option value="Vijayawada">Vijayawada</option>
                <option value="Srikakulam">Srikakulam</option>
                <option value="Bhimavaram">Bhimavaram</option>
            </select>
            <input type="text" name="Address" value="<?php echo $Address; ?>" required placeholder="Address"><br>
            <input type="password" name="Password" value="<?php echo $Password; ?>" required placeholder="Password">
            <input type="password" name="RePassword" required placeholder="Re-Password"><br>
            <button type="submit" name="submit" >Update</button>
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
             $eFullName=$_POST['FullName'];
             $eMobile=$_POST['Mobile'];
             $eEmail=$_POST['Email'];
             $eState=$_POST['State'];
             $eCity=$_POST['City'];
             $eAddress=$_POST['Address'];
             $ePassword=$_POST['Password'];
             $eRePassword=$_POST['RePassword'];
        
        if($ePassword==$eRePassword){
        
           $update="update register set FullName='$eFullName',Mobile='$eMobile',State='$eState',City='$eCity',Address='$eAddress',Password='$ePassword' where  Email='$edit_email'";
        
           $run_update=mysqli_query($conn,$update);
           if($run_update===true){
               echo "<H5 style='color:green;text-align:center;'>Successfully Updated</h5>";
           }else{
               echo "<center><H5 style='color:red;text-align:center;'>Not Inseted</h5></center>".mysqli_error($conn);
           }
        }else{
            echo "<H5 style='color:red;text-align:center;'>Password is not Matched with RE-Entered Password</h5>";
        }
        }
        
        ?>
</body>
</html>