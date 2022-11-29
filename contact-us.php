<?php
$name = $_POST["name"];
$email = $_POST["email"];
$sub=$_POST["subject"];
$msg=$_POST["msg"];

$servername = "localhost";
$username = "root";
$password = "";
$database ="assignment_2 db";

// Create connection
$db = mysqli_connect($servername, $username, $password,$database);
// Check connection
if ($db === false) {
  die("Connection failed: " . mysqli_connect_error());
}
// else {echo "Connected successfully"; }
$sql = "INSERT INTO `messages`(`Email`, `Name`, `Subject`, `Message`) VALUES ('$email','$name','$sub','$msg')";
if(mysqli_query($db,$sql)){
    echo "<script>alert('Send Successful!!')</script>";
    echo "<script>location.href='login.html'</script>";

}else{
    echo "ERROR";
}
mysqli_close($db);
?>