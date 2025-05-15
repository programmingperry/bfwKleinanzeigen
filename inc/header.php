<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (!empty($pageTitle)) { echo $pageTitle; } else { echo 'BFW Kleinanzeigen'; } ?></title>
</head>

<nav class="navbar navbar-expand-lg bg-body-tertiary text-center">
    <ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="http://localhost/github/bfwKleinanzeigen/index.php?seite=startseite">Start</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Rubriken</a>
        <ul class="dropdown-menu">
        <?php foreach ($rubrikArr AS $rubrik) {
                    $rubrik->writeLink();
                } ?>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/github/bfwKleinanzeigen/index.php?seite=login
">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/github/bfwKleinanzeigen/index.php?seite=register
">Registrieren</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/github/bfwKleinanzeigen/index.php?seite=profil
    ">Profil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/github/bfwKleinanzeigen/index.php?seite=neueanzeige
">Neue Anzeige</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/github/bfwKleinanzeigen/index.php?seite=
">Meine Anzeigen</a>
    </li>
    <?php if (isset($_SESSION['user']['username'])): ?>
    <li class="nav-item">
        <a class="nav-link disabled" aria-disabled="true">Moin <?= ($_SESSION['user']['username']) ?></a>
    </li>               
    <?php endif;?>
    </ul>
</nav>


<main class="text-center">
    <?php if (!empty($pageTitle)) : ?>
        <h2><?php echo $pageTitle; ?></h2>
    <?php endif; ?>
            </main>
    
</html>