<?php
require_once 'conexion.php';


$sql = "SELECT * FROM orders";

$result = mysqli_query($con, $sql);

if ($result -> num_rows > 0){
    while ($row = $result-> fetch_assoc()){
        if($row["complete"]==0){
        echo "<tr>
                <td>". $row["name"] ."</td>
                <td>". $row["studentid"] ."</td>
                <td>". $row["orderid"]."</td>
                <td>". $row["lab"]."</td>
                <td><button type='submit' value='". $row["orderid"] ."' name='order' class='btn btn-small' id='". $row["orderid"] ."'>View Order</button></td>
                <td><button type='submit' value='". $row["orderid"] ."' name='update' class='btn btn-small' id='". $row["name"] ."'>Submit</button></td>
                
             </tr>";
    }
}

}

else{
    echo "0 result";
}

?>

