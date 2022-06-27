<?php
session_start();
unset($_SESSION['ID']);
var_dump($_SESSION['ID']);
var_dump(isset($_SESSION['ID']));
header("location: ../index.php");
exit();
