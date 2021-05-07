<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'crud');
if(!isset($_SESSION['Email'])){
  echo "<script> window.open('in.php','_self') </script>";
}
$User=$_SESSION['Email'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <!-- Latest compiled and minified CSS -->
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
    <div class="topnav">

        <h4>CRUD</h4>
        <h6 style="padding-left: 200px;"><?php echo "$User"; ?></h6>
    </div>
    <div class="sidenav">
        <h4>Admin</h4>
        <a href="#Profile">Profile</a>
        <a href="#Data">Data</a>
        <a href="#Table">Table</a>
        <a href="signup.php">Add User</a>
        <a href="Logout.php">LogOut</a>
      </div>

<!-- ======== Profile=========================================================================================== -->
<?php
  $conn = mysqli_connect('localhost', 'root', '', 'crud');
  $select="select * from register where Email='$User'";
  $run=mysqli_query($conn,$select);

      $row_user=mysqli_fetch_array($run);
      $FullName=$row_user['FullName'];
      $Mobile=$row_user['Mobile'];
      $Address=$row_user['Address'];
      $State=$row_user['State'];
      // $Password=$row_user['Password'];
      // $RePassword=$row_user['RePassword'];
      // if($FullName==" " && $Mobile=" " ){
      //   echo "<script> window.open('in.php','_self') </script>";
      // }else{
?>
<!-- ========PHP Profile============================================= -->
    <div class="main">
        <hr id="Profile"><hr>  
        <div class="container"  style="min-height: 100vh;">
            <h2>Profile :</h2>
                <div class="main-body">
                      <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                          <div class="card">
                            <div class="card-body">
                              <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                  <h4 style="text-transform: capitalize;"><?php echo $FullName; ?></h4>
                                  <p class="text-secondary mb-1">Full Stack Developer</p>
                                  <p class="text-muted font-size-sm" style="text-transform: capitalize;"><?php echo $Address; ?></p>
                                  <button class="btn btn-outline-primary">Message</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="card mb-3">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary" style="text-transform: capitalize;">
                              <?php echo $FullName; ?>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                              <?php echo "$User"; ?>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">State</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                              <?php echo "$State"; ?>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Mobile</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <?php echo "$Mobile"; ?>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary" style="text-transform: capitalize;">
                                <?php echo $Address;?>
                                </div>
                                <hr>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
<!-- ======== Profile================================================================================= -->

<!-- ======== Data==================================================================================== -->
<hr id="Data"><hr>  
    <div class="container"  style="min-height: 100vh;">
        <h2>Data :</h2>
         <div class="row gutters-sm">
            <div class="col-sm-6 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                                  <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                  <small>Web Design</small>
                                  <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <small>Website Markup</small>
                                  <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <small>One Page</small>
                                  <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <small>Mobile Template</small>
                                  <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <small>Backend API</small>
                                  <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                              <div class="card h-100">
                                <div class="card-body">
                                  <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                  <small>Web Design</small>
                                  <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <small>Website Markup</small>
                                  <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <small>One Page</small>
                                  <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <small>Mobile Template</small>
                                  <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <small>Backend API</small>
                                  <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
<!-- ======== Data============================================================================================== -->


<!-- ================================================= table====================================================== -->      
    <hr id="Table"><hr>
    <div class="container"  style="min-height: 100vh;">
        <h2>Table :</h2>
<!-- =========php table=================== -->
<?php 
 $conn = mysqli_connect('localhost', 'root', '', 'crud');
 if(isset($_GET['del'])){
   $del_email=$_GET['del'];
   $delete="delete from register where Email='$del_email'";
   $run_del=mysqli_query($conn,$delete);
   if($run_del===true){
     echo "<div style='color:green;text-align:center;'>Record Deleted Successfully </div> ";
    }else{
     echo "<div style='color:red;text-align:center;'>Try Again</div>";
   }
 }
?>
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">FullName</th>
                  <th scope="col">Email</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">State</th>
                  <th scope="col">City</th>
                  <th scope="col">Address</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>

<?php
  $conn = mysqli_connect('localhost', 'root', '', 'crud');
  $select="select * from register";
  $run=mysqli_query($conn,$select);

  while($row_user=mysqli_fetch_array($run)){
    $ID=$row_user['id'];
      $FullName=$row_user['FullName'];
      $Email=$row_user['Email'];
      $MobileNo=$row_user['Mobile'];
      $State=$row_user['State'];
      $City=$row_user['City'];
      $Address=$row_user['Address'];
?>
              <tbody>
                <tr>
                  <!-- <th scope="row">2</th> -->
                  <td><?php echo $ID; ?></td>
                  <td><?php echo $FullName; ?></td>
                  <td><?php echo $MobileNo; ?></td>
                  <td><?php echo $Email; ?></td>
                  <td><?php echo  $State; ?></td>
                  <td><?php echo $City; ?></td>
                  <td><?php echo $Address; ?></td>
                  <td>
                  <a href="update.php?edit=<?php echo $Email; ?>" class="btn btn-primary" title="Edit"><i class="fas fa-pen"></i></a>
                  <a href="main.php?del=<?php echo $Email; ?>" class="btn btn-danger" title="Delete"><i class="fas fa-trash-alt"></i></a>
                  </td>
                </tr>
                <?php } ?>
                </tbody>
          </table>
    </div>
<!-- ======== TAble============================================================================================ -->

<!-- ======== UPdate============================================================================================ -->
 
<!-- ======== UPdate============================================================================================ -->

</body>
</html>