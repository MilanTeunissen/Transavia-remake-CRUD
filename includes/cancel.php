<?php 
session_start();
var_dump($_SESSION['ID']);
var_dump($_GET['ID']);
    if (isset($_GET['name'])) {
        require_once("connector.php");
        $dataTable = "crud-ict";
        $sql = "DELETE FROM boekingen WHERE ID = :ID";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':ID', $_GET['ID']);
        $stmt->execute();
    
        header('Location: ../boekingen.php');
    
    }