<?php
if (isset($_GET['searchInput'])) {
    require_once("connector.php");
    $likeInput = '%'.$_GET['vluchthaven'].'%';
    $likeInput2 = '%'.$_GET['bestemming'].'%';
    $likeInput3 = '%'.$_GET['datum'].'%';
    $likeInput4 = '%'.$_GET['personen'].'%';

    $sql = "SELECT * FROM vluchten WHERE vluchthaven LIKE :input AND bestemming LIKE :input2 AND datum LIKE :input3 AND personen LIKE :input4";
    $roundedAverage = "SELECT AVG(rating) FROM reviews WHERE bestemming = :bestemming";

  
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":input", $likeInput);
    $stmt->bindParam(":input2", $likeInput2);
    if(isset($_GET['datum'] || !empty($_GET['datum'])))
    {
    $stmt->bindParam(":input3", $likeInput3);
    }

    if(isset($_GET['personen'] || !empty($_GET['personen'])))
    {
    $stmt->bindParam(":input4", $likeInput4);
    }

    echo "hallo";

    $stmt->execute();   
    $results = $stmt->fetchAll();

    $vluchtenSearch = false;
    if ($stmt->rowCount() > 0) {
        $vluchtenSearch = true;
    }

    if ($vluchtenSearch == true) {
        foreach ($results as $result){ ?>
            <div class='bestemmingen-container'>
            <div class='bestemmingen-container-layout'>
                <div class='bestemmingen-container-layout-img'>
                    <img src='img/destination-malaga.png'>
                </div>
                <div class='bestemmingen-container-layout-items'>
                    <h3><?php echo $result['bestemming']; ?></h3>
                    <div class='star-rating-stars'>
                        <?php 
                        if($roundedAverage === 1){
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                        } elseif ($roundedAverage === 2){
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                        } elseif ($roundedAverage === 3){
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                        } elseif ($roundedAverage === 4){
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                        } elseif ($roundedAverage === 5){
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='full-star'>&#9733;</p>";
                        }  
                        ?>
                    </div>
                    <p><?php echo $result['beschrijven']; ?></p>
                    <div class='bestemmingen-container-layout-items-book'>
                        <p>€ <?php echo $result['prijs']; ?></p>
                        <a href=''>boeken</a>
                    </div>
                </div>
            </div>
<?php            
        }
    } else {

        echo "We hebben helaas niks kunnen vinden op " . $_GET['searchInput'];
    }
} ?>
   