<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <title>registeren</title>
  </head>
  <body>
      <img src="../img/" alt="">
    <main>
        <div class="login">
            <form class="login_form" action="../includes/register.php" method="POST">
                <h1>Account aanmaken</h1>
                <div class="elem-group">
                    <label for="name">Uw voor naam:</label>
                    <input type="text" name="naam" placeholder="Albertus" pattern=[A-Z\sa-z]{3,20} required>
                </div>
                <div class="elem-group">
                    <label for="name">Uw achter naam:</label>
                    <input type="text" name="achternaam" placeholder="Wilhelmus" required>
                </div>
                <div class="elem-group">
                    <label for="name">Uw wachtwoord:</label>
                    <input type="password" name="wachtwoord" placeholder="kies voor een veilig wachtwoord" required>
                </div>
                <div class="elem-group">
                    <label for="meeting-time">Uw geboorte datum</label>
                    <input type="date" name="datum" value="" min="2022-04-07T00:00" max="2023-01-01T00:00"></label>
                </div>
                <div class="elem-group">
                    <label for="name">Uw email:</label>
                    <input type="text" name="email" placeholder="AlbertusWilhelmus@gmail.com" required>
                </div>
                <div class="elem-group-end">
                  <a href="login-page.php">Heb je al een account?</a>
                  <a href="../index.html">Terug</a>
                </div>
                <button type="submit" name="registrerenSubmit">account aanmaken!</button>
            </form>
        </div>
    </main>
    <script src="https://kit.fontawesome.com/460a8e1fd0.js" crossorigin="anonymous"></script>
  </body>
</html>
