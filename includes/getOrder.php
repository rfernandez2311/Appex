<?php
require_once '../conexion.php';



$id = filter_input(INPUT_GET, "order");

if ($id != null){
    $sql = "SELECT * FROM orders WHERE orderid = ' ". $id . "'";

    $result = mysqli_query($con, $sql);
    
    if ($result -> num_rows > 0){
        while ($row = $result-> fetch_assoc()){
            echo $row['resistor'];
            // if($row["complete"]==0){
            // echo "<tr>
            //         <td>". $row["name"] ."</td>
            //         <td>". $row["studentid"] ."</td>
            //         <td>". $row["orderid"]."</td>
            //         <td>". $row["lab"]."</td>
            //         <td><button type='submit' value='". $row["orderid"] ."' name='order' class='btn btn-small' id='". $row["orderid"] ."'>View Order</button></td>
            //         <td><a href='?idDelete=".$row["orderid"]."' class='btn btn-small'>Submit</a></td>
            //      </tr>";
        }
    }
    
    mysqli_close($con);
}


?>


