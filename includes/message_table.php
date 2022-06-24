<?php 
require_once("../../includes/connector.php");
$dataTable = "crud-ict";
$sql = "select * FROM berichten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
        
        echo   "<tr>";
        echo   "<td class='messages'>" . $result['Naam'] ."</td>";
        echo   "<td class='messages'>" . $result['Email'] ."</td>";
        echo   "<td class='messages'>" . $result['bericht'] ."</td>";
        echo   "</tr>"; 
    }