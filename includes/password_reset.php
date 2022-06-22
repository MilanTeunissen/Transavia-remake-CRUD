<?php 

    if (isset($_GET['ID'])) {
        require_once("session.php");
        $sql = "UPDATE accounts SET wachtwoord = :wachtwoord WHERE ID = :ID";

        $hashedPassword = password_hash('welkom123', PASSWORD_DEFAULT);
        
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':wachtwoord', $hashedPassword);
        $stmt->bindParam(':ID', $_GET['ID']);
        $stmt->execute();
    }
    
    header('Location: ../pages/adminpages/admin-home.php');

