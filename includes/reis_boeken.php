<?php 
require_once("../includes/connector.php");
$dataTable = "crud-ict";
$sql = "INSERT INTO vluchten.* FROM boekingen JOIN accounts ON accounts.ID = boekingen.accountID JOIN vluchten ON vluchten.ID = boekingen.vluchtID WHERE boekingen.accountID = :loggedInUserID";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':loggedInUserID', $_SESSION['ID']);
$stmt->execute();
