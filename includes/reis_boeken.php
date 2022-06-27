<?php 
session_start();
    if (isset($_GET['name'])) {
        require_once("../includes/connector.php");
        $dataTable = "crud-ict";
        $sql = "INSERT INTO boekingen (accountID, vluchtID) VALUES (:accountID, :vluchtID)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':accountID',$_SESSION['ID']);
        $stmt->bindParam(':vluchtID', $_GET['ID']);
        $stmt->execute();
    
        header('Location: ../boekingen.php');
    
    }
