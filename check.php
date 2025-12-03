<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST" ){
    $login = $_POST['login'];
    $password = $_POST['password'];
    if($login == 'Murodbek' && $password == "12345"){
        $_SESSION['user'] = $login;
        header("Location: dashboard.php");
    }else{
        echo "Login yoki parol xato!";
    }
}
?>