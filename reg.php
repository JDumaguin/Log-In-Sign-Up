<?php
include "connection.php";
$conn->query("INSERT INTO tbltry VALUES('". $_POST["emailReg"] ."','". $_POST["passReg"] ."','". $_POST["fname"] ." ". $_POST["lname"] ."','". $_POST["month"] ." ,". $_POST["date"] ." ,". $_POST["year"] ."','". $_POST["sex"] ."')");
header("location: index.php");
?>