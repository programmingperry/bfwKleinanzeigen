<!DOCTYPE html>
<html lang="de">
<head>
    <title>BFW Kleinanzeigen</title>  
    <?php include "./pages/head.php" ?> 
</head>

<body data-bs-theme="dark"> 
    
    
    <?php 
    include_once "./Classes_Functions/DatabaseConnection.php";
    include_once "./Classes_Functions/Rubrik.php";
        $conn = new DatabaseConnection("localhost", "root", "");
        $rubrikArr = $conn->get_rubriken();
    ?>
    <?php include "./pages/header.php"; ?>
    
    Test
</body>

<footer>
<?php include "./pages/footer.php" ?>
</footer>
</html>