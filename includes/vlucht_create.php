<?php
if (isset($_POST['toevoegenSubmit'])) {

    require_once("connector.php");

    $sql = "INSERT INTO vluchten (vluchthaven, bestemming, datum, personen, beschrijven, prijs) VALUES (:vluchthaven, :bestemming, :datum, :personen, :beschrijven :prijs)";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':vluchthaven', $_POST['vluchthaven']);
    $stmt->bindParam(':bestemming', $_POST['bestemming']);
    $stmt->bindParam(':datum', $_POST['datum']);
    $stmt->bindParam(':personen', $_POST['personen']);
    $stmt->bindParam(':beschrijven', $_POST['beschrijven']);
    $stmt->bindParam(':prijs', $_POST['prijs']);
    $stmt->execute();

    header('Location: ../admin-home.php');

} else {
    header('Location: ../admin-home.php');
}