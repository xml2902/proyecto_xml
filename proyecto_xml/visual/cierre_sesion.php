<?php 
session_start();
unset($_SESSION["comprobado"]);
header('location: ../index.php');
 ?>