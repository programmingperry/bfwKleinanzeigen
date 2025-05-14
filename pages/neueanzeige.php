<?php
session_start();
if (!isset($SESSION["user"])) {
    header("Location: index.php");
    exit;
}
?>

