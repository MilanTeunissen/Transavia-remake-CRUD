<?php
if (isset($_POST['berichtSubmit'])) {

    require_once("../includes/connector.php");

    $sql = "INSERT INTO berichten (Naam, Email, bericht) VALUES (:Naam, :Email, :bericht)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':Naam', $_POST['Naam']);
    $stmt->bindParam(':Email', $_POST['Email']);
    $stmt->bindParam(':bericht', $_POST['bericht']);
    $stmt->execute();

    header('Location: ../contact.php');
}