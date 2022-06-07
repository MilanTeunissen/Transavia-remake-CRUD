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
    <main>
        <div class="login">
            <form class="login_form" action="">
                <h1>Inloggen</h1>
                <div class="elem-group">
                    <label for="name">Voor Naam:</label>
                    <input type="text" id="name" name="department" placeholder="Albertus" pattern=[A-Z\sa-z]{3,20} required>
                </div>
                <div class="elem-group">
                    <label for="name">Achter Naam:</label>
                    <input type="text" id="name" name="arival" placeholder="Wilhelmus" required>
                </div>
                <div class="elem-group">
                    <label for="name">Email:</label>
                    <input type="text" id="name" name="arival" placeholder="AlbertusWilhelmus@gmail.com" required>
                </div>
                <div class="elem-group-end">
                  <a href="register-page.php">Nog geen account?</a>
                  <a href="../../index.html">Terug</a>
                </div>
                <button type="submit">Zoeken</button>
            </form>
        </div>
    </main>
    <script src="https://kit.fontawesome.com/460a8e1fd0.js" crossorigin="anonymous"></script>
  </body>
</html>