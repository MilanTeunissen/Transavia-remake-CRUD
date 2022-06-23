<?php 
require_once("../../includes/connector.php");
$dataTable = "crud-ict";
$sql = "select vluchten.* FROM boekingen JOIN accounts ON accounts.ID = boekingen.accountID JOIN vluchten ON vluchten.ID = boekingen.vluchtID";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
        echo   "<p>" . $result['vluchthaven'] ."</p>";
        echo   "<p>" . $result['bestemming'] ."</p>";
        echo   "<p>" . $result['datum'] ."</p>";
        echo   "<p>" . $result['personen'] ."</p>";
        echo   "<p>" . $result['beschrijven'] ."</p>";
    }