<?php
session_start();
if(!isset($_SESSION['login'])){
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard do Gestor</title>
</head>
<body>
    <h1>Bem-vindo, Gestor!</h1>
    <p>Essa é a sua página de dashboard.</p>
    <a href="logout.php">Sair</a>
</body>
</html>
