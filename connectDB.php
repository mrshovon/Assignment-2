<?php

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

?>