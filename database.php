<?php
include "db.php";


if($_POST["conv"] !== "") {

    // Include file which makes the
    // Database Connection.

    $conv = htmlspecialchars($_POST["conv"]);

    $user = "ux".rand(1111,9999)."@root";

                 $time_stamp = time();





            $sqlx = "INSERT INTO live_chat(conv,name,time_stamp) VALUES ('$conv','$user',
                 '$time_stamp')";



            if ($conn->query($sqlx)) {
                echo "0";

            }else{ echo "1";}




}else{

    echo "2";
}
?>
