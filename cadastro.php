<?php
$login = $_POST['login'];
$senha = md5($_POST['senha']);
$funcao = $_POST['funcao'];

$connect = mysqli_connect('localhost', 'root', '', 'db_pitangueira');

$query_select = "SELECT login FROM tb_func WHERE login = '$login'";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

if ($login == "" || $login == null) {
	echo "<script language='javascript' type='text/javascript'>
	alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
}
else {
	if ($logarray == $login) {
		echo "<script language='javascript' type='text/javascript'>
		alert('Esse login já existe');window.location.href='cadastro.html';</script>";
		die();
	}
	else {
		$query = "INSERT INTO tb_func (login,senha,funcao) VALUES ('$login','$senha','$funcao')";
		$insert = mysqli_query($connect, $query);

		if ($insert) {
			echo "<script language='javascript' type='text/javascript'>
			alert('Usuário cadastrado com sucesso!');window.location.href='index.html'</script>";
		}
		else {
			echo "<script language='javascript' type='text/javascript'>
			alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
		}
	}
}
?>

