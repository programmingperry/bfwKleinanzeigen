<!DOCTYPE html>
<html lang="de">
<head>
    <?php 
        $pageTitle = 'BFW Kleinanzeigen';
        include "./inc/head.php"; 
        include_once "./Classes_Functions/Database.php";
        include_once "./Classes_Functions/Rubrik.php";
        include_once "./Classes_Functions/hilfsfunktionen.php";
        
        $conn = new Database("localhost", "root", "");
        $rubrikArr = $conn->get_rubriken();
    ?>
    
</head>
<main>
    <header>
        <?php include "./inc/header.php"; ?>
    </header>


    <body data-bs-theme="dark"> 
        <?php
            if (isset($_GET['seite'])) {
                $seite = $_GET['seite'];
                $datei = './pages/'. $seite . '.php';

                if (file_exists($datei)) {
                    include $datei;
                } else {
                    echo "<p>Seite nicht gefunden.</p>";
                }
            } else {
                include './pages/startseite.php';
            } 
        ?>
    </body>

    <footer>
        <?php include "./inc/footer.php" ?>
    </footer>
    
</main>
</html>