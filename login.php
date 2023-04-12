<?php
session_start();
$login = $_POST['login'];
$senha = MD5($_POST['senha']);

$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect, 'db_pitangueira');
$query_select = "SELECT * FROM tb_func WHERE login = '$login' AND senha = '$senha'";
$select = mysqli_query($connect, $query_select);

if(mysqli_num_rows($select) == 1){
    $array = mysqli_fetch_array($select);
    $_SESSION['login'] = $login;
    if($array['tipo'] == 'gestor'){
        header('Location: dashboard_gestor.php');
    }else{
        header('Location: dashboard_tecnico.php');
    }
}else{
    unset($_SESSION['login']);
    header('Location: login.html');
}
?>
