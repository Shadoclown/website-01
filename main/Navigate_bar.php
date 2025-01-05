<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigate Bar</title>
    <link rel="stylesheet" href="../style/Navigate_bar.css">
</head>
<body>
    <nav class="navbar">
        <a href="Homepage.php">
            <div class="logo">
                <img src="../image/LOGO.png" alt="LOGO">
            </div>
        </a>
        <div class="navi_button">
            <ul>
                <li>Home</li>
                <li class="login">Login</li>
            </ul>
        </div>
    </nav>

    <header class="header">
        <h1>Discover places</h1>
        <div class="cover_form">
            <form action="Navigate_bar.php" class="search_form">
                <label for="search_bar">Search</label>
                <div class="input_button">
                    <input type="text" id="search_bar" placeholder="Where do you want to go?">
                    <button type="submit">Search</button>
                </div>
            </form>
        </div>
    </header>

</body>
</html>