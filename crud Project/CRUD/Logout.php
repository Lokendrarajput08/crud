<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'crud');

  echo "<script> window.open('index.php','_self') </script>";

session_destroy();
?>