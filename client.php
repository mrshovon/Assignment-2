<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location:login.html");
}
 include 'connectDB.php';
    $sql2 = "SELECT * FROM `client` WHERE 1";
    $result2=mysqli_query($db,$sql2) or die(mysqli_error());
    $noOfData2 = mysqli_num_rows($result2);   
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
    <h1 class="text-center fcustom">Clients List</h1>
      <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email Address</th>
            <th>Password</th>
            <th>Number</th>
          </tr>
        </thead>
        <tbody>
          <tr><?php while($row = mysqli_fetch_assoc($result2)){?>
            <td><?php echo $row['First_Name']?></td>
            <td><?php echo $row['Last_Name']?></td>
            <td><?php echo $row['Email']?></td>
            <td><?php echo $row['Password']?></td>
            <td><?php echo $row['Number']?></td>
          </tr> <?php }?>
        </tbody>
      </table>
      </div>
      <br>
      <h6 class="text-center"> Number of Clients: <?php echo $noOfData2?></h6>
      <div class="text-center fcustom">
        <form action="logout.php">
        <button class="btn btn-warning">Logout</button>
        <button class="btn btn-info" formaction="admin.php">Customer Feedback</button>
        </form>
      </div>
    </body>