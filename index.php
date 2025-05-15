<?php 
    session_start();

    $pageTitle = 'BFW Kleinanzeigen';
    include_once "./inc/head.php"; 
    include_once "./Classes_Functions/hilfsfunktionen.php";
    include_once "./Classes_Functions/Database.php";
    include_once "./Classes_Functions/Rubrik.php";
    include_once "./Classes_Functions/hilfsfunktionen.php";
    
    $conn = new Database("localhost", "root", "");
    $rubrikArr = $conn->get_rubriken();

    $seite = $_GET['seite'] ?? 'startseite';
    $public_pages = ['startseite', 'login', 'register'];

    if (!isset($_SESSION['user']) && !in_array($seite, $public_pages)) {
        $seite = 'login';
    } 

    $dateipfad = "./pages/{$seite}.php";
?>

<!DOCTYPE html>
<html lang="de">
<head>
     
    
    
</head>
<main>
    <header>
        <?php include "./inc/header.php"; ?>
    </header>


    <body data-bs-theme="dark"> 
    <?php
        ladeSeite($seite);
    ?>
    </body>

    <footer>
        <?php include "./inc/footer.php" ?>
    </footer>
    
</main>
</html>