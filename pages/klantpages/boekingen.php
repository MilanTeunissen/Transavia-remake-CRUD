<?php include('../../includes/connector.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Ict Air</title>
</head>
<body id="home">
    <?php
        require_once("../../includes/klant-navigation.php");
    ?>
    <main>
        <div class="boekingen">
            <?php include("../../includes/boekingen_read.php")?>
        </div>
    </main>
    <?php
        require_once("../../includes/klant-footer.php");
    ?>
<script src="https://kit.fontawesome.com/460a8e1fd0.js" crossorigin="anonymous"></script>
</body>
</html>