<?php
if (isset($_GET['searchInput'])) {
    require_once("connector.php");
    $likeInput = '%'.$_GET['searchInput'].'%';

    $sql = "SELECT * FROM vluchten WHERE vluchthaven LIKE :input OR bestemming LIKE :input2 OR datum LIKE :input3 OR personen LIKE :input4";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":input", $likeInput);
    $stmt->bindParam(":input2", $likeInput);
    $stmt->bindParam(":input3", $likeInput);
    $stmt->bindParam(":input4", $likeInput);
    $stmt->execute();   
    $results = $stmt->fetchAll();

    $vluchtenSearch = false;
    if ($stmt->rowCount() > 0) {
        $vluchtenSearch = true;
    }

    if ($vluchtenSearch == true) {
        foreach ($results as $result){
            echo   "<div class='vakantie_naam'>";
            echo   "<h1 class='vakantie_bestemming'>" . $result['bestemming'] ."</h1>";
            echo   "<p class='vakantie_vluchthaven'>" . $result['vluchthaven'] ."</p>";
            echo   "<p class='vakantie_datum'>" . $result['datum'] ."</p>";
            echo   "<p class='vakantie_personen'>" . $result['personen'] ."</p>";
            echo   "<button class='vakantie_boeken'>Boeken</button>";
            echo   "</div>";  

        }
    } else {

        echo "We hebben helaas niks kunnen vinden op " . $_GET['searchInput'];
    }
}
   