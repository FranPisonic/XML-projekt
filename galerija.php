<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Galerija</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Galerija</h1>
        <nav>
            <ul>
                <li><a href="index.html">Početna</a></li>
                <li><a href="galerija.php">Galerija</a></li>
                <li><a href="onama.html">O Nama</a></li>
            </ul>
        </nav>
        <div class="gallery">
            <?php
            $xml = simplexml_load_file('umjetnine.xml') or die("Error: Cannot create object");
            foreach ($xml->artwork as $artwork) {
                echo "<div class='tile'>";
                echo "<img src='" . $artwork->image . "' alt='" . $artwork->title . "'>";
                echo "<h2>" . $artwork->title . "</h2>";
                echo "<p><strong>Autor:</strong> " . $artwork->author . "</p>";
                echo "<p><strong>Godina:</strong> " . $artwork->year . "</p>";
                echo "<p>" . $artwork->description . "</p>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
    <footer class="footer-bottom">
        <p>Fran Pisonic</p>
    </footer>
</body>
</html>
