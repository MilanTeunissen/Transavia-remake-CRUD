<?php
if (isset($_POST['toevoegenSubmit'])) {

    require_once("../includes/connector.php");

    $sql = "INSERT INTO accounts (naam, achternaam, wachtwoord, datum, email) VALUES (:naam, :achternaam, :wachtwoord, :datum, :email)";

    $hashedPassword = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':naam', $_POST['naam']);
    $stmt->bindParam(':achternaam', $_POST['achternaam']);
    $stmt->bindParam(':wachtwoord', $hashedPassword);
    $stmt->bindParam(':datum', $_POST['datum']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->execute();

    header('Location: ../pages/login-page.php');

} else {
    header('Location: ../register-page.php');
}