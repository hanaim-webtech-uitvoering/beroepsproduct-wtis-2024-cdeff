<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <!-- logo -->
        <div class="navbar">
            <img class="logo" src="img/logo.png" alt="logo of Pizzeria Sole Machina 🍕">
            <ul class="nav-item">
                <li>
                    <a href="mand.html">(3)🧺</a>
                </li>
                <li>
                    <a href="inlog.html">log in 👤</a>
                </li>
                <li>
                    <a href="profiel-klant.html">history ⌛</a>
                </li>
                <li>
                    <a href="menu.html">🍕menu</a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <h1>inloggen</h1>
        <div class=" history">
        <form action="menu-ingelogd.html" method="get" class="inlog">
            <div>
                <label for="gebruikersnaam">gebruikersnaam</label>
                <input type="text" name="gebruikersnaam" id="gebruikersnaam" required>
            </div>
            <div>
                <label for="wachtwoord">wachtwoord</label>
                <input type="password" name="wachtwoord" id="wachtwoord" required>
            </div>
            <button>
                <a href="menu-ingelogd.html">klant login</a>
            </button>
            <button>
                <a href="bestelling-overzicht-personeel.html">medewerker login</a>
            </button>
        </form>        
        <a href="register.html">Nog geen account?</a>
        </div>
    </main>

    <footer>
        made by &copy; cdef ☁️
        <a href="privacy-verklaring.html">onze privacy-verklaring</a>
    </footer>
</body>

</html>