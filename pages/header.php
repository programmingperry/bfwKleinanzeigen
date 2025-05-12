<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>

<nav class="navbar navbar-expand-lg bg-body-tertiary text-center">
    <ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Start</a>
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
        <a class="nav-link" href="#">Anmeldung</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-disabled="true">Anzeige aufgeben</a>
    </li>
    </ul>
</nav>


<header class="text-center">
    <h1>BFW Kleinanzeigen</h1>
    <p>Es ist fast wie Kleinanzeigen, nur <del>(fast)</del> besser!</p>
</header>
    
</html>