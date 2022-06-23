<?php
require_once("connector.php");
$sql = "SELECT * FROM vluchten";
$stmt = $connect->prepare($sql);
$stmt->execute();   
$results = $stmt->fetchAll();

      foreach ($results as $result){ 
?>
            <div class='bestemmingen-container'>
            <div class='bestemmingen-container-layout'>
                <div class='bestemmingen-container-layout-img'>
                    <img src='img/destination-malaga.png'>
                </div>
                <div class='bestemmingen-container-layout-items'>
                    <h3><?php echo $result['bestemming']; ?></h3>
                    <div class='star-rating-stars'>
                        <?php 
                        if($result['rating'] === 1){
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                        } elseif ($result['rating'] === 2){
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                        } elseif ($result['rating'] === 3){
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                        } elseif ($result['rating'] === 4){
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='full-star'>&#9733;</p>";
                            echo  "<p class='empty-star'>&#9734;</p>";
                        } elseif ($result['rating'] === 5){
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
?>
   