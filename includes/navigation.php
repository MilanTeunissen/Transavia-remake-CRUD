<?php
if (isset($_SESSION['ID'])) { ?>
        <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <nav>
            <div class="nav_items primary">
                <ul>
                    <li><a href="../index.php"><i class="fa-solid fa-house-chimney"></i></a></li>
                    <li><a href="includes/login.php">Boekingen</a></li>
                    <li><a href="../contact.php">Service</a></li>
                </ul>
            </div>
            <div class="nav_items secondary">
                <ul>
                    <li><a href="../bestemmingen.php">Bestemmingen</a></li>
                    <li><a href="../overons.php">Over ons</a></li>
                    <li><a href="../contact.php">Contact</a></li>
                    <li><a href="../review.php">Reviews</a></li>
                    <li><a>|</a></li>
                    <li><a href="../pages/login-page.php">Inloggen</a></li>
                    <li><a href="../pages/register-page.php">Aanmelden</a></li>
                </ul>
            </div>
        </nav>
    </body>
    </html>
<?php    
} else { ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="nav_items primary">
            <ul>
                <li><a href="../../index.php"><i class="fa-solid fa-house-chimney"></i></a></li>
                <li><a href="../boekingen.php">Boekingen</a></li>
                <li><a href="../../contact.php">Service</a></li>
            </ul>
        </div>
        <div class="nav_items secondary">
            <ul>
                <li><a href="../../bestemmingen.php">Bestemmingen</a></li>
                <li><a href="../../overons.php">Over ons</a></li>
                <li><a href="../../contact.php">Contact</a></li>
                <li><a href="../../review.php">Reviews</a></li>
                <li><a>|</a></li>
                <li><a href="../../includes/logout.php">Uitloggen</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>
<?php
}
?>
