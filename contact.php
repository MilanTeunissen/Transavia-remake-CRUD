<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>IcT Air</title>
</head>
<body id="home">
    <?php
        require_once("includes/navigation.php");
    ?>
    <main>
        <div class="contact-container">
            <div class="contact-container-text">
                <h1>Contact</h1>
                <h3>Wil je graag meer weten over een boeking of ben je een journalist en heb je mediavragen over Ict Air? Via de onderstaande informatie kun je contact met ons opnemen.</h3>
            </div>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=technovium&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    </iframe>
                    <a href="https://putlocker-is.org">
                    </a>
                    <br>
                    <a href="https://www.embedgooglemap.net">
                    </a>
                </div>
            </div>
            <div class="contact-container-form">
                <form class="form" action="../includes/message.php" method="POST">
                    <h3>Uw gegevens</h3>
                    <label for="Naam">Naam</label>
                    <input type="text" name="Naam" placeholder="Naam"/>
                    <label>E-mail</label>
                    <input type="text" name="Email" placeholder="E-mail"/>
                    <label for="bericht">Uw bericht</label>
                    <textarea class="bericht" name="bericht" placeholder="Type hier uw bericht"></textarea>
                    <button class="submit" name="berichtSubmit" type="submit">Verstuur</button>
                </form>
                <div class="contact-container-form-extra">
                <h3>Onze gegevens</h3>
                <ul>
                    <li>
                        <p>IcTAir@gmail.com</p>
                    </li>
                    <li>
                        <p>+024 69682725</p>
                    </li>                    
                    <li>
                        <p>Technovium Nijmegen</p>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </main>
    <?php
        require_once("includes/footer.php");
    ?>
    <script src="https://kit.fontawesome.com/460a8e1fd0.js" crossorigin="anonymous"></script>
</body>
</html>