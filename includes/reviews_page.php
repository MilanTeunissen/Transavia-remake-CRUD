<?php 
require_once("connector.php");
$result['validate'] = 1;
$sql = "select * FROM reviews WHERE validate = :validate";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':validate', $result['validate']);
$stmt->execute();
$results = $stmt->fetchAll();

    
    foreach($results as $result){
?>
        <div class="review">
            <div class="user-rating">
            <div class="user-review">
            <div class="user-img">
                       <img src="img/rick-raddatz.png" alt="">
                    </div>
                    <p><b><?php echo $result['naam']; ?></b><br> heeft<b> <?php echo $result['bestemming']; ?></b> beoordeeld</p>
                </div>
                <div class="star-rating">
                    <div class="star-rating-stars">
                        <?php if($result['rating'] === 1){
                            echo  "<button class='star'>&#9734;</button>";
                        } elseif ($result['rating'] === 2){
                            echo  "<button class='star'>&#9734;</button>";
                            echo  "<button class='star'>&#9734;</button>";
                        } elseif ($result['rating'] === 3){
                            echo  "<button class='star'>&#9734;</button>";
                            echo  "<button class='star'>&#9734;</button>";
                            echo  "<button class='star'>&#9734;</button>";
                        } elseif ($result['rating'] === 4){
                            echo  "<button class='star'>&#9734;</button>";
                            echo  "<button class='star'>&#9734;</button>";
                            echo  "<button class='star'>&#9734;</button>";
                            echo  "<button class='star'>&#9734;</button>";
                        } elseif ($result['rating'] === 5){
                            echo  "<button class='star'>&#9734;</button>";
                            echo  "<button class='star'>&#9734;</button>";
                            echo  "<button class='star'>&#9734;</button>";
                            echo  "<button class='star'>&#9734;</button>";
                            echo  "<button class='star'>&#9734;</button>";
                        }  

                        ?>
                    </div>
                    <p class="current-rating"><?php echo $result['rating']; ?> of 5</p>
                </div>
                <p><?php echo $result['bericht']; ?></p>
            </div>
        </div>

<?php 
    }
?>

    

 
