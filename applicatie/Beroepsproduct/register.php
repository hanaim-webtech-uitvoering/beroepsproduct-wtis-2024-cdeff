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
    <div class="history">
    <form action="menu-ingelogd.html" method="get">
        <div>
            <label for="gebruikersnaam_inlog">gebruikersnaam-inlog</label>
            <input type="text" name="gebruikersnaam_inlog" id="gebruikersnaam_inlog" required pattern="([A-z0-9À-ž ]+){2,}">
            <!-- bron van pattern: https://stackoverflow.com/questions/19619428/html5-form-validation-pattern-alphanumeric-with-spaces -->
        </div>

        <div>
            <label for="wachtwoord">wachtwoord</label>
            <input type="password" name="password" id="wachtwoord" required>
        </div>

        <div>
            <label for="first_name">Voornaam</label>
            <input type="text" name="first_name" id="first_name" required pattern="([A-z0-9À-ž ]+){2,}">
        </div>
        <div>
            <label for="tussenvoegesel">Tussenvoegesel</label>
            <input type="text" name="tussenvoegesel" id="tussenvoegesel">
        </div>
        <div>
            <label for="last_name">Achternaam</label>
            <input type="text" name="last_name" id="last_name" required pattern="([A-z0-9À-ž ]+){2,}">
        </div>

        <div>
            <label for="adres">(Aflever)adres (optioneel)</label>
            <input type="text" name="adres" id="adres" required pattern="([A-z0-9À-ž ]+){2,}">
        </div>

        <button type="submit">Maak Account</button>
    </form>
    </div>
    <footer>
        made by &copy; cdef ☁️
        <a href="privacy-verklaring.html">onze privacy-verklaring</a>
    </footer>
    
</body>
</html>