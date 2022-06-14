<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body id="home">
    <?php
        require_once("includes/navigation.php");
    ?>


    <div class="star-rating">
        <button class="star">&#9734;</button>
        <button class="star">&#9734;</button>
        <button class="star">&#9734;</button>
        <button class="star">&#9734;</button>
        <button class="star">&#9734;</button>
        <p class="current-rating">0 of 5</p>
    </div>

    <div class="reviews">
        <h1>Lees hier reviews van onze klanten!</h1>
        <?php include("includes/reviews_page.php") ?>
    </div>
    <?php
        require_once("includes/footer.php");
    ?>
    <script src="js/starrating.js"></script>
</body>
</html>