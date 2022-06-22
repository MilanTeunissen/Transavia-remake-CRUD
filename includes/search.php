<?php
if (isset($_GET['searchInput'])) {
    require_once("connector.php");
    $likeInput = '%'.$_GET['searchInput'].'%';

    $sql = "SELECT * FROM vluchten WHERE vluchthaven LIKE :input OR bestemming LIKE :input2 OR datum LIKE :input3 OR personen LIKE :input4";
    $roundedAverage = "SELECT AVG(rating) FROM reviews WHERE bestemming = :bestemming";
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
   