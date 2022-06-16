<?php 
 if (isset($_POST['inlogSubmit'])) {
    require_once("../includes/connector.php");

    $sql = "SELECT ID, wachtwoord, admin FROM accounts WHERE naam = :naam";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':naam', $_POST['gebruikersnaam']);
    $stmt->execute();
    $result = $stmt->fetch();

    if ($stmt->rowCount() > 0) {
        if(password_verify($_POST['wachtwoord'], $result['wachtwoord'])) {
            session_start();
            $_SESSION['ID'] = $result['ID'];

            if($result['admin'] === 1) {
                $_SESSION['admin'] = true;
                header('Location: ../pages/adminpages/admin-home.php');

            } else {
                $_SESSION['admin'] = false;
                header('Location: ../pages/klantpages/klant-home.php');

            }
        } else {
            echo "username of password incorrect!";
        }
    } else {
        echo "username of password incorrect!";
        exit();
    }}