<?php 
require_once("../../includes/connector.php");
$dataTable = "crud-ict";
$sql = "select * FROM berichten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
        
        echo   "<tr>";
        echo   "<td>" . $result['Naam'] ."</td>";
        echo   "<td>" . $result['Email'] ."</td>";
        echo   "<td>" . $result['bericht'] ."</td>";
        echo   "</tr>"; 
    }