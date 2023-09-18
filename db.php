<?php
$servername = "localhost";
    $username = "kirt13_chat";
    $password = "baFG76WKf3";

    $database = "kirt13_chat";

     // Create a connection
     $conn = mysqli_connect($servername,
         $username, $password, $database);

          if($conn) {
        echo "";
    }
    else {
        die("Error". mysqli_connect_error());
    }
   ?>

