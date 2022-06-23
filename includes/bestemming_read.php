<?php
    require_once("connector.php");
    $sql = "SELECT * FROM vluchten";
    $stmt = $connect->prepare($sql);
    $stmt->execute();   
    $results = $stmt->fetchAll();

      foreach ($results as $result){ 
        $sql = "SELECT AVG(rating) as rating FROM reviews WHERE vluchtID = :vluchtID";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':vluchtID', $result['ID']);
        $stmt->execute();   
        $resultAVG = $stmt->fetch();
        $average = round($resultAVG['rating']);
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
                            for ($i=0; $i < 5; $i++) { 
                                if ($i < $average) {
                                    echo  "<p class='full-star'>&#9733;</p>";
                                } else {
                                    echo  "<p class='empty-star'>&#9734;</p>";
                                }
                            }
                        ?>
                    </div>
                    <p><?php echo $result['beschrijven']; ?></p>
                    <div class='bestemmingen-container-layout-items-book'>
                        <p>€ <?php echo $result['prijs']; ?></p>
                        <a href='includes/reis_boeken.php'>boeken</a>
                    </div>
                </div>
            </div>
<?php 
    }
?>
   