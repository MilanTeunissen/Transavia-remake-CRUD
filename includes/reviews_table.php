<?php 
require_once("../../includes/connector.php");
$dataTable = "crud-ict";
$sql = "select * FROM reviews";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
        
        echo   "<tr>";
        echo   "<td>" . $result['naam'] ."</td>";
        echo   "<td>" . $result['bericht'] ."</td>";
        echo   "<td>" . $result['rating'] ."</td>";
        echo   "<td>" . $result['bestemming'] ."</td>";
        echo   "<td>" . $result['validate'] ."</td>";
        echo   "</tr>"; 
    }