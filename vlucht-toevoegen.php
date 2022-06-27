<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href=" css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <title>Inloggen</title>
  </head>
  <body>
    <main>
        <div class="login">
            <form class="login_form" action="includes/vlucht_create.php" method="POST" >
                <h1>vlucht toevoegen</h1>
                <div class="elem-group">
                    <label for="name">vluchthaven:</label>
                    <input type="text" id="name" name="vluchthaven  placeholder="vluchthaven" pattern=[A-Z\sa-z]{3,20} required>
                </div>
                <div class="elem-group">
                    <label for="name">bestemming:</label>
                    <input type="text" id="name" name="bestemming"  placeholder="bestemming" pattern=[A-Z\sa-z]{3,20} required>
                </div>
                <div class="elem-group">
                    <label for="name">datum:</label>
                    <input type="date" id="name" name="datum"  placeholder="datum" pattern=[A-Z\sa-z]{3,20} required>
                </div>
                <div class="elem-group">
                    <label for="name">personen:</label>
                    <input type="number" id="name" name="personen"  placeholder="personen" pattern=[A-Z\sa-z]{3,20} required>
                </div>
                <div class="elem-group">
                    <label for="name">beschrijving:</label>
                    <input type="text" id="name" name="beschrijven"  placeholder="beschrijving" pattern=[A-Z\sa-z]{3,20} required>
                </div>
                <div class="elem-group">
                    <label for="name">prijs</label>
                    <input type="text" id="name" name="prijs" step="0.01"  placeholder="prijs" pattern=[A-Z\sa-z]{3,20} required>
                </div>
                <a href=""></a><button type="submit" name="toevoegenSubmit">Inloggen</button>
            </form>
        </div>
    </main>
    <script src="https://kit.fontawesome.com/460a8e1fd0.js" crossorigin="anonymous"></script>
  </body>
</html>