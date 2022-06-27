<?php 
require_once("connector.php");
$dataTable = "crud-ict";
$sql = "select * FROM vluchten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
        

    }