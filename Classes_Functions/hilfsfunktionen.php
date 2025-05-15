<?php 

function ladeSeite($seite) {
    global $conn;
    $pfad = "./pages/{$seite}.php";
    if (file_exists($pfad)) {
        include $pfad;
    } else {
        echo "<p>Seite nicht gefunden.</p>";
    }
}
