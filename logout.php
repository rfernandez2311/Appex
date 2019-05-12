<?php
  session_destroy();
  unset($_SESSION['student']);
  header("location: Login.php");

