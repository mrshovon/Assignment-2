<?php
include 'functions.php';
include 'connectDB.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$num = $_POST['num'];
chkEmail($email);
$sql3 = "INSERT INTO `client`(`First_Name`, `Last_Name`, `Email`, `Password`, `Number`) VALUES ('$fname','$lname','$email','$pass','$num')";
if(mysqli_query($db,$sql3)){
    echo "<script>alert('Registration Successful!!')</script>";
    echo "<script>location.href='login.html'</script>";

}else{
    echo "ERROR";
}
mysqli_close($db);
?>