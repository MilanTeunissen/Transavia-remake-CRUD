<?php 
require_once("../../includes/connector.php");
session_start();
$dataTable = "crud-ict";
$sql = "SELECT vluchten.* FROM boekingen JOIN accounts ON accounts.ID = boekingen.accountID JOIN vluchten ON vluchten.ID = boekingen.vluchtID WHERE boekingen.accountID = :loggedInUserID";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':loggedInUserID', $_SESSION['ID']);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
        echo   "<p>" . $result['vluchthaven'] ."</p>";
        echo   "<p>" . $result['bestemming'] ."</p>";
        echo   "<p>" . $result['datum'] ."</p>";
        echo   "<p>" . $result['personen'] ."</p>";
        echo   "<p>" . $result['beschrijven'] ."</p>";
    }