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
    <nav>
        <div class="nav_items primary">
            <ul>
                <li><a href="index.php"><i class="fa-solid fa-house-chimney"></i></a></li>
                <li><a href="">Plan en boek</a></li>
                <li><a href="">Service</a></li>
            </ul>
        </div>
        <div class="nav_items secondary">
            <ul>
                <li><a href="">Bestemmingen</a></li>
                <li><a href="">Reviews</a></li>
                <li><a href="overons.php">Over ons</a></li>
                <li><a>|</a></li>
                <li><a href="pages/login-page.php">Inloggen</a></li>
                <li><a href="pages/register-page.php">Aanmelden</a></li>
            </ul>
        </div>
    </nav>
    <header>
        <div class="header-overons">
            <img loading="lazy" src="img/header-overons.png" alt="">
            <div class="header-overons-text">
                <i class="fa-solid fa-plane"></i>
                <h2>IcT Air</h2>
            </div>
        </div>
    </header>
    <main>
        <div class="overons-container">
            <div class="overons-container-intro">
                <h2>Welkom bij IcT Air</h2>
                <p>IcT Air is een budgetluchtvaartmaatschappij die in 2022 is opgericht. Sinds kort brengen wij onze passagiers met veel plezier naar de mooiste zakelijke en vakantiebestemmingen in Europa. IcT Air is onderdeel van de AIR FRANCE KLM Groep. Daarmee behoren we tot de grootste luchtvaartgroep van Europa.</p>
            </div>
            <div class="overons-container-text">
                <h2>Fun Facts:</h2>
                <ul>
                    <li>
                        <i class="fa-solid fa-check"></i>
                        <p>
                            Ict Air is opgestart door 2, 1e jaars studenten in Nijmegen in het jaar 2022.
                        </p>
                    </li>
                    <li>
                        <i class="fa-solid fa-check"></i>
                        <p>
                            Wij gebruiken duurzame brandstof en pinda's
                        </p>
                    </li>
                    <li>
                        <i class="fa-solid fa-check"></i>
                        <p>
                            Wij hebben een hulp service die 24/7 klaar staat voor u!
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <?php
        require_once("includes/footer.php");
    ?>
    <script src="https://kit.fontawesome.com/460a8e1fd0.js" crossorigin="anonymous"></script>
</body>
</html>