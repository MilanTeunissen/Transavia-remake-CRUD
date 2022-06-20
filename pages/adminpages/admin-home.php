<?php include('../../includes/session.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <title>admin pagina</title>
  </head>
  <body>
    <main>
        <div class="admin_panel">
            <h1>Admin paneel</h1>
            <a href="../../includes/logout.php"><button>Uitloggen</button></a>
            <h2>Accounts</h2>
            <div class="admin_table">
              <table>
                    <tr>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>Wachtwoord</th>
                        <th>Geboorten datum</th>
                        <th>email</th>
                    </tr>
                    <?php include("../../includes/accounts_table.php") ?>
                </table>
            </div>
            <h2>Berichten</h2>
            <div class="admin_table">
              <table>
                    <tr>
                        <th>Naam</th>
                        <th>Email</th>
                        <th>bericht</th>
                    </tr>
                    <?php include("../../includes/message_table.php") ?>
                </table>
            </div>
            <h2>Vluchten</h2>
            <div class="admin_table">
              <table>
                    <tr>
                        <th>Vluchthaven</th>
                        <th>bestemming</th>
                        <th>datum</th>
                        <th>personen</th>
                        <th>beschrijving</th>
                    </tr>
                    <?php include("../../includes/vluchten_table.php") ?>
                </table>
            </div>
            <h2>Reviews</h2>
            <div class="admin_table">
              <table>
                    <tr>
                        <th>naam</th>
                        <th>bericht</th>
                        <th>rating</th>
                        <th>bestemming</th>
                        <th>validated</th>
                    </tr>
                    <?php include("../../includes/reviews_table.php") ?>
                </table>
            </div>
        </div>
    </main>
    <script src="https://kit.fontawesome.com/460a8e1fd0.js" crossorigin="anonymous"></script>
  </body>
</html>