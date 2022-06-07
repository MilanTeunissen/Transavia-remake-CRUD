<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <title>Inloggen</title>
  </head>
  <body>
      <img src="../img/" alt="">
    <main>
        <div class="login">
            <form class="login_form" action="">
                <h1>Aanmelden</h1>
                <div class="elem-group">
                    <label for="name">Voor Naam:</label>
                    <input type="text" id="name" name="department" placeholder="Albertus" pattern=[A-Z\sa-z]{3,20} required>
                </div>
                <div class="elem-group">
                    <label for="name">Achter Naam:</label>
                    <input type="text" id="name" name="arival" placeholder="Wilhelmus" required>
                </div>
                <div class="elem-group">
                    <label for="meeting-time">Geboorte datum</label>
                    <input type="date" id="date_selection" name="meeting-time" value="" min="2022-04-07T00:00" max="2023-01-01T00:00"></label>
                </div>
                <div class="elem-group">
                    <label for="name">Email:</label>
                    <input type="text" id="name" name="arival" placeholder="AlbertusWilhelmus@gmail.com" required>
                </div>
                <div class="elem-group-end">
                  <a href="login-page.php">Heb je al een account?</a>
                  <a href="../../index.html">Terug</a>
                </div>
                <button type="submit">Zoeken</button>
            </form>
        </div>
    </main>
    <script src="https://kit.fontawesome.com/460a8e1fd0.js" crossorigin="anonymous"></script>
  </body>
</html>