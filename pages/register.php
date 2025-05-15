<?php 
    session_start();
    if (isset($_SESSION["user"])) {
        header("Location: index.php?seite=profil");
        exit;
        }

    $pageTitle = 'Registrierung';
 
    $error = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        $username = $_POST['username'] ?? '';
        $email = $_POST['email'] ?? '';
        $passwort = $_POST['passwort'] ?? '';

        $new_user = $conn->register_user($username, $passwort, $email);
       
        if($new_user === true) {
            $_SESSION["user"] = $new_user;
            header("Location: index.php");
            exit;
        } else {
            $error = "Falsche Zugangsdaten";
        }
    }

    if ($error) {
        echo '<div class="alert alert-danger">' . $error . '</div>';
        } 
?>

<form method="post">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input class="form-control" type="text" aria-label="username" name="username">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="InputPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="InputPassword1" name="passwort">
    </div>
    <button type="Login" class="btn btn-primary">Submit</button>
</form>
<br>
<button type="button" class="btn btn-primary"><a href="index.php?seite=login">Du hast schon einen Account? Logge dich ein</a></button>



