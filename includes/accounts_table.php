<?php 
require_once("../includes/connector.php");
$dataTable = "crud-ict";
$sql = "select * FROM accounts";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
        
        echo   "<tr>";
        echo   "<td>" . $result['naam'] ."</td>";
        echo   "<td>" . $result['achternaam'] ."</td>";
        echo   "<td>encrypted</td>";
        echo   "<td>" . $result['datum'] ."</td>";
        echo   "<td>" . $result['email'] ."</td>";
        echo   "</tr>"; 
    }