<?php
    require_once("connect.php");
   
    $Ac_name = $_POST["Ac_name"];
    $Address = $_POST["Address"];
    $Ac_type = $_POST["Ac_type"];

        
    //echo "You are searching for every accommodation in our website" ;


    if (is_null($Ac_name) && is_null($Address) && $Ac_type == "All") 
        {      
        $q = "Select * from accommodatiom ";
        }

    if ( !is_null($Ac_name) && is_null($Address) && $Ac_type == "All"
        $q = "Select * from accommodatiom where Ac_name = '$Ac_name '";
    }

    if ( is_null($Ac_name) && !is_null($Address) && $Ac_type == "All")
        $q = "Select * from accommodatiom where Address = '$Address'";
    }
    if ( !is_null($Ac_type) && !is_null($Address) && $Ac_type == "All" ){
        $q = "Select * from accommodatiom where Address LIKE '%$Address%' and Ac_name LIKE '%$Ac_name%'";
    }
    


    if (is_null($Ac_name) && is_null($Address) && $Ac_type != "All" ) {  
        $q = "Select * from accommodatiom where Ac_type = '$Ac_type'";
    }

    if ( !is_null($Ac_name) && is_null($Address) && $Ac_type != "All" ){
        $q = "Select * from accommodatiom where Ac_name LIKE '%$Ac_name%' and Ac_type = '$Ac_type'";
    }

    if ( is_null($Ac_name) && !is_null($Address) && $Ac_type != "All" ){
        $q = "Select * from accommodatiom where Address LIKE '%$Address%' and Ac_type = '$Ac_type'";
    }
    if ( !is_null($Ac_type) && !is_null($Address) && $Ac_type != "All"  ){
        $q = "Select * from accommodatiom where Address LIKE '%$Address%' and Ac_name LIKE '%$Ac_name%' and Ac_type ='$Ac_type'";
    }
    
if($result= $mysqli->query($q)){
echo'<table border="1">';
echo'<tr><th>ID</th>
<th>Name</th>
<th>Type</th>
<th>Address</th>
<th>Rating</th>
<th>Booking</th>
</tr>';

while($row= $result->fetch_array()){
    echo"<tr>";
    echo "<td>".$row["Ac_ID"]."</td>";
    echo "<td>".$row["Ac_name"]."</td>";
    echo "<td>".$row["Ac_type"]."</td>";
    echo "<td>".$row["Address"]."</td>";
    echo "<td>".$row["Rating"]."</td>";

    echo "<td><a href='booking_Form.php?id=".$row['p_id']."'>Booking</a></td>";
    echo"</tr>";
}
echo '</table>';
$result->free();
}else{
    echo"Retrieval failed: ".$mysqli->error;
}
?>
