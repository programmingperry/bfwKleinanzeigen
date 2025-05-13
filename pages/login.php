<?php
    session_start();
    $pageTitle = 'Anmelden';
    $pageTitle = 'Anmelden'; 
?>

<form method="post">
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

<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email = $_POST['email'] ?? '';
        $passwort = $_POST['passwort'] ?? '';

        $login = new Login($uemail, $uPW);

        if($login->checkLogin()) {
            $_SESSION['eingeloggt'] = true;
            $_SESSION['uemail'] = $email;
            echo "<p>Einloggen erfolgreich</p>"
        } else {
            echo "<p>Falsche Eingabe</p>"
        }
    }
    
?>