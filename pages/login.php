<?php 
  global $conn;
  if (isset($_SESSION["user"])) {
    header("Location: index.php?seite=profil");
    exit;
  }

  $pageTitle = 'Anmelden';

  $error = '';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $email = $_POST['email'] ?? '';
    $passwort = $_POST['passwort'] ?? '';

    $user = $conn->get_user($email, $passwort);
    
    if ($user && isset($user['username'])) {
      $_SESSION["user"] = $user;
      header("Location: index.php");
      exit;
    }
    else {
      $error = "Falsche Zugangsdaten";
    }
  }  
 
  if ($error) {
    echo '<div class="alert alert-danger">' . $error . '</div>';
    }
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
<br>
<button type="button" class="btn btn-primary"><a href="index.php?seite=register">Noch keinen Account? Jetzt registrieren!</a></button>

<?php
?>