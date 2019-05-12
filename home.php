<?php
session_start();
require_once 'conexion.php';

$id = filter_input(INPUT_GET, "order");
$update_id = filter_input(INPUT_GET, "update");

if ($id != null){

$ordid;    
$resis;
$capa;
$batt;
$Jumper;
$ardu;
$multi;
$buzz;
$rass;
$indu;
$bread;


    $sql = "SELECT * FROM orders WHERE orderid = '". $id . "'";

    $result = mysqli_query($con, $sql);
    
    if ($result -> num_rows > 0){
        while ($row = $result-> fetch_assoc()){
            $ordid = $row ['orderid'];
            $resis = $row['resistor'];
            $capa = $row['capacitor'];
            $batt = $row['battery'];
            $Jumper = $row['wires'];
            $ardu = $row['arduino'];
            $multi = $row['multimeter'];
            $buzz = $row['buzzer'];
            $rass = $row['rasberry'];
            $indu = $row['inductor'];
            $bread = $row['breadboard'];
        }
    }

    
        
}
else if ($update_id != null){

    
    $ordid = filter_input(INPUT_GET, "resistencia");    
    $resis = filter_input(INPUT_GET, "resistencia");
    $capa =filter_input(INPUT_GET, "resistencia");
    $batt= filter_input(INPUT_GET, "resistencia");
    $Jumper= filter_input(INPUT_GET, "resistencia");
    $ardu=filter_input(INPUT_GET, "resistencia");
    $multi=filter_input(INPUT_GET, "resistencia");
    $buzz=filter_input(INPUT_GET, "resistencia");
    $rass=filter_input(INPUT_GET, "resistencia");
    $indu=filter_input(INPUT_GET, "resistencia");
    $bread=filter_input(INPUT_GET, "resistencia");
    
    
        $sql = "UPDATE orders set complete = '1', robot ='1' WHERE  orderid = '". $update_id . "'";
    
        // $result = mysqli_query($con, $sql);
    
        if (mysqli_query($con, $sql)) {
            //echo "Record updated successfully";
        } else {
            //echo "Error updating record: " . mysqli_error($con);
        }
        
        // if ($result -> num_rows > 0){
        //     while ($row = $result-> fetch_assoc()){
               
        //     }
        // }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <title>APEX Home</title>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="12">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->


    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    <!-------------------------------------------------------Nav -------------------------------------------------->
    <link rel="stylesheet" href="CSS/Home.css">
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <img src="Photos/Appex.png" id="logo" />
            <ul id="nav-mobile" class="right hide-on-med-and-down">

                <li><a href="home.php" class="effect-box">Home</a></li>
                <li><a href="inventory.php" class="effect-box">Inventory</a></li>
                <li><a href="about.php" class="effect-box">About</a></li>
                <li><a href="contact.php" class="effect-box">Contact</a></li>
                <?php echo  '<li><a href="home.php" class="name effect-box">Welcome: '.$student['username']."</a></li>";
                    ?>
            </ul>
        </div>
    </nav>

    <!-------------------------------------------------------table 1 -------------------------------------------------->
    <form action="./home.php" method="GET">
        <h1 class="title">STUDENT REQUEST</h2>

        <div class="container z-depth-2">

            <table class="highlight">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Student ID</th>
                        <th>ORDER #</th>
                        <th>LAB</th>
                    </tr>
                </thead>
                <tbody id="example">
                    
                        <?php include 'includes/order-data.php';?>   
                </tbody>
            </table>
        </div>
        </div>
        </div>

        <!-------------------------------------------------------table 2 -------------------------------------------------->
        <div class="container1 z-depth-2">
            <table class="highlight">
                <h3 class="order">Order: <?php echo $ordid ?></h3>
                <thead>
                    <tr>
                        <th>Parts</th>
                        <th>Quantity</th>
                    </tr>

                <tbody>

                    <tr>
                        <td><span id="tools">Resistor</td>
                        <td><span id="qty">
                                <?php
                                    echo $resis;
                                ?>
                                <input type="hidden" name='resistencia' value='<?php echo $resis;?>'>
                            </span></p>

                    </tr>

                    <tr>
                        <td><span id="tools">Capacitor</td>
                        <td><span id="qty"><?php
                        echo $capa;
                        ?> </span></p>

                    </tr>

                    <tr>
                        <td><span id="tools">Battery</td>
                        <td><span id="qty"><?php
                        echo $batt;
                        ?></span></p>

                    </tr>

                    <tr>
                        <td><span id="tools">Jumper Cables</td>
                        <td><span id="qty"><?php
                           echo $Jumper;
                        ?>
                            </span></p>

                    </tr>

                    <tr>
                        <td><span id="tools">BreadBoard</td>
                        <td><span id="qty"><?php
                        echo $bread;
                        ?>
                            </span></p>

                    </tr>

                    <tr>
                        <td><span id="tools">Arduino</td>
                        <td><span id="qty"><?php
                        echo $ardu;
                        ?>
                            </span></p>

                    </tr>

                    <tr>
                        <td><span id="tools">RasberryPi</td>
                        <td><span id="qty"><?php
                        echo $rass;
                        ?>
                            </span></p>

                    </tr>

                    <tr>
                        <td><span id="tools">Multimeter</td>
                        <td><span id="qty"><?php
                        echo $multi;
                        ?>
                            </span></p>

                    </tr>
                    <tr>
                        <td><span id="tools">Buzzer</td>
                        <td><span id="qty">0</span></p>

                    </tr>
                    <tr>
                        <td><span id="tools">Wire Cutter</td>
                        <td><span id="qty"><?php
                        echo $indu
                        ?>
                            </span></p>

                    </tr>

                </tbody>
        </div>
        </form>


</body>

</html>