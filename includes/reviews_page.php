<?php 
require_once("includes/connector.php");
$sql = "select * FROM reviews";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':validate', $_POST['validate']);
$stmt->execute();
$result = $stmt->fetchAll();

    
    if($_GET['validate'] === 1) {
        echo   "<div class='Menu'>";
        echo   "<p class='Menu_head'>" . $result['naam'] ."</p>";
        echo   "<p class='Menu_text'>" . $result['beschrijving'] ."</p>";
        echo   "<p class='Menu_text'>€" . $roundedPrice ."</p>";
        echo   "</div>"; 

    }
 

