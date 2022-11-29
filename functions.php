<?php
function status($var){
    include 'connectDB.php';
    $sql = "SELECT * FROM `client` WHERE `Email`= '$var'";
    $result=mysqli_query($db,$sql) or die(mysqli_error());
    $noOfData = mysqli_num_rows($result);
    if($noOfData == 1){
        echo "Member"; 
    } else{ echo "Non-Member";}
}
function chkEmail($var){
    include 'connectDB.php';
    $sql = "SELECT * FROM `client` WHERE `Email`= '$var'";
    $result=mysqli_query($db,$sql) or die(mysqli_error());
    $noOfData = mysqli_num_rows($result);
    if($noOfData == 1){
        echo "<script>alert('Email already taken!!!')</script>"; 
        echo "<script>location.href='registration_page.html'</script>";
    } 
}

function isEmpty($var,$var2){
    if(empty($var) or empty($var2)){
        echo "<script>alert('Email or Password empty!!')</script>"; 
        echo "<script>location.href='login.html'</script>"; 
       }
}
?>