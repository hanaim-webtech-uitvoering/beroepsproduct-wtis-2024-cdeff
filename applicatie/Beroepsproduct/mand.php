<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria Sole Machina 🍕</title>
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
        <ul class="bestelling">
            <li>pizza vegtable x 2</li>
            <li>pizza mixed x 1</li>
            <li>cocktail x 1</li>
            <li>totaal: 50 euro</li>
            <li>Status: -</li>
        </ul>

        <form action="menu-ingelogd.html" method="get">
            <div>
            <label for="adres">(Aflever)adres (optioneel)</label>
            <input type="text" name="adres" id="adres" pattern="([A-z0-9À-ž ]+){2,}">
        </div>
        <button type="submit">bestellen</button>

    </form>
    </main>


    <footer>
        made by &copy; cdef ☁️
        <a href="privacy-verklaring.html">onze privacy-verklaring</a>
    </footer>
</body>
</html>