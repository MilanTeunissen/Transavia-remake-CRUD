<?php 
 if (isset($_POST['inlogSubmit'])) {
    session_start();
    require_once("../includes/connector.php");

    $sql = "SELECT ID, wachtwoord FROM accounts WHERE naam = :naam";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':naam', $_POST['gebruikersnaam']);
    $stmt->execute();
    $result = $stmt->fetch();

    if ($stmt->rowCount() > 0) {
        if(password_verify($_POST['wachtwoord'], $result['wachtwoord'])) {
            $_SESSION['ID'] = $result['ID'];
            header('Location: ../pages/admin-home.php');
        } else {
            echo "username of password incorrect!";
        }
    } else {
        echo "username of password incorrect!";
        exit();
    }




} else {
    header('Location: ../pages/login-page.php');
}