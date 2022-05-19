<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Asap&family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Inloggen</title>
  </head>
  <body>
    <main>
      <div class="login">
            <H1>Inloggen</H1>
            <form class="form_inlog" action="includes/login.php" method="POST">
                <div class="inlog_style">
                    <p>Username</p>
                    <input type="text" name="username" placeholder="username">
                    <p>Password</p>
                    <input type="text" name="wachtwoord" placeholder="wachtwoord">
                </div>
                <button class="inlog_button" name="inlogSubmit">Login</button>
            </from>
=======
          <form class="home_form" action="">
              <h1>Waar wil je heen?</h1>
              <div class="elem-group">
                  <label for="name">Vanaf</label>
                  <input type="text" id="name" name="department" placeholder="Vertrekluchthaven" pattern=[A-Z\sa-z]{3,20} required>
              </div>
              <div class="elem-group">
                  <label for="name">Naar</label>
                  <input type="text" id="name" name="arival" placeholder="Bestemming" required>
              </div>
              <div class="elem-group-inlined">
                  <div class="date_selection">
                      <label for="meeting-time">Vertrek op</label>
                      <input type="datetime-local" id="date_selection" name="meeting-time" value="" min="2022-04-07T00:00" max="2023-01-01T00:00"></label>
                  </div>
                  <div class="date_selection">
                      <label for="meeting-time">Vertrek op</label>
                      <input type="datetime-local" id="date_selection" name="meeting-time" value="" min="2022-04-07T00:00" max="2023-01-01T00:00"></label>
                  </div>
              </div>
              <div class="elem-group">
                  <label for="adult">Wie gaan er mee?</label>
                  <input type="number" id="adult" name="total_adults" placeholder="1 Volwassene" min="1" max="20" required>
              </div>
              <button type="submit">Zoeken</button>
          </form>
>>>>>>> Stashed changes:includes/pages/login-page.php
      </div>
    </main>
    <script src="https://kit.fontawesome.com/460a8e1fd0.js" crossorigin="anonymous"></script>
  </body>
</html>