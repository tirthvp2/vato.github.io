    <?php

include "db.php";

$sql = "Select * from live_chat  order by id desc limit 50";
   $query = $conn->query($sql);
   if($query->num_rows>0){

while($row=$query->fetch_assoc()){
?>

<!---
 <p style="font-size:8px;display:inline-block;width:100px;">MID : <?php echo $row["id"];?></p>
     <p style="font-size:9px;display:color:red;inline-block;width:100px;">::<?php echo $row["name"];?></p>
     --->
     <span class="w3-padding w3-rounded" style="background:;font-weight:bold;width:auto;white-space:pre-wrap;word-wrap:break-word;">
     <?php echo $row["conv"];?></span>


<br>
     <span  style="font-size:10px;color:blue;display:inline-block;width:100px;">
     <?php echo date("d-m-y h:i:sa",$row["time_stamp"]);?></span>
<br></br>
    <?php

}
}else{
 echo "No Messages Yet";
}

    ?>
