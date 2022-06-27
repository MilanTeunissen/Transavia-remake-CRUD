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
    <header> 
        <div class="carousel">
            <i class="fa-solid fa-circle-left" id="prevBtn"></i>
            <form class="home_form" action="bestemmingen-search.php" method="GET">
                <h1>Waar wil je heen?</h1>
                <div class="elem-group">
                    <label for="name">Vanaf</label>
                    <input type="text" id="name" name="vluchthaven" placeholder="Vertrekluchthaven" pattern=[A-Z\sa-z]{3,20} required>
                </div>
                <div class="elem-group">
                    <label for="name">Naar</label>
                    <input type="text" id="name" name="bestemming" placeholder="Bestemming" required>
                </div>
                <div class="elem-group">
                    <label for="meeting-time">Vertrek op</label>
                    <input type="date" id="date_selection" name="datum" value="" min="2022-04-07T00:00" max="2023-01-01T00:00"></label>
                </div>
                <div class="elem-group">
                    <label for="adult">Wie gaan er mee?</label>
                    <input type="number" id="adult" name="personen" placeholder="1 Volwassene" min="1" max="20">
                </div>
                <button type="submit" name="searchInput">Zoeken</button>
            </form>
            <i class="fa-solid fa-circle-right" id="nextBtn"></i>
            <div class="carousel_slide">
                <img src="img/carousel_vacation2.png" id="firstclone" alt="">
                <img src="img/carousel_plane.png" alt="">
                <img src="img/carousel_destenation.png" alt="">
                <img src="img/carousel_airport.png" alt="">
                <img src="img/carousel_vacation.png" alt="">
                <img src="img/carousel_vacation2.png" alt="">
                <img src="img/carousel_plane.png" id="lastclone" alt="">
            </div>
        </div>
    </header>
    <main>
        <div class="vakanties">
            <?php include("includes/bestemming_read.php")?>
        </div>
    </main>
    
<script src="https://kit.fontawesome.com/460a8e1fd0.js" crossorigin="anonymous"></script>
</body>

</html>