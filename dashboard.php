<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}
?>
<h1>xush kelibsiz: <?= $_SESSION['user'] ?></h1>