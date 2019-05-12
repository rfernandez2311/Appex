<?php
session_start();

require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = $_POST["student"];
    $pwd = $_POST["password"];
  

    $query = "SELECT * FROM users ;";
   
    
    
    
    if (!$query) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

    
     $stu= $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($result)) {

        if ($user == $row['userid'] && $pwd == $row['password']) { 
            
         
         $_SESSION['userid'] = $stu;
            header("Location: home.php");
            mysqli_close($con);
            exit();

        }
    }

       //After you have checked that the username is correct.
      
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="CSS/Login.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>APEX LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <script src="main.js"></script>
</head>


<body>

    <img class="logo" src="Photos/Appex.png">
    <div class="bg"></div>

    <form method="POST" class="login">
        <h1 class="login-title">Login</h1>
        <input type="text" name="student" class="login-input" placeholder="Student Id" autofocus required>
        <input type="password" name="password" class="login-input" placeholder="Password" required>
        <input type="submit" value="Submit" class="login-button">
        <p class="login-lost"><a href="">Forgot Password?</a></p>
    </form>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
    $('.message a ').click(function() {
        $('form').animate({
            height: "toggle",
            opacity: "toggle"
        }, "slow");
    });
    </script>

</body>

</html>