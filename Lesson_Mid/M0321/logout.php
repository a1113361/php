<?php
session_start();
//$_SESSION=array();
session_destroy();
//$_SESSION["check"]="No";
header("Location:login.php");
?>