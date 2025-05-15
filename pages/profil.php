
<h1>Profil von <?= $_SESSION['user']['username'] ?></h1>
<p>E-Mail: <?= $_SESSION['user']['uemail']?></p>
<p>Registriert am: <?= $_SESSION['user']['regdatum']?></p>

<form method="post">
    <button type="submit" class="btn btn-primary" name="logout">Logout</button>
</form>

<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $logout = $_POST['logout'] ?? '';
        session_unset();
        session_destroy();
        echo "Logout erfolgreich - bis bald!";
        header("Refresh: 1; URL=index.php?seite=login");
        exit;
    }
?>