<?php
session_start();
// $_SESSION['username'] = $_POST["uName"];
include 'connectDB.php';
include 'functions.php';
include 'client_login.php';
$uname = $_POST["uName"];
$upass = $_POST["uPass"];
isEmpty($uname,$upass);
  $sql= "SELECT * FROM `user` WHERE 1";
  $result = mysqli_query($db,$sql) or die(mysqli_error());
  $noOfData = mysqli_num_rows($result);
  while($row1 = mysqli_fetch_assoc($result)){
    if($row1['Uname'] == "$uname" && $row1['Password'] == "$upass"){
      if($uname == 'Admin'){
        $_SESSION['username'] = $_POST["uName"];
        header("location:admin.php");
      }
    } else {
       echo "<script>alert('Email or Password incorrect!!')</script>"; 
       echo "<script>location.href='login.html'</script>";
       break; 
    }
  }?>  
