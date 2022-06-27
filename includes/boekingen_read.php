<?php 
require_once("includes/connector.php");
session_start();
$dataTable = "crud-ict";
$sql = "SELECT vluchten.* FROM boekingen JOIN accounts ON accounts.ID = boekingen.accountID JOIN vluchten ON vluchten.ID = boekingen.vluchtID WHERE boekingen.accountID = :loggedInUserID";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':loggedInUserID', $_SESSION['ID']);
$stmt->execute();
$result = $stmt->fetchAll();
?>

<div class="boekingen-container">
        <?php 
            foreach ($result as $result){ ?>
            <div class='boeken-container'>
                <div class='boeken-container-layout'>
                    <div class='boeken-container-layout-img'>
                        <img src='img/destination-malaga.png'>
                    </div>
                    <div class='boeken-container-layout-items'>
                        <h3><?php echo $result['bestemming']; ?></h3>
                        <p><?php echo $result['beschrijven']; ?></p>
                        <div class='boeken-container-layout-items-book'>
                            <p>Vertrekt op: <?php echo $result['datum']; ?></p>
                            <p>€ <?php echo $result['prijs']; ?></p>
                            <a class="boeken" href='Cancel'>Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php        
            }
        ?>
</div>
