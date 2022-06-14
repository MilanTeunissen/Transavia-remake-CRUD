<?php 
require_once("connector.php");
$result['validate'] = 1;
$sql = "select * FROM reviews WHERE validate = :validate";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':validate', $result['validate']);
$stmt->execute();
$results = $stmt->fetchAll();

    
    foreach($results as $result){
        echo   "<div class='review_klant'>";
        echo   "<p class='review_naam'>" . $result['naam'] ."</p>";
        echo   "<p class='review_bericht'>" . $result['bericht'] ."</p>";
        echo   "<p class='star'>" . $result['rating'] ."</p>";
        echo   "<p class='review_bestemming'>" . $result['bestemming'] ."</p>";
        echo   "</div>"; 


    }

 

