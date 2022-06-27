<?php
if (isset($_GET['validate'])) {

    require_once("connector.php");

    $sql = "UPDATE reviews SET validate = :validate WHERE ID = :ID;";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':validate', $_GET['validate']);
    $stmt->bindParam(':ID', $_GET['ID']);
    $stmt->execute();

    header('Location: admin-home.php');

}