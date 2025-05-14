<?php 
    session_start();
?>

<h1>Profil von </h1>
<button>Logout</button>

<?php  
    if (isset($_SESSION["user"])) {
        session_destroy();
        header("Location: login.php");
        exit;
    }
?>