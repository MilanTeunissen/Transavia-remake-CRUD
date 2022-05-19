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
                    <input type="text" name="naam" placeholder="naam">
                    <p>Password</p>
                    <input type="text" name="wachtwoord" placeholder="wachtwoord">
                </div>
                <button class="inlog_button" name="inlogSubmit">Login</button>
            </from>
      </div>
    </main>
    <script src="https://kit.fontawesome.com/460a8e1fd0.js" crossorigin="anonymous"></script>
  </body>
</html>