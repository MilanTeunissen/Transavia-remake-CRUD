<?php 
require_once("connector.php");
$dataTable = "crud-ict";
$sql = "select * FROM vluchten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
        
        echo   "<tr>";
        echo   "<td>" . $result['vluchthaven'] ."</td>";
        echo   "<td>" . $result['bestemming'] ."</td>";
        echo   "<td>" . $result['datum'] ."</td>";
        echo   "<td>" . $result['personen'] ."</td>";
        echo   "<td>" . $result['beschrijven'] ."</td>";
        echo   "</tr>"; 
    }