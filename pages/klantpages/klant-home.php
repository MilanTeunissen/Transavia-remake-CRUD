<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Ict Air</title>
</head>
<body>
    <?php
        require_once("../../includes/klant-navigation.php");
    ?>
    <header>
        <div class="klant-home-header">
            <h1>Welkom Username</h1>
            <p>Nu je bent ingelogt kunt u gelijk aan de slag om een heerlijke vakantie te boeken</p>
        </div>
    </header>
    <main>
        <div class="klant-home">
            <div class="klant-home-boeken">
                <img src="../../img/boeken.png" alt="">
                <div class="klant-home-boeken-box">
                    <h2>Boeken</h2>
                    <p>blablabla texttexttext </p>
                    <div class="klant-home-boeken-box-buttons">
                        <a class="klant-home-boeken-box-buttons-blue" href="">Naar boeken</a>
                    </div>
                </div>
            </div>
            <div class="klant-home-beheer">
                <img src="../../img/k.png" alt="">
                <div class="klant-home-beheer-box">
                    <h2>Beheer</h2>
                    <p>blablabla texttexttext </p>
                    <div class="klant-home-beheer-box-buttons">
                        <a class="klant-home-beheer-box-buttons-yellow" href="">Naar beheer</a>
                    </div>
                </div>
            </div>
            <div class="klant-home-service">
                <img src="../../img/service.png" alt="">
                <div class="klant-home-service-box">
                    <h2>Service</h2>
                    <p>blablabla texttexttext </p>
                    <div class="klant-home-service-box-buttons">
                        <a class="klant-home-service-box-buttons-green" href="">Naar Service</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
        require_once("../../includes/klant-footer.php");
    ?>
    <script src="https://kit.fontawesome.com/460a8e1fd0.js" crossorigin="anonymous"></script>
</body>
</html>