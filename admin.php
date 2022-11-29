<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location:login.html");
}
 include 'connectDB.php';
 include 'functions.php';

 
    $sql2 = "SELECT * FROM `messages` WHERE 1";
    $result2=mysqli_query($db,$sql2) or die(mysqli_error());
    $noOfData2 = mysqli_num_rows($result2);
    // while($row = mysqli_fetch_assoc($result2)){
    // // print_r($row);
    // echo "Email: ",str_replace(array('[',']'),'',$row['Email']),"<br>"; 
    // echo "Name: ",str_replace(array('[',']'),'',$row['Name']),"<br>"; 
    // echo "Subject: ",str_replace(array('[',']'),'',$row['Subject']),"<br>"; 
    // echo "Message: ",str_replace(array('[',']'),'',$row['Message']),"<br> <br>";
    // }
    
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <title>Admin</title>
    </head>
    <body>
    <h1>Hello, <?php echo $_SESSION['username']?></h1>
    <h3 class="text-center fcustom">Feedback from Customers</h3>
      <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr><?php while($row = mysqli_fetch_assoc($result2)){?>
            <td><?php echo $row['Name']?></td>
            <td><?php echo $row['Email']?></td>
            <td><?php echo $row['Subject']?></td>
            <td><?php echo $row['Message']?></td>
            <td><?php status($row['Email'])?></td>
          </tr> <?php }?>
        </tbody>
      </table>
      </div>
      <br>
      <h6 class="text-center"> Number of feedbacks from customer: <?php echo $noOfData2?></h6>
      <div class="text-center fcustom">
        <form action="logout.php">
        <button class="btn btn-warning">Logout</button>
        <button class="btn btn-info" formaction="client.php">Clients List</button>
        </form>
      </div>
    </body>
    </html>