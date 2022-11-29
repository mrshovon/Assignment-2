<?php
$uname = $_POST["uName"];
$upass = $_POST["uPass"];
$servername = "localhost";
$username = "root";
$password = "";
$database ="assignment_2 db";
$chk=0;
// Create connection
$db = mysqli_connect($servername, $username, $password,$database);
// Check connection
if ($db === false) {
  die("Connection failed: " . mysqli_connect_error());
}
// else {echo "Connected successfully"; }
  $sql= "SELECT * FROM `user` WHERE 1";
  $result = mysqli_query($db,$sql) or die(mysqli_error());
  $noOfData = mysqli_num_rows($result);
  while($row1 = mysqli_fetch_assoc($result)){
    if($row1['Uname'] == "$uname" && $row1['Password'] == "$upass"){
      if($uname == 'Admin'){
        // echo "WELCOME $uname <br> Your Messages <br> <br>";
        $sql2 = "SELECT * FROM `messages` WHERE 1";
        $result2=mysqli_query($db,$sql2) or die(mysqli_error());
        $noOfData2 = mysqli_num_rows($result2);
        while($row = mysqli_fetch_assoc($result2)){
        // print_r($row);
        echo "Email: ",str_replace(array('[',']'),'',$row['Email']),"<br>"; 
        echo "Name: ",str_replace(array('[',']'),'',$row['Name']),"<br>"; 
        echo "Subject: ",str_replace(array('[',']'),'',$row['Subject']),"<br>"; 
        echo "Message: ",str_replace(array('[',']'),'',$row['Message']),"<br> <br>";
      }} 
    } else{ $chk++; if($noOfData == $chk){
            echo "Invalid User Name or Password.";
    }}
  }
mysqli_close($db);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Page</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <H1>Welcome <?php echo $uname?></H1>
  <button type = "Button" class = "btn btn-warning" action="">Logout</button>
  
  
  
</body>
</html>     